<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'id' => 1,
        	'name' => 'administrador',
        	'email' => 'administrador@tenis.app',
        	'password' => bcrypt('administrador'),
        	'city_id' => 1,
        	'club_id' => 1,
        	'role' => 'administrador'
        ]);
    }
}
