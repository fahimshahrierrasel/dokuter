<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = new Role();
        $role_admin->name = 'doctor';
        $role_admin->description = 'Admin of the Dokuter';
        $role_admin->save();

        $role_doctor = new Role();
        $role_doctor->name = 'doctor';
        $role_doctor->description = 'Doctor of the Dokuter Application';
        $role_doctor->save();
    }
}
