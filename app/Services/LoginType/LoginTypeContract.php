<?php


namespace App\Services\LoginType;


interface LoginTypeContract
{
    /**
     * Returns array with 1 validation message for all the validation rules of login input.
     */
    public function unitedValidationMessage(string $validation_message): array;

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