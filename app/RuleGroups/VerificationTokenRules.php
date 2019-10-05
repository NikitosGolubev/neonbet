<?php


namespace App\RuleGroups;


class VerificationTokenRules extends RuleGroup
{
    protected static function rules(): array
    {
        return [
            'string',
            'min:150',
            'max:500'
        ];
    }
}