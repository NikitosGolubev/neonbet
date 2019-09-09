<?php


namespace App\Services\Facades;


use Illuminate\Support\Facades\Facade;

class LoginType extends Facade
{
    protected static function getFacadeAccessor() {
        return 'logintype';
    }
}