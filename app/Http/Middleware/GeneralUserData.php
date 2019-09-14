<?php

namespace App\Http\Middleware;

use App\Services\Facades\Timezone;
use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Validation\Rule;

/**
 * Fetches some basic user data from request.
 */
class GeneralUserData
{
    private $localeParam = 'locale';
    private $tzParam;

    public function __construct()
    {
        $this->tzParam = Timezone::getRequestParam();
    }

    public function handle($request, Closure $next)
    {
        $this->validate();

        $locale = $this->getLocale();

        Timezone::setCurrent();
        App::setLocale($locale);

        return $next($request);
    }

    /**
     * Examines on adequacy the data which may be passed by user.
     */
    private function validate() {
        $php_timezones_list = Timezone::getAllUnsorted();

        return request()->validate([
            $this->localeParam => ['nullable', Rule::in(config('app.supported_locales'))],
            $this->tzParam => ['nullable', Rule::in($php_timezones_list)]
        ]);
    }

    /**
     * Identifies a locale which should be used.
     */
    private function getLocale() {
        if (request()->has($this->localeParam) && !is_null(request($this->localeParam))) {
            return request($this->localeParam);
        } else {
            return config('app.locale');
        }
    }
}
