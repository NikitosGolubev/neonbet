<?php

namespace App\Http\Requests\Timezone;

use App\Http\Requests\ApiRequest;

class TimezoneGetterRequest extends ApiRequest
{
    private $tzGroupsParam = 'groups';

    public function getData(): array
    {
        return [
            'groups' => $this->handleTimezoneGroups()
        ];
    }

    public function rules()
    {
        return [
            $this->tzGroupsParam => ['nullable', 'array']
        ];
    }

    /**
     * Provides more accurate and predictable value for timezone groups.
     */
    protected function handleTimezoneGroups() {
        $groups = request($this->tzGroupsParam);
        if (is_null($groups) || count($groups) < 1) return [];

        return array_unique($groups);
    }
}
