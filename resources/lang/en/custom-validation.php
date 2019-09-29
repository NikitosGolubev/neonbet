<?php

return [
    'nickname' => "Nickname may only contain latin letters, digits and '_', '-' symbols.",
    'string_complexity' => 'The :attribute must contain both letters and digits.',
    'fullname' => 'Fullname is incorrect.',
    'dd-mm-yyyy_date-format' => 'The date must align with following format: DD.MM.YYYY.',
    'irrelevant_date' => 'The date provided is irrelevant.',
    'invalid_date' => "Provided date doesn't exist.",
    'unentitled_age' => "You have to turn :age to access our service.",
    'captcha' => 'The captcha has not been approved.',

    'invalid_verification_token' => "Provided token is invalid, user can't be identified.",
    'verification_token_expired' => "Verification token is expired. Try to apply for verification again if it's possible.",
    'model_is_already_verified' => "The resource is already verified.",
    'unverified_user' => 'The account must be verified to access this part of service.',

    'invalid_login_credentials' => 'Invalid credentials, login or password are incorrect.',

    'permanent_banned_ip' => 'This IP address(:ip) has been banned permanently on our service.',
    'temporary_banned_ip' => 'This IP address(:ip) has been banned temporary on our service until :exp.',

    'recent_password_reset_approve' => 'You have changed the password recently. The attempt to do this again would be allowed at :date.',

    'recent_password_reset_report' => 'You have recently reported an attempt to reset password from your account. The attempt to reset password would be allowed at :date.',

    'recent_password_reset_attempt' => 'Your email has recently been passed with a purpose of attempting to reset password from your account. We suppose that you have received an e-mail from us. If you have not attempted to reset your password, please open the email and REPORT it. Otherwise, confirm it or ignore. The next attempt is going to be available at :date.',

    'new_password_equal_to_old' => 'Provided password is equals to old one you have, make it different.',

    'ip_already_reported' => 'You have recently reported this IP. We have processed your request.',
];