<?php

namespace App\Rules\Date;

use Carbon\Carbon;
use Illuminate\Contracts\Validation\Rule;

class DdMmYyyyDateFormat implements Rule
{
    public function passes($attribute, $value)
    {
        $dd_mm_yyyy_pattern = '/^\s*(3[01]|[12][0-9]|0?[1-9])\.(1[012]|0?[1-9])\.((?:[1-3][0-9])\d{2})\s*$/';

        return preg_match($dd_mm_yyyy_pattern, $value);
    }

    public function message()
    {
        return trans('custom-validation.dd-mm-yyyy_date-format');
    }
}
