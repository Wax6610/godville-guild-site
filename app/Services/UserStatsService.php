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
		return json_decode(file_get_contents("http://localhost/"));
        
    }

    public function getProxy()
    {


        $url = "https://api.getproxylist.com/proxy?allowsHttps=1&anonymity[]=high%20anonymity&allowsUserAgentHeader=1";
//protocol[]=socks4&protocol[]=socks5&
        $url = "http://pubproxy.com/api/proxy?limit=20&format=json&level=elite&LAST_CHECK=30&HTTPS=1&USER_AGENT=1";
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_VERBOSE, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        curl_close($ch);
        $proxy = json_decode($result);
        dd($proxy);
        return "{$proxy->ip}:{$proxy->port}";
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