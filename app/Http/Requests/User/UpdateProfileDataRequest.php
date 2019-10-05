<?php

namespace App\Http\Requests\User;

use App\Http\Requests\ApiRequest;
use App\RuleGroups\AvatarRules;
use App\RuleGroups\FullnameRules;
use App\RuleGroups\NicknameRules;

class UpdateProfileDataRequest extends ApiRequest
{
    private $avatarParam = 'avatar';
    private $nicknameParam = 'nickname';
    private $fullnameParam = 'fullname';

    public function getData(): array
    {
        return [
            'avatar' => request($this->avatarParam),
            'nickname' => request($this->nicknameParam),
            'fullname' => request($this->fullnameParam)
        ];
    }

    public function rules()
    {
        $rules_preset = ['bail', 'nullable'];

        return [
            $this->avatarParam => AvatarRules::get($rules_preset),

            $this->nicknameParam => NicknameRules::get($rules_preset, ['unique:users,nickname']),

            $this->fullnameParam => FullnameRules::get($rules_preset)
        ];
    }
}
