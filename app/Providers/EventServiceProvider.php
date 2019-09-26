<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        'App\Events\PasswordResetAttemptCreated' => [
            'App\Listeners\Notifications\SendPasswordResetAttemptCreatedNotification',
        ],

        'App\Events\UserRegistered' => [
            'App\Listeners\Notifications\SendUserRegisteredNotification',
        ],

        'App\Events\AccountVerified' => [
            'App\Listeners\Notifications\SendUserAccountVerifiedNotification'
        ]
    ];

    public function boot()
    {
        parent::boot();

        //
    }
}
