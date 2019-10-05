<?php


namespace App\RuleGroups;


use App\Rules\Fullname;

class FullnameRules extends RuleGroup
{
    protected static function rules(): array
    {
        return [
            'string',
            'max:255',
            new Fullname
        ];
    }
}