<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = factory(\App\User::class, 20)->create();
        $users->each(function ($user, $key) {
            $user->assignRole(config('user.roles.ordinary'));
        });
    }
}
