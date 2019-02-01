<?php

namespace App\Http\Controllers;

use App\GuildMember;
use App\GuildMembers;
use App\UserStats;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Services\UserStatsService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

/**
 * @property UserStatsService service
 */
class UserStatsController extends Controller
{
    protected $guild_name = 'Драконы Годвилля';

    public function __construct(UserStatsService $service)
    {
        $this->service = $service;
    }

    public function getProgress($start_date = null, $end_date = null){
        if (empty($start_date)) $start_date = Carbon::yesterday();
        if (empty($end_date)) $end_date = Carbon :: today();

        $progress = DB::table('user_stats as start')
            ->join('user_stats as end', 'start.guild_member_id', '=', 'end.guild_member_id')
            ->join('guild_members as user', 'start.guild_member_id', '=', 'user.id')
            ->whereDate('start.created_at',$start_date)
            ->whereDate('end.created_at',$end_date)
            ->select( DB :: raw('end.bricks_cnt - start.bricks_cnt as bricks_cnt,
                                        end.wood_cnt - start.wood_cnt as wood_cnt,
                                        end.ark_f - start.ark_f as ark_f,
                                        end.ark_m - start.ark_m as ark_m,
                                        end.arena_won - start.arena_won as arena_won,
                                        end.arena_lost - start.arena_lost as arena_lost,
                                        end.savings - start.savings as savings,
                                        end.level, user.name'))->get();

        return json_encode($progress);
    }

    public function getSnapshot()
    {
        $users = GuildMember::doesntHave('todayStats')->get();

        foreach ($users as $user) {
            try {
                $user_stats = $this->service->getFromApi($user->name);

                if ($user_stats->clan !== env("GUILD_NAME")) {
                    $user->delete();
                } else {
                    $this->service->save($user->id, $user_stats);
                }
            } catch (\Exception $e) {
                Log::error("getSnapshotError: {$e->getMessage()}");
            }
           // sleep(60);
        }

    }
}
