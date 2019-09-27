<?php


namespace App\ModelEnhancers;

use App\Exceptions\Verification\ModelAlreadyVerifiedException;
use App\Exceptions\Verification\VerificationTokenExpiredException;
use App\Exceptions\Verification\VerificationTokenInvalidException;
use Carbon\Carbon;
use Illuminate\Support\Facades\Crypt;
use mysql_xdevapi\Exception;

/**
 * Verifies some model using token-based approach.
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
        $token_expiration = $this->getVerificationExpiration();
        $expiration_date = Carbon::now()->addSeconds($token_expiration)->toDateTimeString();
        $unique_data = $this->getUniqueData();

        $token = $expiration_date.self::$tokenDelimiter.$unique_data;
        $token = Crypt::encryptString($token);

        return urlencode($token);
    }

    /** Attempts to verify model. */
    public static function verify($token, $is_validation_required = true, $model = null) {
        if (is_null($model)) {
            $model = self::getModelFromToken($token);
        }

        if ($is_validation_required) {
            self::validate($token, $model);
        }

        $verified_at = Carbon::now()->toDateTimeString();
        self::setModelVerificationFieldValue($model, $verified_at);
        return $model;
    }

    /** Removes model if token is valid. */
    public static function resetVerification($token, $is_validation_required = true) {
        $model = self::getModelFromToken($token);

        if ($is_validation_required) {
            self::validate($token, $model);
        }

        $model->delete();
    }

    /** Determines if model is already verified. */
    public function isVerified() {
        $verification_field = self::getModelVerificationField($this);
        return !is_null($verification_field);
    }

    /**
     * Attempts to identify model by provided token
     * @throws VerificationTokenInvalidException
     */
    public static function getModelFromToken($token) {
        try {
            $token_data = self::parseToken($token);
            $model_data = $token_data['model_data'];

            $model_collected = self::where(self::getUniqueDataField(), $model_data)->get();

            if ($model_collected->isEmpty()) throw new \Exception();
            $model = $model_collected->first();
        } catch (\Exception $e) {
            throw self::getInvalidTokenException();
        }

        return $model;
    }

    /**
     * Throws exceptions if provided token for model is invalid
     * @throws ModelAlreadyVerifiedException
     * @throws VerificationTokenExpiredException
     * @throws VerificationTokenInvalidException
     */
    public static function validate($token, $model = null) {
        if (is_null($model)) {
            $model = self::getModelFromToken($token);
        }

        self::validateOnRecentVerification($model);

        self::validateExpiration($model, $token);
    }

    /**
     * Validates if model is verified yet
     * @throws ModelAlreadyVerifiedException
     */
    public static function validateOnRecentVerification($model) {
        if ($model->isVerified()) {
            throw self::getModelAlreadyVerifiedException();
        }
    }

    /** @throws VerificationTokenExpiredException */
    public static function validateExpiration($model, $token) {
        $token_data = self::parseToken($token);
        $expiration_date = $token_data['exp'];


        if (self::isDateExpired($expiration_date)) {
            throw self::getTokenExpiredException();
        }
    }

    /******************************************
     *********CONFIGURATIONS GETTERS***********
     *******may be overridden to set up********
     ****configuration for particular model****
     ******************************************/

    /** Returns a field which stores unique piece of data about model. */
    protected static function getUniqueDataField() {
        return 'id';
    }

    /** Returns field value which is used for verification */
    protected static function getModelVerificationField($model) {
        return $model->verified_at;
    }

    /** Sets appropriate value to verification field (basically verifies, just encapsulated) */
    protected static function setModelVerificationFieldValue($model, $value) {
        $model->verified_at = $value;
        $model->save();
    }

    /** Returns a timestamp for how much time token can be relevant. */
    protected function getVerificationExpiration() {
        return 3600;
    }

    /** Exception which should be thrown whenever token is considered to be invalid */
    protected static function getInvalidTokenException() {
        return new VerificationTokenInvalidException;
    }

    /** Exception which should be thrown whenever the verified model issued. */
    protected static function getModelAlreadyVerifiedException() {
        return new ModelAlreadyVerifiedException;
    }

    /** Exception which should be thrown if token provided is expired. */
    protected static function getTokenExpiredException() {
        return new VerificationTokenExpiredException;
    }

    /******************************************
     *************PRIVATE HELPERS**************
     ******************************************/

    /** Attempts to fetch encrypted data from token */
    private static function parseToken($token) {
        $token = urldecode($token);
        $token = Crypt::decryptString($token);

        $token_data = explode(self::$tokenDelimiter, $token);

        return ['exp' => $token_data[0], 'model_data' => $token_data[1]];
    }

    /** Defines, if particular date is already past. */
    private static function isDateExpired($expiration_date) {
        return Carbon::parse($expiration_date)->isPast();
    }

    /** Returns model-specific unique data. */
    private function getUniqueData() {
        $unique_data_field = self::getUniqueDataField();

        return $this->$unique_data_field;
    }
}