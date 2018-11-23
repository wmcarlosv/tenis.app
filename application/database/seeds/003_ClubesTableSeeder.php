<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClubesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clubes')->insert([
        	'id' => 1,
        	'name' => 'Sin Nombre',
        	'city_id' => 1,
        	'slug' => 'sin-nombre'
        ]);
    }
}
