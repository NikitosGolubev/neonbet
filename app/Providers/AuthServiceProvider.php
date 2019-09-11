<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Passport::routes(function ($router) {
            $router->forAccessTokens();
        });

        Passport::tokensExpireIn(
            $this->getAccessTokenExpiration()
        );

        Passport::refreshTokensExpireIn(
            now()->addSeconds(config('auth.passport.tokens_exp_sec.refresh'))
        );
    }

    /**
     * Calculates the expiration of access token
     */
    private function getAccessTokenExpiration() {
        $remember_me_param =  config('auth.passport.remember_me_param');

        $token_exp_secs = config('auth.passport.tokens_exp_sec.access'); // default exp

        if (request($remember_me_param)) {
            $token_exp_secs = config('auth.passport.tokens_exp_sec.remembered_access');
        }

        return now()->addSeconds($token_exp_secs);
    }
}
