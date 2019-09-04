<?php

namespace App\Http\Middleware;

use Closure;
use App\Rules\ReCaptcha as ReCaptchaVerify;

class ReCaptcha
{
    private $captchaParam = 'captcha';

    public function handle($request, Closure $next)
    {
        $request->validate([
            $this->captchaParam => ['required', 'string', new ReCaptchaVerify]
        ]);

        return $next($request);
    }
}
