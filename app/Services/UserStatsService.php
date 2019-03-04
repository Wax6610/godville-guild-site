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

class UserStatsService
{
    /* Получение данныъ с сервера*/
    public function getFromApi($username = '',Proxy $proxy = null)
    {
        $url = "https://godville.net/gods/api/{$username}";
        return DataService::getData($url,$proxy);
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

}