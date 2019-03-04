<?php
/**
 * Created by PhpStorm.
 * User: Neko
 * Date: 24.02.2019
 * Time: 9:49
 */

namespace App\Services;


use App\Proxy;

class DataService
{
    public static function getData($url = '', Proxy $proxy = null)
    {
        $agent = 'Mozilla/5.0 (X11; Linux i586; rv:63.0) Gecko/20100101 Firefox/63.0';
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_USERAGENT, $agent);

        if($proxy){
            curl_setopt($ch, CURLOPT_PROXY, $proxy->ip);
            curl_setopt($ch, CURLOPT_PROXYPORT, $proxy->port);
            curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);
        }

        curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result);
    }

}