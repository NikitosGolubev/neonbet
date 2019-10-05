<?php

return [
    'verification_time' => 86400,

    'roles' => [
        'owner' => 'owner',
        'admin' => 'admin',
        'moderator' => 'moderator',
        'ordinary' => 'ordinary'
    ],

    'ip' => [
        'max_temp_bans' => 3,
        'bans_length' => [
            'password_reset_abuse' => 86400
        ],
    ],

    'nickname_min_len' => 6,
    'nickname_max_len' => 32,
    'password_min_len' => 8,

    'userpick' => [
        'accepted_mimes' => 'jpeg,jpg,png,gif',
        'height' => [
            'min' => 100,
            'max' => 750
        ],
        'width' => [
            'min' => 100,
            'max' => 750
        ],
        'max_size' => 1024
    ],

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
        'timespan_to_count_abuse_from_ip' => 604800, // 7 days
        'max_num_canceled_attempt_during_timespan' => 5
    ]

];