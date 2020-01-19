<?php

use Illuminate\Database\Seeder;
use App\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([

        	'name' => 'super_admin',
        	'email' => 'super_admin@system.com',
        	'password' => bcrypt('super_admin')

        ]);

        $user->attachRole('super_admin');
    }
}
