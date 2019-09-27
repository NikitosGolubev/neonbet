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
    'login_url' => env('APP_URL').'/mock-pages/login',

    'password_reset' => [
        'min_time_to_allow_attempt_after_approve' => 86400,
        'min_time_to_allow_attempt_after_report' => 3600,
        'attempts_delays' => [180,  600, 3600],
        'attempt_expiration' => 86400,
        'approve_url' => env('APP_URL').'/mock-pages/can-set-password',
        'report_url' => env('APP_URL').'/mock-pages/report-set-password',
    ]

];