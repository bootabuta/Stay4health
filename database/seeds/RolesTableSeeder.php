<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = new App\Role;
        $role_adviser = new App\Role;
        $role_admin = new App\Role;
        $role_user->name="user";
        $role_adviser->name="expert";
        $role_admin->name="admin";
        $role_user->save();
        $role_adviser->save();
        $role_admin->save();
    }
}
