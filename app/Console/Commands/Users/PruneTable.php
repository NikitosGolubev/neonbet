<?php

namespace App\Console\Commands\Users;

use App\Actions\DbPurging\DeleteUnverifiedExpiredUserAccountsAction;
use Illuminate\Console\Command;

class PruneTable extends Command
{
    protected $signature = 'users:prune';

    protected $description = 'Removes irrelevant data from users table.';


    public function __construct()
    {
        parent::__construct();
    }


    public function handle(DeleteUnverifiedExpiredUserAccountsAction $removeUnverifiedAccounts)
    {
        $removeUnverifiedAccounts->execute();
    }
}
