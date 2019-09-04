<?php

namespace App\Rules\Date;

use Carbon\Carbon;
use Illuminate\Contracts\Validation\Rule;

class DateRelevantPast implements Rule
{
    private $maxDateYears = 100;

    /**
     * If the date is older than 100 years than its not relevant.
     */
    public function passes($attribute, $value)
    {
        $timezone = request('timezone');

        try {
            $given_timestamp = Carbon::createFromFormat('d.m.Y', $value, $timezone)->startOfDay()->timestamp;
        } catch (\Exception $e) {
            return false;
        }

        $oldest_possible_date = Carbon::today($timezone)->subYears($this->maxDateYears)->timestamp;
        return $oldest_possible_date <= $given_timestamp;
    }

    public function message()
    {
        return trans('validation.irrelevant_date');
    }
}
