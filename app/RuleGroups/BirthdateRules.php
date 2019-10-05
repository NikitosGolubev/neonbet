<?php


namespace App\RuleGroups;


use App\Rules\Date\AdultUser;
use App\Rules\Date\DateRelevantFuture;
use App\Rules\Date\DateRelevantPast;
use App\Rules\Date\DdMmYyyyDateFormat;
use App\Rules\Date\ValidDate;

class BirthdateRules extends RuleGroup
{
    protected static function rules(): array
    {
        return [
            'string',
            new DdMmYyyyDateFormat,
            new ValidDate,
            new DateRelevantPast,
            new DateRelevantFuture,
            new AdultUser
        ];
    }
}