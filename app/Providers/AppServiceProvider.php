<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }


    public function boot()
    {
        // Universal way to report errors.
        Response::macro('printError', function($error_message = 'Error occurred.', $status_code = 403, $additions = []) {
            return response()->json([
                'error' => [
                    'message' => $error_message,
                    'additions' => $additions
                ]
            ], $status_code);
        });

        // My way to retrieve client IP. Creates opportunity for easy IP faking when local dev.
        Request::macro('getIp', function () {
           if (app()->isLocal()) {
               if (!is_null($_SERVER['REMOTE_ADDR'])) return $_SERVER['REMOTE_ADDR'];
               return request()->ip();
           } else {
               return request()->ip();
           }
        });

        // Setting fake ip on local development for testing purposes
        Request::macro('setFakeIp', function($fake_ip) {
            if (app()->isLocal()) {
                $_SERVER['REMOTE_ADDR'] = $fake_ip;
            }
        });
    }
}
