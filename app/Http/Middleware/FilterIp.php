<?php

namespace App\Http\Middleware;

use App\CollectedIp;
use App\Exceptions\User\BannedIpException;
use Closure;
use Illuminate\Http\Request;

/**
 * Class FilterIp
 * @package App\Http\Middleware
 * Validates IP which enters application by checking if its not banned yet.
 */
class FilterIp
{
    public function handle($request, Closure $next)
    {
        $client_ip = Request::getIp();
        $client_ip = CollectedIp::firstOrCreate(['ip' => $client_ip]);

        if ($client_ip->isBanned()) {
            throw new BannedIpException($client_ip);
        }

        return $next($request);
    }
}
