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
    public function getFromApi($username, $proxy)
    {
        $url = "https://godville.net/gods/api/{$username}";
        // $url = "https://swapi.co/api/people/1";
        $agents = ['Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36',
            'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.102 Safari/537.36 OPR/57.0.3098.116',
            'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:65.0) Gecko/20100101 Firefox/65.0',
            'Mozilla/5.0 (Linux; Android 7.0; SM-G930VC Build/NRD90M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/58.0.3029.83 Mobile Safari/537.36'];
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_VERBOSE, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERAGENT, $agents[rand(0, count($agents)-1)]);

       // curl_setopt($ch, CURLOPT_PROXY, $proxy);
     //   curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);


        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        curl_close($ch);
        return json_decode($result);

        //return json_decode(file_get_contents("http://localhost/"));
        return json_decode(file_get_contents("https://godville.net/gods/api/{$username}"));

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