<?php

namespace App\Http\Requests\Auth;

use App\Http\Requests\ModelVerificationRequest;
use App\Rules\StringComplexity;

class PasswordResetApproveRequest extends ModelVerificationRequest
{
    private $newPasswordParam = 'password';

    public function getData(): array
    {
        $parent_data = parent::getData();
        $data = [
            'new_password' => request($this->newPasswordParam)
        ];

        return array_merge($parent_data, $data);
    }


    public function rules()
    {
        $pasw_min_len = config('user.password_min_len');

        $parent_rules = parent::rules();
        $rules = [
            $this->newPasswordParam => ['bail', 'required', "min:$pasw_min_len", 'max:255',
                                        new StringComplexity, 'confirmed']
        ];

        return array_merge($parent_rules, $rules);
    }
}
