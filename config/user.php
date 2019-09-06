<?php

return [
    'roles' => [
        'owner' => 'owner',
        'admin' => 'admin',
        'moderator' => 'moderator',
        'ordinary' => 'ordinary'
    ],

    'verification_url' => env('APP_URL').'/confirm-account',
    'reset_registration_url' => env('APP_URL').'/reset-registration'
];