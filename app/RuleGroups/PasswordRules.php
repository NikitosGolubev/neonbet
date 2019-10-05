<?php


namespace App\RuleGroups;


use App\Rules\StringComplexity;

class PasswordRules extends RuleGroup
{
    protected static function rules(): array
    {
        $min_len = config('user.password_min_len');

        return [
            "min:$min_len",
            'max:255',
            new StringComplexity,
        ];
    }
}