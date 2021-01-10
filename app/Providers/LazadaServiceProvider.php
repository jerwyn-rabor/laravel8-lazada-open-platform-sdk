<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Plugin\Lazada\lazop\LazopClient;
use App\Plugin\Lazada\lazop\LazopRequest;

class LazadaServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('lazopclient', function(){
            return new LazopClient();
        });

        $this->app->bind('lazoprequest', function(){
            return new LazopRequest();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
