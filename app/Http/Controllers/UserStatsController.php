<?php

namespace App\Http\Controllers;

use App\GuildMember;
use App\GuildMembers;
use App\Services\ProxyService;
use App\UserStats;
use Carbon\Carbon;
use App\Services\UserStatsService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use function PHPSTORM_META\type;

/**
 * @property UserStatsService service
 */
class UserStatsController extends Controller
{
    protected $guild_name = 'Драконы Годвилля';

    public function __construct(UserStatsService $service, ProxyService $proxyService)
    {
        $this->service = $service;
        $this->proxyService = $proxyService;
    }

    public function getProgress($start_date = null, $end_date = null)
    {
        $start_date = ($start_date === null) ? Carbon::yesterday() : Carbon::parse($start_date);
        $end_date = ($end_date === null) ? Carbon::today() : Carbon::parse($end_date);

        $progress = $this->service->getDateProgress($start_date, $end_date);
        return json_encode($progress);
    }

    public function getTop($start_date = null, $end_date = null)
    {
        $start_date = ($start_date === null) ? Carbon::yesterday() : Carbon::parse($start_date);
        $end_date = ($end_date === null) ? Carbon::today() : Carbon::parse($end_date);

        $data = $this->service->getDateProgress($start_date, $end_date);
        $data_count = $data->count();

        if ($data_count === 0) return json_encode((object)[]);

        $users_count = GuildMember:: count();
        $bricks_cnt = $data->sortByDesc('bricks_cnt')->where('returned_after', 0)->take(10)->values()->toArray();
        $wood_cnt = $data->sortByDesc('wood_cnt')->where('returned_after', 0)->take(10)->values()->toArray();
        $savings = $data->sortByDesc('savings')->where('returned_after', 0)->take(10)->values()->toArray();


        $ark_sum = $data->sortByDesc(function ($item, $key) {
            return $item->ark_m + $item->ark_f;
        })->where('returned_after', 0)->take(10)->values();

        $ark_sum = $ark_sum->map(function ($item, $key) {
            $item->ark_sum = $item->ark_m + $item->ark_f;
            return $item;
        });

        $arena_points = $data->sortByDesc(function ($item, $key) {
            return $item->arena_won - $item->arena_lost;
        })->where('returned_after', 0)->take(10)->values();

        $arena_points = $arena_points->map(function ($item, $key) {
            $item->arena_points = $item->arena_won - $item->arena_lost;
            return $item;
        });

        return json_encode(compact('data_count', 'users_count', 'bricks_cnt', 'wood_cnt', 'savings', 'ark_sum', 'arena_points'));
    }


    public function getSnapshot()
    {
	
        $users = GuildMember::where('bad_attempts', '<', 10)->doesntHave('todayStats')->inRandomOrder()->limit(15)->get();
        $count = GuildMember::where('bad_attempts', '<', 10)->doesntHave('todayStats')->count();
		
		if(empty($users)) return ;
		
		
        Log::info("getSnapshot: started need to done : {$count}");

        $proxies = $this->proxyService->getList();

	Log::info("getSnapshot: proxy count:{$proxies->count()}") ;
	
	Log::info("getSnapshot: users count : {$users->count()}");
	

        foreach ($users as $key => $user) {
            try {
				sleep (10);
                /* Если нет прокси выходим*/
                if (empty($proxies)) {
                    Log::error('getSnapshotError: $proxies is empty');
                    return;
                }
                $currentProxy = null;

                /* Ищем живой прокси */
                foreach ($proxies as $key => $proxy) {                    
                    if ($this->proxyService->isAlive($proxy)) {
                        $currentProxy = $proxy;
                        $this->proxyService->removeBadAttempt($proxy);

unset($proxies[$key]);
                        break;
                    }
			//Log::info("'getSnapshot: bad proxy");
                    $this->proxyService->addBadAttempt($proxy);
 $this->proxyService->addBadAttempt($proxy);
 $this->proxyService->addBadAttempt($proxy);
unset($proxies[$key]);
                }

                // Если прокси кончились, то выходим
                if ($currentProxy === null){
Log::info("'getSnapshot: null proxy");
 return;
}                   

                /*Собираем данные*/
Log::info("'getSnapshot: getFromApi");
                $user_stats = $this->service->getFromApi($user->name, $proxy);

                /* Если данных нет увеличиваем счетчик неудачных попыток для бога*/
                if (empty($user_stats)) {
                    Log::critical("getSnapshot: {$user->name} stats is empty");

                    $user->increment('bad_attempts', 1);
                    //  sleep(3);
                    continue;
                }

                if ($user_stats->clan !== env("GUILD_NAME")) {
                    $user->delete();
                } else {
                    $this->service->save($user->id, $user_stats);
                    Log::info("'getSnapshot: added : {$user->name} ");
                }
                //  sleep(3);
            } catch (\Exception $e) {
                Log::error("getSnapshotError: {$e->getMessage()}");
            }
        }
        Log::info("'getSnapshot: done");
        return;
    }
	
	
	public function getOneUserSnapshot()
    {	
        $user = GuildMember::where('bad_attempts', '<', 15)->doesntHave('todayStats')->OrderBy('bad_attempts', 'desc')->first();
		
		if(empty($user)) return ;
	
            try {
                
                $user_stats = $this->service->getFromApi($user->name);

                /* Если данных нет увеличиваем счетчик неудачных попыток для бога*/
                if (empty($user_stats)) {
                    Log::critical("getOneUserSnapshot: {$user->name} stats is empty");
                    $user->increment('bad_attempts', 1);                    
					return ;
                }

                if ($user_stats->clan !== env("GUILD_NAME")) {
                    $user->delete();
                } else {
                    $this->service->save($user->id, $user_stats);
                    Log::info("'getOneUserSnapshot: added : {$user->name} ");
                }
                //  sleep(3);
            } catch (\Exception $e) {
                Log::error("getOneUserSnapshotError: {$e->getMessage()}");
            }
    }

    public function checkUsersActivity()
    {
        try {
            $end_date = Carbon::today();
            $start_date = Carbon::yesterday();
            /* Получаем прогресс за один день*/
            $progress = $this->service->getDateProgress($start_date, $end_date)->keyBy('name');
            // На случай повторного срабатывания скрипта отсеиваем пользователей, которых проверили
            $users = GuildMember:: whereDate('inactive_check_date', '<', $end_date)->get()->keyBy('name');

            foreach ($users as $user) {
                $user->inactive_check_date = $end_date;

                if (!isset($progress[$user->name])) {
                    $user->save();
                    continue;
                }
                // Если статистика не изменилась, то увеличиваем счетчик неактивности.
                if (!$this->service->isUserActive($progress[$user->name])) {
                    $user->days_inactive += 1;
                } else {  // Игрок в этот день был активен. Нужно определить был ли он неактивен до этого (days_inactive).

                    if ($user->days_inactive > 0) { // если игрок в прошлые дни был неактивен, то сбрасываем счетчик и в статистику за этот день запишем счетчик нективности
                        // Ищем статистику по юзеру на сегодняший день
                        $user_stats = UserStats::whereDate('created_at', $end_date)
                            ->where('guild_member_id', $user->id)
                            ->first();

                        $user_stats->returned_after = $user->days_inactive;
                        $user->days_inactive = 0;
                        $user_stats->save();
                    }
                }
                $user->save();
            }
        } catch (\Exception $exception) {
            Log::error("checkUsersActivity: {$exception->getMessage()}");
        }
    }
}
