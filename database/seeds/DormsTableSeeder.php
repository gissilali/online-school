<?php

use Illuminate\Database\Seeder;

class DormsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('dorms')->delete();
    	DB::table('dorms')->insert([
    		['name' => 'DORM A'],
    		['name' => 'DORM B'],
    		['name' => 'DORM C'],
    		['name' => 'DORM D'],
    		]);
    }
}
