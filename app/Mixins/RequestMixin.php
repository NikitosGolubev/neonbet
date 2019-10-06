<?php


namespace App\Mixins;


class RequestMixin
{
    /**
     * My way to retrieve client IP.
     * Creates opportunity for easy IP faking when local dev.
     */
    public function getIp() {
        return function () {
            if (app()->isLocal()) {
                if (!is_null($_SERVER['REMOTE_ADDR'])) return $_SERVER['REMOTE_ADDR'];
                return request()->ip();
            } else {
                return request()->ip();
            }
        };
    }

    /** Setting fake ip on local development for testing purposes */
    public function setFakeIp() {
        return function($fake_ip) {
            if (app()->isLocal()) {
                $_SERVER['REMOTE_ADDR'] = $fake_ip;
            }
        };
    }
}