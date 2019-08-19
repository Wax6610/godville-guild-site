<?php
/**
 * Created by PhpStorm.
 * User: Neko
 * Date: 22.01.2019
 * Time: 19:55
 */

namespace App\Services;


use App\Proxy;
use App\UserStats;
use Illuminate\Support\Facades\DB;
class UserStatsService
{
    /* Получение данныъ с сервера*/
    public function getFromApi($username = '', Proxy $proxy = null)
    {
        $url = "https://godville.net/gods/api/{$username}";
        return DataService::getData($url, $proxy);
    }

    public function getDateProgress($start_date, $end_date)
    {
        return DB::table('user_stats as start')
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
                                        end.level, end.clan_position, user.name, end.returned_after'))->get();
    }

    public function getTop20($start_date, $end_date, $column)
    {
        return DB::table('user_stats as start')
            ->join('user_stats as end', 'start.guild_member_id', '=', 'end.guild_member_id')
            ->join('guild_members as user', 'start.guild_member_id', '=', 'user.id')
            ->whereDate('start.created_at', $start_date)
            ->whereDate('end.created_at', $end_date)
            ->limit(20)
            ->orderBy($column, 'desc')
            ->select(DB:: raw("end.{$column} - start.{$column} as $column,                                        
                                        end.level, end.clan_position, user.name"))->get();
    }

    public function save($user_id, $stats)
    {
        return UserStats::create([
            'guild_member_id' => $user_id,
            'level' => $stats->level,
            'clan_position' => $stats->clan_position,
            'bricks_cnt' => $stats->bricks_cnt,
            'wood_cnt' => $stats->wood_cnt ?? 0,
            'ark_f' => $stats->ark_f ?? 0,
            'ark_m' => $stats->ark_m ?? 0,
            'arena_won' => $stats->arena_won,
            'arena_lost' => $stats->arena_lost,
            'savings' => intval($stats->savings ?? 0),
        ]);
    }

    public function isUserActive(object $user_progress)
    {
        if($user_progress->bricks_cnt !== 0) return true;
        if($user_progress->wood_cnt !== 0) return true;
        if($user_progress->ark_f !== 0) return true;
        if($user_progress->ark_m !== 0) return true;
        if($user_progress->arena_won !== 0) return true;
        if($user_progress->arena_lost !== 0) return true;
        if($user_progress->savings !== 0) return true;

        return false ;
    }

}