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
    /* Получение данныъ с сервера*/
    public function getFromApi($username){

        return json_decode(file_get_contents("http://localhost/"));
        return json_decode(file_get_contents("https://godville.net/gods/api/{$username}"));

    }

    /* Получение пользователя у которого не записана статистика*/
    public function getUserForSnapshot(){
            
    }

    public function save($user_id, $stats){

        return UserStats::create([
            'guild_member_id' => $user_id,
            'level' => $stats->level,
            'bricks_cnt' => $stats->bricks_cnt + rand(1,100),
            'wood_cnt' => $stats->wood_cnt  + rand(1,100),
            'ark_f' => $stats->ark_f  + rand(1,100),
            'ark_m' => $stats->ark_m  + rand(1,100),
            'arena_won' => $stats->arena_won  + rand(1,100),
            'arena_lost' => $stats->arena_lost  + rand(1,100),
            'savings' => intval($stats->savings)  + rand(1,100),
        ]);
    }

    public function getProgress($user_id, $date2, $date1){

    }
}