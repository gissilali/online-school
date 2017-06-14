<?php

use Illuminate\Database\Seeder;

class TermsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('terms')->delete();
        DB::table('terms')->insert([
        	['term' => 1],
        	['term' => 2],
        	['term' => 3],
        	]);
    }
}
