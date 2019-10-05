<?php


namespace App\RuleGroups;


class AvatarRules extends RuleGroup
{
    protected static function rules(): array
    {
        $mimes = config('user.userpick.accepted_mimes');
        $min_width = config('user.userpick.width.min');
        $max_width = config('user.userpick.width.max');
        $min_height = config('user.userpick.height.min');
        $max_height = config('user.userpick.height.max');
        $max_size = config('user.userpick.max_size');

        return [
            'image',
            "mimes:$mimes",
            "dimensions:min_width=$min_width,min_height=$min_height,max_width=$max_width,max_height=$max_height",
            "max:$max_size",
        ];
    }
}