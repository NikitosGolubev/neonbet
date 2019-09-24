<?php


namespace App\Services\PasswordReset\Contracts;


interface ValidationRuleContract
{
    public function validate(): void;
}