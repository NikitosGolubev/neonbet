<?php


namespace App\Services\PasswordReset\Exceptions;


use Exception;
use Illuminate\Http\Response;

class IpAlreadyBeenReportedException extends Exception
{
    public function render($request) {
        $message = trans('custom-validation.ip_already_reported');

        return Response::printError($message, 403);
    }
}