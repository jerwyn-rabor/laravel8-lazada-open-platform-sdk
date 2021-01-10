<?php 

namespace App\Plugin\Lazada\facades;

use Illuminate\Support\Facades\Facade;

class LazopRequestFacade extends Facade {
    protected static function getFacadeAccessor() {
        return 'lazoprequest';    
    }
}