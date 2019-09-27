<?php

namespace App\Providers;

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

        Router::macro('getUserVerificationUrl', function ($token) {
            return config('user.verification_url').'?v_token='.$token;
        });

        Router::macro('getResetUserVerificationUrl', function ($token) {
            return config('user.reset_registration_url').'?v_token='.$token;
        });

        Router::macro('getPasswordResetApproveUrl', function ($token) {
            return config('user.password_reset.approve_url').'?v_token='.$token;
        });

        Router::macro('getPasswordResetReportUrl', function ($token) {
            return config('user.password_reset.report_url').'?v_token='.$token;
        });
    }
}
