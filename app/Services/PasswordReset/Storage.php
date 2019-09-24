<?php


namespace App\Services\PasswordReset;

use App\CollectedIp;
use App\PasswordResetRecord;
use App\Services\PasswordReset\Contracts\StorageContract;
use App\User;
use Illuminate\Http\Request;

/**
 * @package App\Services\PasswordReset
 */
class Storage implements StorageContract
{
    protected $ipModel;
    protected $user;
    protected $lastResetRecord;
    protected $currentResetRecord;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getUser(): User {
        return $this->user;
    }

    public function getIpModel(): CollectedIp {
        if (is_null($this->ipModel)) {
            $this->initIpModel();
        }

        return $this->ipModel;
    }

    public function getLastResetRecord() {
        if (is_null($this->lastResetRecord)) {
            $this->initLastResetRecord();
        }

        return $this->lastResetRecord;
    }

    public function getCurrentResetRecord(): PasswordResetRecord
    {
        if (is_null($this->currentResetRecord)) {
            $this->initCurrentResetRecord();
        }

        return $this->currentResetRecord;
    }

    /***********************************/
    /*********DATA INITIALIZERS*********/
    /***********************************/

    protected function initIpModel() {
        $client_ip = Request::getIp();
        $ipModel = CollectedIp::firstOrCreate(['ip' => $client_ip]);

        $this->ipModel = $ipModel;
    }

    protected function initLastResetRecord() {
        $this->lastResetRecord = $this->user->passwordResetRecords->last();
    }

    protected function initCurrentResetRecord() {
        $last_record = $this->getLastResetRecord();

        if (is_null($last_record)) {
            $this->currentResetRecord = $this->createResetRecord();
            return;
        }

        if ($last_record->isClosed()) {
            $this->currentResetRecord = $this->createResetRecord();
            return;
        }

        $this->currentResetRecord = $last_record;
    }

    protected function createResetRecord() {
        return $this->user->passwordResetRecords()->create();
    }
}