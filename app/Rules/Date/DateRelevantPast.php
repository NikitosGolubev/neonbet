<?php

namespace App\Rules\Date;

use App\Services\Facades\Timezone;
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
        $timezone = Timezone::getCurrent();

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
        return trans('custom-validation.irrelevant_date');
    }
}
