<?php 

namespace App\Plugin\Lazada\facades;

use Illuminate\Support\Facades\Facade;

class LazopClientFacade extends Facade {
    protected static function getFacadeAccessor() {
        return 'lazopclient';    
    }
}