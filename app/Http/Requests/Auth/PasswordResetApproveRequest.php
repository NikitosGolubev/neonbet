<?php

namespace App\Http\Requests\Auth;

use App\Http\Requests\ModelVerificationRequest;
use App\RuleGroups\PasswordRules;

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
        $parent_rules = parent::rules();

        $rules = [
            $this->newPasswordParam => PasswordRules::get(['bail', 'required'], ['confirmed'])
        ];

        return array_merge($parent_rules, $rules);
    }
}
