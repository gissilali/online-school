<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('guardian_id')->nullable();
            $table->string('name');
            $table->string('email')->unique()->nullable();
            $table->string('admission_number')->unique();
            $table->integer('level_id');
            $table->string('home_address')->nullable();
            $table->integer('fees_balance')->nullable();
            $table->boolean('fees_update')->default(false);
            $table->string('county')->nullable();
            $table->string('phone')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
