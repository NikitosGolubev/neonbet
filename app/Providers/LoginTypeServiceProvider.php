<?php

namespace App\Providers;

use App\Services\LoginType\LoginType;
use Illuminate\Support\ServiceProvider;

class LoginTypeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('logintype', function () {
            return new LoginType();
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
