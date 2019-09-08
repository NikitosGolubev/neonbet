<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Fullname implements Rule
{
    public function passes($attribute, $value)
    {
        $fullname_regexp = "/^(\p{Lu}\p{Ll}{1,}([-]\p{Lu}\p{Ll}{1,})?\s\p{Lu}\p{Ll}{1,}(\s\p{Lu}\p{Ll}{1,})?)$/u";

        return preg_match($fullname_regexp, $value);
    }


    public function message()
    {
        return trans('custom-validation.fullname');
    }
}
