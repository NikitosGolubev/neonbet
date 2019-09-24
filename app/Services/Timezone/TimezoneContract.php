<?php


namespace App\Services\Timezone;


interface TimezoneContract
{
    /**
     * Checks if provided timezone group exists.
     */
    public function isTzGroupExists($tz_group): bool;

    /**
     * Sets timezone which is going to be used specifically for current client.
     */
    public function setCurrent(): void;
}