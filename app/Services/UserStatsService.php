<?php
/**
 * Created by PhpStorm.
 * User: Neko
 * Date: 22.01.2019
 * Time: 19:55
 */

namespace App\Services;


use App\UserStats;

class UserStatsService
{
    public function getFromApi($username){

        return json_decode(file_get_contents("https://godville.net/gods/api/{$username}"));

    }

    public function save($user_id, $stats){
        return UserStats::create([
            'guild_member_id' => $user_id,
            'bricks_cnt' => $stats->bricks_cnt,
            'wood_cnt' => $stats->wood_cnt,
            'ark_f' => $stats->ark_f,
            'ark_m' => $stats->ark_m,
            'arena_won' => $stats->arena_won,
            'arena_lost' => $stats->arena_lost,
            'savings' => intval($stats->savings),
        ]);
    }

    public function getProgress($user_id, $date2, $date1){

    }
}