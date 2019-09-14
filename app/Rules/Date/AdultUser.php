<?php

namespace App\Rules\Date;

use App\Services\Facades\Timezone;
use Carbon\Carbon;
use Illuminate\Contracts\Validation\Rule;

class AdultUser implements Rule
{
    private $adultAge = 18;

    public function passes($attribute, $value)
    {
        $timezone = Timezone::getCurrent();

        try {
            $given_date = Carbon::createFromFormat('d.m.Y', $value, $timezone)->startOfDay()->timestamp;
        } catch (\Exception $e) {
            return false;
        }

        $min_entitled_date = Carbon::today($timezone)->subYears($this->adultAge)->timestamp;

        return $min_entitled_date >= $given_date;
    }

    public function message()
    {
        return trans('custom-validation.unentitled_age', ['age' => $this->adultAge]);
    }
}
