<?php

namespace App\Http\Requests\Auth;

use App\Http\Requests\ApiRequest;
use App\RequestEnhancers\Sanitizable;

use App\RuleGroups\BirthdateRules;
use App\RuleGroups\EmailRules;
use App\RuleGroups\FullnameRules;
use App\RuleGroups\NicknameRules;
use App\RuleGroups\PasswordRules;

class RegisterRequest extends ApiRequest
{
    use Sanitizable;

    private $nicknameParam = 'nickname';
    private $emailParam = 'email';
    private $fullnameParam = 'fullname';
    private $birthdateParam = 'birthdate';
    private $passwordParam = 'password';



    public function getData(): array
    {
        return [
            'nickname' => request($this->nicknameParam),
            'email' => request($this->emailParam),
            'fullname' => request($this->fullnameParam),
            'birthdate' => request($this->birthdateParam),
            'password' => request($this->passwordParam)
        ];
    }


    protected function getSanitizedParams()
    {
        return [
            $this->nicknameParam,
            $this->emailParam,
            $this->fullnameParam
        ];
    }


    public function rules()
    {
        $pasw_min_len = config('user.password_min_len');

        return [
            $this->nicknameParam => NicknameRules::get(['required'], ['unique:users,nickname']),

            $this->emailParam => EmailRules::get(['required'], ['unique:users,email']),

            $this->fullnameParam => FullnameRules::get(['required']),

            $this->birthdateParam => BirthdateRules::get(['required']),

            $this->passwordParam => PasswordRules::get(['required'], ['confirmed']),
        ];
    }
}
