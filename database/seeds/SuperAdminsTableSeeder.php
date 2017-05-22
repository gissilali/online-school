<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SuperAdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();
        DB::table('admins')->insert([
        	'name' => 'Gibson Silali',
        	'email' => 'silali@admin.com',
        	'password' => bcrypt('catafalque'),
        	'super' => true,
        	'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        	]);
    }
}
