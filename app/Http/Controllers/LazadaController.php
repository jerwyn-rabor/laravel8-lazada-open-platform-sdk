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

        // LAZADA OPEN PLATFORM SDK CODE
        $c = new LazopClient($url,$appkey,$appSecret);
        $request = new LazopRequest('/products/get','GET');
        $request->addApiParam('filter','live');
        $request->addApiParam('offset','0');
        $request->addApiParam('limit','10');
        $request->addApiParam('options','1');

        // CONVERT STRING TO JSON DATA
        $result = json_decode($c->execute($request, $accessToken), true);

        // PRE-FORMAT LAZADA DATA
        $products = collect($result["data"]["products"]) ?? [];

        return $this->prepGoogleSheetData($products);
    }

    public function prepGoogleSheetData($products) {

        $values = [];

        foreach($products as $product) {

            // IF YOU WANT TO SEE THE STRUCTURE OF DATA
            // dd($product);

            $temp = [];
            $temp[] = $product["attributes"]["name"] ?? '';
            $temp[] = $product["attributes"]["short_description"] ?? '';
            $temp[] = $product["attributes"]["description"] ?? '';
            $temp[] = $product["attributes"]["material_filter"] ?? '';
            $temp[] = $product["attributes"]["fa_pattern"] ?? '';
            $temp[] = $product["attributes"]["brand"] ?? '';
            $temp[] = $product["attributes"]["warranty_type"] ?? '';

            // PUSH FORMAT TO VALUES
            $values[] = $temp;
        };
        
        return $values;
    }
}
