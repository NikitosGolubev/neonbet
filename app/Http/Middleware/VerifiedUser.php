<?php

namespace App\Http\Middleware;

use App\Exceptions\User\UnverifiedUserException;
use Closure;

class VerifiedUser
{
    public function handle($request, Closure $next)
    {
        $user = $request->user();

        if (!$user->isVerified) throw new UnverifiedUserException;

        return $next($request);
    }
}
