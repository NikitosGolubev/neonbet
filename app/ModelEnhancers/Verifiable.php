<?php


namespace App\ModelEnhancers;

use App\Exceptions\Verification\ModelAlreadyVerifiedException;
use App\Exceptions\Verification\VerificationTokenExpiredException;
use App\Exceptions\Verification\VerificationTokenInvalidException;
use Carbon\Carbon;
use Illuminate\Support\Facades\Crypt;

/**
 * Verifies some model using token-based approach.
 *
 * MODEL MUST CONTAIN 'verified_at' field
 * self::$uniqueDataField | Field which data would be fetched to make token | default: id
 * self::$verificationField | Field, where verification date would be inserted | default: verified_at
 * $this->expiration | expiration of token in seconds | default: 3600
 */
trait Verifiable
{
    private static $tokenDelimiter = '@-@';

    /******************************************
     ******************API*********************
     ******************************************/

    /**
     * Generates token which should be used for verification.
     */
    public function getToken() {
        $token_expiration = $this->getExpiration();
        $expiration_date = Carbon::now()->addSeconds($token_expiration)->toDateTimeString();
        $unique_data = $this->getUniqueData();

        $token = $expiration_date.self::$tokenDelimiter.$unique_data;
        $token = Crypt::encryptString($token);

        return urlencode($token);
    }

    /**
     * Attempts to verify model.
     */
    public static function verify($token) {
        $model = self::validateToken($token);

        $verification_field = self::getVerificationField();
        $model->$verification_field = Carbon::now()->toDateTimeString();
        $model->save();
    }

    /**
     * Removes model if token is valid.
     */
    public static function resetVerification($token) {
        $model = self::validateToken($token);
        $model->delete();
    }

    /**
     * Determines if model is already verified.
     */
    public function isVerified() {
        $verification_field = self::getVerificationField();
        return !is_null($this->$verification_field);
    }

    /******************************************
     *************STATIC METHODS***************
     ******************************************/

    /**
     * Returns model if token is valid. Otherwise, throws exceptions.
     * @throws ModelAlreadyVerifiedException
     * @throws VerificationTokenExpiredException
     * @throws VerificationTokenInvalidException
     */
    private static function validateToken($token) {
        try {
            $token_data = self::parseToken($token);
            $model_data = $token_data['model_data'];
            $expiration_date = $token_data['exp'];

            $model_collected = self::where(self::getUniqueDataField(), $model_data)->get();

            if ($model_collected->isEmpty()) throw new \Exception();
            $model = $model_collected->first();
        } catch (\Exception $e) {
            throw new VerificationTokenInvalidException;
        }

        if ($model->isVerified()) throw new ModelAlreadyVerifiedException;

        if (self::isDateExpired($expiration_date)) throw new VerificationTokenExpiredException;
        return $model;
    }

    /**
     * Attempts to fetch encrypted data from token
     */
    private static function parseToken($token) {
        $token = urldecode($token);
        $token = Crypt::decryptString($token);

        $token_data = explode(self::$tokenDelimiter, $token);

        return ['exp' => $token_data[0], 'model_data' => $token_data[1]];
    }

    /**
     * Defines, if particular date is already past.
     */
    private static function isDateExpired($expiration_date) {
        return Carbon::parse($expiration_date)->isPast();
    }

    /**
     * Returns a field which stores unique piece of data about model.
     */
    private static function getUniqueDataField() {
        $default_unique_data_field = 'id';
        return isset(self::$uniqueDataField) ? self::$uniqueDataField : $default_unique_data_field;
    }

    /**
     * Gets field name which should be used for verification.
     */
    private static function getVerificationField() {
        $default_verification_field = 'verified_at';
        return isset(self::$verificationField) ? self::$verificationField : $default_verification_field;
    }

    /******************************************
     **************CLASS METHODS***************
     ******************************************/

    /**
     * Returns model-specific unique data.
     */
    private function getUniqueData() {
        $unique_data_field = self::getUniqueDataField();

        return $this->$unique_data_field;
    }

    /**
     * Returns a timestamp for how much time token can be relevant.
     */
    private function getExpiration() {
        $default_expiration = 3600;
        return isset($this->verification_expiration) ? $this->verification_expiration : $default_expiration;
    }
}