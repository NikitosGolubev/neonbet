<?php

return [
    'roles' => [
        'owner' => 'owner',
        'admin' => 'admin',
        'moderator' => 'moderator',
        'ordinary' => 'ordinary'
    ],

    'nickname_min_len' => 6,
    'nickname_max_len' => 32,
    'password_min_len' => 8,

    'verification_url' => env('APP_URL').'/mock-pages/verify-user',
    'reset_registration_url' => env('APP_URL').'/mock-pages/reset-verification',
    'login_url' => env('APP_URL').'/mock-pages/login'
];