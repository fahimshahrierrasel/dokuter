<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_user = new User();
        $admin_user->name = 'Dokuter Admin';
        $admin_user->username = 'doctor';
        $admin_user->email = 'doctor@dokuter.com';
        $admin_user->password = bcrypt('doctor@dokuter');
        $admin_user->status = 1;
        $admin_user->save();
    }
}
