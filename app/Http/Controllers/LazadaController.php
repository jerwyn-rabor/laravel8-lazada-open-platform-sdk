<?php

namespace App\Http\Controllers;

use App\Plugin\Lazada\lazop\LazopClient;
use App\Plugin\Lazada\lazop\LazopRequest;

class LazadaController extends Controller
{
    public function index() {

        $url = config('lazada.api.url');
        $appkey = config('lazada.api.appkey');
        $appSecret = config('lazada.api.appsecret');
        $accessToken = config('lazada.api.accesstoken');

        // LAZADA OPEN PLATFORM SDK
        $c = new LazopClient($url,$appkey,$appSecret);
        $request = new LazopRequest('/products/get','GET');
        $request->addApiParam('filter','live');
        $request->addApiParam('offset','0');
        $request->addApiParam('limit','10');
        $request->addApiParam('options','1');

        // CONVERT STRING TO JSON DATA
        $result = json_decode($c->execute($request, $accessToken), true);

        return $result;

    }
}
