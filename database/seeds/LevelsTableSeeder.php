<?php

use Illuminate\Database\Seeder;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('levels')->delete();
        DB::table('levels')->insert([
        		['class' => 'Form 1', 'value' => 1],
        		['class' => 'Form 2', 'value' => 2],
        		['class' => 'Form 3', 'value' => 3],
        		['class' => 'Form 4', 'value' => 4],
        	]);
    }
}
