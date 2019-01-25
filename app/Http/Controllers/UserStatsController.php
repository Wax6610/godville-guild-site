<?php

namespace App\Http\Controllers;

use App\GuildMembers;
use App\UserStats;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Services\UserStatsService;

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

    public function index($start_date = null, $end_date = null){
        $end_date = Carbon::today();
        $start_date = Carbon::yesterday();
        $start_stats = UserStats::whereDate('created_at',$start_date)->get();
        $end_stats = UserStats::whereDate('created_at',$end_date)->get();

        dump($start_stats);
        dump($end_stats);
    }

    public function getSnapshot()
    {
        $users = GuildMembers::all();

        foreach ($users as $user) {

            $user_stats = $this->service->getFromApi($user->name);

            if ($user_stats->clan !== $this->guild_name) {
                $user->delete();
            } else {

                $this->service->save($user->id, $user_stats);

                echo "{$user->id} - {$user->name}</br>";
                sleep(30);
            }

        }
    }


}