<?php


namespace App\Mixins;


class ResponseMixin
{
    /** Universal way to report errors. */
    public function error() {
        return function($error_message = 'Error occurred.', $status_code = 403, $additions = []) {

            return response()->json([
                'error' => [
                    'message' => $error_message,
                    'additions' => $additions
                ]
            ], $status_code);

        };
    }


    /** Universal way to report about successful processed requests */
    public function success() {
        return function($message, $status_code, $content = []) {
            return response()->json([
                'message' => $message,
                'content' => $content
            ], $status_code);
        };
    }

    /** Shortcut for most common successful response */
    public function ok() {
        $success_response = $this->success();

        return function($content = []) use ($success_response) {
            return $success_response('OK', 200, $content);
        };
    }
}