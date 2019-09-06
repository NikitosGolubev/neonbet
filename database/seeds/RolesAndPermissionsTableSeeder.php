<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Roles
        $ordinary = Role::create(['name' => config('user.roles.owner')]);
        $moderator = Role::create(['name' => config('user.roles.admin')]);
        $admin = Role::create(['name' => config('user.roles.moderator')]);
        $owner = Role::create(['name' => config('user.roles.ordinary')]);

        // Permissions
    }
}
