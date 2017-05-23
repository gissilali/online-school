<?php

use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->delete();
        DB::table('subjects')->insert([
        	['name' => 'Mathematics', 'code' => 'MAT'],
        	['name' => 'Geography', 'code' => 'GEO'],
        	['name' => 'Physics', 'code' => 'PHY'],
        	['name' => 'Chemistry', 'code' => 'CHE'],
        	['name' => 'Biology', 'code' => 'BIO'],
        	['name' => 'Agriculture', 'code' => 'AGR'],
        	['name' => 'Drawing and Design', 'code' => 'DRD'],
        	['name' => 'Business', 'code' => 'BUS'],
        	['name' => 'History', 'code' => 'HIS'],
        	]);
    }
}
