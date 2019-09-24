<?php

namespace App\Http\Middleware\LocalDev;

use Closure;
use Illuminate\Http\Request;

class IpChanger
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (app()->isLocal()) {
            $request->validate(['fake_ip' => 'nullable|ip']);

            $fake_ip = $request->fake_ip;

            Request::setFakeIp($fake_ip);
        }

        return $next($request);
    }
}
