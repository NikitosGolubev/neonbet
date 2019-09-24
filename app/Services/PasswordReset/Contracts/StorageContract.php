<?php


namespace App\Services\PasswordReset\Contracts;


use App\CollectedIp;
use App\PasswordResetRecord;
use App\User;

interface StorageContract
{
    public function getUser(): User;
    public function getIpModel(): CollectedIp;
    public function getLastResetRecord();
    public function getCurrentResetRecord(): PasswordResetRecord;
}