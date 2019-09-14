<?php


namespace App\Services\Timezone;


/**
 * Supposed to be registered as singleton.
 * Encapsulates every piece of functionality for determining and fetching timezones.
 */
class Timezone
{
    /** This list is taken from https://www.php.net/manual/en/timezones.php */
    const PHP_SUPPORTED_TIMEZONE_GROUPS = [
        'UTC', 'Africa', 'America', 'Antarctica', 'Arctic', 'Asia', 'Atlantic',
        'Australia', 'Europe', 'Europe', 'Pacific'
    ];

    /** The request param where client may passed desired timezone. */
    const TZ_REQUEST_PARAM = 'timezone';

    protected $timezones;
    protected $currentTimezone;

    public function __construct()
    {
        $this->timezones = $this->parseTimezones();
    }


    /*****************************************/
    /*----------------API--------------------*/
    /*****************************************/

    /**
     * Checks if provided timezone group exists.
     */
    public function isTzGroupExists($tz_group) {
        return in_array($tz_group, self::PHP_SUPPORTED_TIMEZONE_GROUPS);
    }

    public function setCurrent() {
        $tz_param = self::TZ_REQUEST_PARAM;

        if (request()->has($tz_param) && !is_null(request($tz_param))) {
            $this->currentTimezone = request($tz_param);
        } else {
            $this->currentTimezone = config('app.timezone');
        }
    }

    /*****************************************/
    /*----------------GETTERS----------------*/
    /*****************************************/

    /**
     * Returns timezone request param name.
     */
    public function getRequestParam() {
        return self::TZ_REQUEST_PARAM;
    }

    /**
     * Provides current timezone
     */
    public function getCurrent() {
        return $this->currentTimezone;
    }

    /**
     * Provides the list of all particular timezones divided by groups.
     */
    public function getAll() {
        return $this->timezones;
    }

    /**
     * Provides straight list of all supported timezones.
     */
    public function getAllUnsorted() {
        return timezone_identifiers_list();
    }

    /**
     * Provides the opportunity to fetch timezones by particular group.
     * Handles get(GroupName) methods. Ex: getAfrica(), getUTC(), etc...
     */
    public function __call($name, $arguments)
    {
        $get_word = strtolower(substr($name, 0, 3));
        $tz_group = substr($name, 3);

        if ($get_word === 'get' && $this->isTzGroupExists($tz_group)) {
            return $this->timezones[$tz_group];
        }

        throw new \BadMethodCallException("Provided method name doesn't match with any of timezone getters.");
    }


    /*****************************************/
    /*----------------HELPERS----------------*/
    /*****************************************/

    /**
     * Fetches and sorts by groups all the available timezones in php.
     */
    protected function parseTimezones() {
        $result = [];
        $timezones_list = timezone_identifiers_list();

        foreach ($timezones_list as $timezone) {
            $timezone_group = explode('/', $timezone)[0];

            $result[$timezone_group][] = $timezone;
        }

        return $result;
    }
}