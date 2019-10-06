<?php


namespace App\Exceptions;


use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\ConflictHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\ServiceUnavailableHttpException;
use Symfony\Component\HttpKernel\Exception\TooManyRequestsHttpException;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;

class HttpExceptionsProcessor
{
    /** Specifies the data which should be attached to specific http exceptions. */
    public function process($e) {
        if ($e instanceof BadRequestHttpException) {
            return $this->badRequestHandler();
        }

        if ($e instanceof UnauthorizedHttpException) {
            return $this->unauthorizedHandler();
        }

        if ($e instanceof AccessDeniedHttpException) {
            return $this->accessDeniedHandler();
        }

        if ($e instanceof NotFoundHttpException) {
            return $this->notFoundHandler();
        }

        if ($e instanceof TooManyRequestsHttpException) {
            return $this->tooManyRequestsHandler();
        }

        if ($e instanceof ServiceUnavailableHttpException) {
            return $this->serviceUnavailableHandler();
        }

        return null;
    }

    /** Universal way for handlers to describe their exceptions */
    protected function exceptionReport($message, $code) {
        return ['message' => $message, 'code' => $code];
    }


    /***************************************/
    /**********EXCEPTION HANDLERS***********/
    /***************************************/

    protected function badRequestHandler() {
        return $this->exceptionReport('Bad Request', 400);
    }

    protected function unauthorizedHandler() {
        return $this->exceptionReport('Unauthorized', 401);
    }

    protected function accessDeniedHandler() {
        return $this->exceptionReport('Forbidden', 403);
    }

    protected function notFoundHandler() {
        return $this->exceptionReport('Not Found', 404);
    }

    protected function tooManyRequestsHandler() {
        return $this->exceptionReport('Too Many Requests', 429);
    }

    protected function serviceUnavailableHandler() {
        return $this->exceptionReport('Service Unavailable', 503);
    }
}