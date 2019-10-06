<?php

namespace App\Providers;

use App\Mixins\RequestMixin;
use App\Mixins\ResponseMixin;
use App\Mixins\RouterMixin;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }


    public function boot()
    {
        Response::mixin(new ResponseMixin);
        Request::mixin(new RequestMixin);
        Router::mixin(new RouterMixin);
    }
}
