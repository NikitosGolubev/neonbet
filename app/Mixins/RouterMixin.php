<?php


namespace App\Mixins;


class RouterMixin
{
    public function getUserVerificationUrl() {
        return function ($token) {
            return config('user.verification_url').'?v_token='.$token;
        };
    }

    public function getResetUserVerificationUrl() {
        return function ($token) {
            return config('user.reset_registration_url').'?v_token='.$token;
        };
    }

    public function getPasswordResetApproveUrl() {
        return function ($token) {
            return config('user.password_reset.approve_url').'?v_token='.$token;
        };
    }

    public function getPasswordResetReportUrl() {
        return function ($token) {
            return config('user.password_reset.report_url').'?v_token='.$token;
        };
    }
}