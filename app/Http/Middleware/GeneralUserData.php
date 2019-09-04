<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Validation\Rule;

/**
 * Fetches some basic user data from request.
 */
class GeneralUserData
{
    private $localeParam = 'locale';
    private $timezoneParam = 'timezone';

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $this->validate();

        $locale = $this->getLocale();
        $timezone = $this->getTimezone();

        $request->merge([$this->timezoneParam => $timezone]);
        App::setLocale($locale);

        return $next($request);
    }

    private function validate() {
        return request()->validate([
            $this->localeParam => ['nullable', Rule::in(config('app.supported_locales'))],
            $this->timezoneParam => ['nullable', 'timezone']
        ]);
    }

    private function getLocale() {
        if (request()->has($this->localeParam) && !is_null(request($this->localeParam))) {
            return request($this->localeParam);
        } else {
            return config('app.locale');
        }
    }

    private function getTimezone() {
        if (request()->has($this->timezoneParam) && !is_null(request($this->timezoneParam))) {
            return request($this->timezoneParam);
        } else {
            return config('app.timezone');
        }
    }
}
