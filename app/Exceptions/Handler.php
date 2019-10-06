<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Contracts\Container\Container;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Handler extends ExceptionHandler
{
    protected $dontReport = [
        //
    ];


    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];


    public function report(Exception $exception)
    {
        parent::report($exception);
    }


    public function render($request, Exception $exception)
    {
        $http_exceptions_processor = new HttpExceptionsProcessor;
        $res = $http_exceptions_processor->process($exception);

        if (!is_null($res) && !config('app.debug')) {
            return Response::error($res['message'], $res['code']);
        }

        return parent::render($request, $exception);
    }
}
