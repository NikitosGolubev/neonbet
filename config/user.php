<?php

return [
    'roles' => [
        'owner' => 'owner',
        'admin' => 'admin',
        'moderator' => 'moderator',
        'ordinary' => 'ordinary'
    ],

    'verification_url' => url('/confirm-account'),
    'reset_registration_url' => url('/reset-registration')
];