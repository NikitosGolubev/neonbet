<?php

namespace App\Rules\Date;

use App\Services\Facades\Timezone;
use Carbon\Carbon;
use Illuminate\Contracts\Validation\Rule;

class DateRelevantFuture implements Rule
{
    /**
     * Detects if given date has already come, not in the future.
     */
    public function passes($attribute, $value)
    {
        $timezone = Timezone::getCurrent();

        try {
            $given_timestamp = Carbon::createFromFormat('d.m.Y', $value, $timezone)->startOfDay()->timestamp;
        } catch (\Exception $e) {
            return false;
        }

        $today = Carbon::today($timezone)->timestamp;
        return $given_timestamp <= $today;
    }

    public function message()
    {
        return trans('custom-validation.irrelevant_date');
    }
}
