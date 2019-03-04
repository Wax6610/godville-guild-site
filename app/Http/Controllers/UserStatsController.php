<?php

namespace App\Http\Controllers;

use App\GuildMember;
use App\Services\ProxyService;
use Carbon\Carbon;
use App\Services\UserStatsService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

/**
 * @property UserStatsService service
 */
class UserStatsController extends Controller
{
    protected $guild_name = 'Драконы Годвилля';

    public function __construct(UserStatsService $service, ProxyService $proxyService )
    {
        $this->service = $service;
        $this->proxyService = $proxyService;
    }

    public function getProgress($start_date = null, $end_date = null)
    {
        $start_date = ($start_date === null) ? Carbon::yesterday() : Carbon::parse($start_date);
        $end_date = ($end_date === null) ? Carbon::today() : Carbon::parse($end_date);

        $progress = DB::table('user_stats as start')
            ->join('user_stats as end', 'start.guild_member_id', '=', 'end.guild_member_id')
            ->join('guild_members as user', 'start.guild_member_id', '=', 'user.id')
            ->whereDate('start.created_at', $start_date)
            ->whereDate('end.created_at', $end_date)
            ->select(DB:: raw('end.bricks_cnt - start.bricks_cnt as bricks_cnt,
                                        end.wood_cnt - start.wood_cnt as wood_cnt,
                                        end.ark_f - start.ark_f as ark_f,
                                        end.ark_m - start.ark_m as ark_m,
                                        end.arena_won - start.arena_won as arena_won,
                                        end.arena_lost - start.arena_lost as arena_lost,
                                        end.savings - start.savings as savings,
                                        end.level, end.clan_position, user.name'))->get();
        // echo dd($progress->toSql());
        return json_encode($progress);
    }

    public function getSnapshot()
    {
        $users = GuildMember::where('bad_attempts', '<', 10)->doesntHave('todayStats')->inRandomOrder()->limit(15)->get();
			$count = GuildMember::where('bad_attempts', '<', 5)->doesntHave('todayStats')->count();
	  Log::info("'getSnapshot: started need to done : {$count}");	

        $proxies = $this->proxyService->getList();

        foreach ($users as $key => $user) {
            try {
                /* Если нет прокси выходим*/
                if (empty($proxies)){
                    Log::error('getSnapshotError: $proxies is empty');
                    return;
                }
                $currentProxy = null;

                /* Ищем живой прокси */
                foreach ($proxies as $key => $proxy){
                    unset($proxies[$key]);
                    if ($this->proxyService->isAlive($proxy)){
                        $currentProxy = $proxy;
	                $this->proxyService->removeBadAttempt($proxy);
                        break ;
                    }
		    $this->proxyService->addBadAttempt($proxy);			
                }
                if ($currentProxy === null)
                    return;

                /*Собираем данные*/
                $user_stats = $this->service->getFromApi($user->name, $proxy);

                /* Если данных нет увеличиваем счетчик неудачных попыток для бога и прокси*/
                if (empty($user_stats)){
                    Log::critical("getSnapshot: {$user->name} stats is empty");

                    $user->increment('bad_attempts', 1);
		            sleep(5);
                    continue;
                }


                if ($user_stats->clan !== env("GUILD_NAME")) {
                    $user->delete();
                } else {
                    $this->service->save($user->id, $user_stats);
                    Log::info("'getSnapshot: added : {$user->name} ");
                }
                sleep(5);

            } catch (\Exception $e) {
                echo $e->getMessage();
                Log::error("getSnapshotError: {$e->getMessage()}");
            }
        }
	 Log::info("'getSnapshot: done");	
    return;
    }
}
