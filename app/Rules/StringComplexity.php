<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class StringComplexity implements Rule
{
    public function passes($attribute, $value)
    {
        $has_letters = preg_match("/\p{L}+/iu", $value);
        $has_digits = preg_match("/\d+/i", $value);

        return $has_letters && $has_digits;
    }

    public function message()
    {
        return trans('custom-validation.string_complexity');
    }
}
