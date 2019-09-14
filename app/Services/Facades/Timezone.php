<?php


namespace App\Services\Facades;


use Illuminate\Support\Facades\Facade;

class Timezone extends Facade
{
    protected static function getFacadeAccessor() {
        return 'timezone';
    }
}