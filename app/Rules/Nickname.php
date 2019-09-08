<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Nickname implements Rule
{

    public function passes($attribute, $value)
    {
        return preg_match('/^[a-z0-9_-]*$/i', $value);
    }


    public function message()
    {
        return trans('custom-validation.nickname');
    }
}
