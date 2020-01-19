<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([

        	'name' => 'super_admin',
        	'display_name' => 'super admin',
        	'description' => 'can do anything in the project'

        ]);

        Role::create([

        	'name' => 'user',
        	'display_name' => 'user',
        	'description' => 'can do specific things in the project'

        ]);
    }
}
