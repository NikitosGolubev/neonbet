<?php

return [
    'subject' => 'The mutation of password has been requested on '.config('app.name'),
    'header' => 'Attempt to change password from your account',
    'ip_reveal_text' => 'Have you forgotten password from your account at our service?
                        The apply was made from following IP: ',

    'approve_header' => 'If YOU REQUESTED password recovery',
    'approve_text' => 'If it was your intention to change the password from your account, then
                        use the following button: ',
    'approve_action_text' => 'Recover the password',

    'report_header' => 'If you HAVE NOT REQUESTED password recovery',
    'report_text' => 'Then, probably its some malicious actions from users who want to harm our service.',
    'report_ban_warn' => 'If you click button below, their IP would be BANNED.',
    'cancel_recommendation' => "So, in case you don't need password recovery anymore, but submit for it was YOURS, then
                                just ignore this message.",
    'report_action' => "I DIDN'T REQUEST PASSWORD RECOVERY"
];