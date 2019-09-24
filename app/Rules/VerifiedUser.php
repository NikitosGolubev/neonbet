<?php

namespace App\Rules;

use App\User;
use Illuminate\Contracts\Validation\Rule;

class VerifiedUser implements Rule
{
    /** Field, which is going to be used to fetch user */
    protected $dbFieldName;

    public function __construct($db_field_name = null)
    {
        $this->dbFieldName = $db_field_name;
    }

    public function passes($attribute, $value)
    {
        // Default value if client has not provided field by which user should be fetched
        if (is_null($this->dbFieldName)) $this->dbFieldName = $attribute;

        // Retrieving user
        $user = User::where($this->dbFieldName, $value)->get()->first();

        // Checking if user found and verified
        if (!is_null($user) && $user->isVerified()) return true;

        return false;
    }

    public function message()
    {
        return trans('custom-validation.unverified_user');
    }
}
