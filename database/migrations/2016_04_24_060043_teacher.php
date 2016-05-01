<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Teacher extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher', function (Blueprint $table) {
            $table->string('username')->unique();
            $table->string('first_name', 60);
            $table->string('last_name',60);
            $table->string('dept_id',10);
            $table->string('email')->unique();
            $table->date('join_date');
            $table->string('designation',20);
            $table->string('blood_group', 15);
            $table->string('Address',100);
            $table->string('profile_pic', 60);
            $table->timestamps();
            $table->primary('username');
        });
        Schema::table('teacher', function($table) {
            $table->foreign('username')->references('username')->on('users');
            $table->foreign('dept_id')->references('dept_id')->on('department');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('teacher');
    }
}
