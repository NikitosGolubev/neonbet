<?php

namespace App\Providers;

use App\Services\Timezone\Timezone;
use Illuminate\Support\ServiceProvider;

class TimezoneServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('timezone', function() {
            return new Timezone();
        });
    }


    public function boot()
    {
        //
    }
}
