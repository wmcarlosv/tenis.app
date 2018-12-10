<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PlayerCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('player_categories')->insert([
        	'id' => 1,
        	'name' => 'Honor',
        	'slug' => 'honor'
        ]);
    }
}
