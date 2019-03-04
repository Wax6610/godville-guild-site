<?php
/**
 * Created by PhpStorm.
 * User: Neko
 * Date: 19.02.2019
 * Time: 14:45
 */

namespace App\Services;


use App\Proxy;
use Carbon\Carbon;

class ProxyService
{
    function getList(): object {
        $last_used = Carbon::now()->subMinutes(5);
        return Proxy::whereTime('updated_at', '<' ,$last_used)->orderBy('bad_attempts','asc')->get();
    }

    function isAlive(Proxy $proxy) : bool
    {
        $url = 'https://api.ipify.org?format=json';
        $data = DataService::getData($url, $proxy);
        if($data === null)
            return false;
        return true;

    }

    function create ($data): object {
        return Proxy::create([
            'ip' => $data['ip']
            ,'port' => $data['port']
        ]);
    }

    function addBadAttempt(Proxy $proxy){
        $proxy->increment('bad_attempts', 1);
    }

    function removeBadAttempt(Proxy $proxy){
        $proxy->decrement('bad_attempts', 1);
    }

    //getproxylist
    function addFromGetProxyList () : ?object {
        $baseUrl = 'https://api.getproxylist.com/proxy';
        $lastTested = 'lastTested=600';
        $anonymity = 'anonymity=high%20anonymity';
        $allowsUserAgentHeader = 'allowsUserAgentHeader=1';
        $allowsHttps = 'allowsHttps=1';
        $minUptime = 'minUptime=70';

        $url = "{$baseUrl}?{$anonymity}&{$allowsUserAgentHeader}&{$allowsHttps}&{$minUptime}";
        return DataService::getData($url);
    }

    function  addFromPubProxy () : ?object {
        $baseUrl = 'http://pubproxy.com/api/proxy';
        $format = 'format=json' ;
        $anonymity = 'level=anonymous';
        $lastTested = 'last_check=10';
        $limit = 'limit=20';
        $allowsHttps = 'https=true';
        $allowsUserAgentHeader = 'user_agent=true';

        $url = "{$baseUrl}?{$format}&{$lastTested}&{$anonymity}&{$allowsUserAgentHeader}&{$allowsHttps}&{$limit}";
        return DataService::getData($url);
    }

}