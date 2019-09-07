<?php

return [
    'roles' => [
        'owner' => 'owner',
        'admin' => 'admin',
        'moderator' => 'moderator',
        'ordinary' => 'ordinary'
    ],

    'verification_url' => env('APP_URL').'/mock-pages/verify-user',
    'reset_registration_url' => env('APP_URL').'/mock-pages/reset-verification'
];