<?php


namespace App\ModelEnhancers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

/**
 * Verifies some model using token-based approach.
 *
 * MODEL MUST CONTAIN 'verified_at' field
 * $this->expiration | expiration of token in seconds
 * $this->uniqueDataField | which unique field should be used to generate token
 */
trait Verifiable
{
    private $tokenDelimiter = '@@';

    /**
     * Generates token which should be used for verification.
     */
    public function getToken() {
        $verification_hash = Hash::make($this->getSecret());
        $expiration_timestamp = Carbon::now()->addSeconds($this->getExpiration())->toDateTimeString();

        // date(delimiter)hash, ex: carbon_date@somelonghash
        return base64_encode($expiration_timestamp.$this->tokenDelimiter.$verification_hash);
    }

    /**
     * Verifies if given token correct and not expired yet. Updates model.
     */
    public function verify($token) {
        if ($this->isTokenCorrect($token) && $this->isTokenRelevant($token)) {
            $this->verified_at = now();
            $this->save();
        }
    }

    /**
     * Checks if given token is valid.
     */
    public function isTokenCorrect($token) {
        try {
            $token_hash = $this->extractTokenHash($token);
        } catch (\Exception $e) {
            return false;
        }

        return Hash::check($this->getSecret(), $token_hash);
    }

    /**
     * Checks if given token is not expired yet.
     */
    public function isTokenRelevant($token) {
        try {
            $token_expiration_date = $this->extractTokenExpirationDate($token);
        } catch (\Exception $e) {
            return false;
        }

        return !(Carbon::parse($token_expiration_date)->isPast());
    }

    /**
     * Extracts model-data hash from token
     */
    private function extractTokenHash($token) {
        $decrypted_token = base64_decode($token);
        $token_data = explode($this->tokenDelimiter, $decrypted_token);

        return $token_data[1];
    }

    /**
     * Extracts expiration timestamp from token
     */
    private function extractTokenExpirationDate($token) {
        $decrypted_token = base64_decode($token);
        $token_data = explode($this->tokenDelimiter, $decrypted_token);

        return $token_data[0];
    }

    /**
     * Provides secret string with model data to generate a hash for token
     */
    private function getSecret() {
        $user_unique_data = $this->getUniqueData();
        $secret = config('mail.verification_secret');

        return $secret.$user_unique_data;
    }

    /**
     * Returns model-specific unique data.
     */
    private function getUniqueData() {
        $unique_data_field = $this->getUniqueDataField();

        return $this->$unique_data_field;
    }

    private function getExpiration() {
        $default_expiration = 3600;
        return isset($this->expiration) ? $this->expiration : $default_expiration;
    }

    private function getUniqueDataField() {
        $default_unique_data_field = 'id';
        return isset($this->uniqueDataField) ? $this->uniqueDataField : $default_unique_data_field;
    }
}