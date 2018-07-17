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
        $admin_user->username = 'admin';
        $admin_user->email = 'admin@dokuter.com';
        $admin_user->password = bcrypt('admin@dokuter');
        $admin_user->status = 1;
        $admin_user->save();

        $admin_user->roles()
            ->attach((new \App\Role)->where('name', 'admin')->first());
    }
}
