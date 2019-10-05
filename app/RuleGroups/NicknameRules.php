<?php


namespace App\RuleGroups;


use App\Rules\Nickname;

class NicknameRules extends RuleGroup
{
    protected static function rules(): array
    {
        $min_len = config('user.nickname_min_len');
        $max_len = config('user.nickname_max_len');

        return [
            "min:$min_len",
            "max:$max_len",
            new Nickname
        ];
    }
}