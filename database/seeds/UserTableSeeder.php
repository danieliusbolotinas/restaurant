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
        $user01 = new User();
        $user01->name = 'Admin';
        $user01->last_name = 'Admin';
        $user01->bday = '1999 10 10';
        $user01->phone = '868552547';
        $user01->email = 'admin@restaurant.com';
        $user01->password = bcrypt('admin');
        $user01->address = 'Svitrigailo 12';
        $user01->city = 'Vilnius';
        $user01->zipcode = '123';
        $user01->country = 'Lietuva';
        $user01->is_admin = true;
        $user01->save();


        $user02 = new User();
        $user02->name = 'User';
        $user02->last_name = 'User';
        $user02->bday = '1999 10 10';
        $user02->phone = '68552547';
        $user02->email = 'user@restaurant.com';
        $user02->password = bcrypt('user123');
        $user02->address = 'Svitrigailo 12';
        $user02->city = 'Vilnius';
        $user02->zipcode = '123';
        $user02->country = 'Lietuva';
        $user02->is_admin = false;
        $user02->save();
    }
}
