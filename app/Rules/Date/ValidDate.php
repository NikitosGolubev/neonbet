<?php

namespace App\Rules\Date;

use Carbon\Carbon;
use Illuminate\Contracts\Validation\Rule;

class ValidDate implements Rule
{

    public function passes($attribute, $value)
    {
        $timezone = request('timezone');

        try {
            $date = Carbon::createFromFormat('d.m.Y', $value, $timezone)->startOfDay()->toArray();
        } catch (\Exception $e) {
            return false;
        }

        $sent_date_data = explode('.', $value);
        $givenDay = (int)$sent_date_data[0];
        $givenMonth = (int)$sent_date_data[1];
        $givenYear = (int)$sent_date_data[2];

        // Day, month, year which were must should match with transformed date data.
        return ($givenDay === $date['day']) && ($givenMonth === $date['month']) && ($givenYear === $date['year']);
    }


    public function message()
    {
        return trans('validation.invalid_date');
    }
}
