<?php

namespace App\Http\Controllers\API\GeneralData;

use App\Http\Controllers\Controller;
use App\Http\Requests\Timezone\TimezoneGetterRequest;
use App\Services\Facades\Timezone;

class TimezoneController extends Controller
{
    public function show(TimezoneGetterRequest $request) {
        $tz_groups = $request->getData()['groups'];

        $timezones = $this->getRequestedTimezones($tz_groups);

        return response()->json($timezones, 200);
    }

    /**
     * Builds response of derived timezones according to the request.
     */
    private function getRequestedTimezones(array $tz_groups) {
        $timezones = $this->getTimezonesAccordingToPassedGroups($tz_groups);

        return empty($timezones) ? Timezone::getAll() : $timezones;
    }

    /**
     * Derives timezones according to timezone groups user specified.
     */
    private function getTimezonesAccordingToPassedGroups(array $tz_groups) {
        $result = [];

        foreach ($tz_groups as $group) {
            if (Timezone::isTzGroupExists($group)) {
                $method_name = 'get'.$group;

                $timezones = [$group => Timezone::$method_name()];

                $result = array_merge($result, $timezones);
            }
        }

        return $result;
    }
}
