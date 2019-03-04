<?php

namespace App\Http\Controllers;

use App\Proxy;
use App\Services\CustomFoxToolsAdapter;
use App\Services\ProxyService;
use App\Services\UserStatsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProxyController extends Controller
{
    public function __construct(ProxyService $service, UserStatsService $userStatsService )
    {
        $this->service = $service;
        $this->userStatsService = $userStatsService;

    }

    public function index(){
        $countBefore =  Proxy::count();
        for ($i = 0; $i < 20 ; $i++ ){
            try {
                $newProxy = $this->service->addFromGetProxyList();
                if(isset($newProxy->error))
                    break;
                Proxy::firstOrCreate(['ip' => $newProxy->ip,'port' => $newProxy->port]);
            }catch (\Exception $exception){
                Log::error("Proxy : index: addFromGetProxyList: {$exception->getMessage()}");
            }
        }

        $countAfter =  Proxy::count();
        $added = $countAfter - $countBefore;
        Log::error("Proxy : index: done. Added from addFromGetProxyList {$added} proxies");

        for ($i = 0 ; $i < 60; $i++){
            try {
                $proxies = $this->service->addFromPubProxy();
                if(empty($proxies)) break;
                foreach ($proxies->data as $proxy){
                    Proxy::firstOrCreate(['ip' => $proxy->ip,'port' => $proxy->port]);
                }
            }catch (\Exception $exception){
                Log::error("Proxy : index: addFromPubProxy: {$exception->getMessage()}");
            }
        }
        $countAfter =  Proxy::count();
        $added = $countAfter - $countBefore;
        Log::error("Proxy : index: done. Added from addFromPubProxy {$added} proxies");
    }
}
