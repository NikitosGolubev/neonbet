<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(RolesAndPermissionsTableSeeder::class);
        if (config('app.env') === 'local') {
            $this->call(UsersTableSeeder::class);
        }
    }
}
