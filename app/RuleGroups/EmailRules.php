<?php


namespace App\RuleGroups;


class EmailRules extends RuleGroup
{
    protected static function rules(): array
    {
        return [
            'string',
            'max:255',
            'email:rfc,dns'
        ];
    }
}