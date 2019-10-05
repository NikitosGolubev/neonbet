<?php


namespace App\Services\LoginType;


interface LoginTypeContract
{
    /**
     * Finds user at db by provided login.
     */
    public function findUserByLogin($login);

    /**
     * Returns a login type which user have chosen.
     */
    public function identify(): string;

    /**
     * Return rules for validation of currently chosen login type.
     */
    public function getRules(): array;
}