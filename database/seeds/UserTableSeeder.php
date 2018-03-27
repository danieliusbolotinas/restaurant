<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'Admin';
        $user->last_name = 'Admin';
        $user->bday = '1999 10 10';
        $user->phone = '869832776';
        $user->email = 'admin@parazit.com';
        $user->password = bcrypt('admin');
        $user->address = 'Vilniaus 12-12';
        $user->city = 'Vilnius';
        $user->zipcode = '123';
        $user->country = 'Lietuva';
        $user->is_admin = true;
        $user->save();


        $user = new User();
        $user->name = 'User';
        $user->last_name = 'User';
        $user->bday = '1999 10 10';
        $user->phone = '869832776';
        $user->email = 'user@parazit.com';
        $user->password = bcrypt('user123');
        $user->address = 'Vilniaus 12-12';
        $user->city = 'Vilnius';
        $user->zipcode = '123';
        $user->country = 'Lietuva';
        $user->is_admin = false;
        $user->save();
    }
}
