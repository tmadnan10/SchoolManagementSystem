<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Student extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->string('username')->unique();
            $table->integer('class_id');
            $table->string('section_id', 10);
            $table->integer('student_id');
            $table->string('first_name', 60);
            $table->string('last_name',60);
            $table->string('email')->unique();
            $table->date('date_of_birth');
            $table->date('admission_year');
            $table->string('blood_group', 15);
            $table->string('Address',100);
            $table->string('profile_pic', 60);
            $table->timestamps();
            $table->unique(array('class_id', 'section_id', 'student_id'));
            $table->primary('username');
        });
        Schema::table('student', function($table) {
            $table->foreign('username')->references('username')->on('users');
            $table->foreign('class_id')->references('class_id')->on('section');
            //$table->foreign('section_id')->references('section_id')->on('section');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('student');
    }
}
