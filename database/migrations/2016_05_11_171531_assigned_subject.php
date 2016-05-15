<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AssignedSubject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assigned_subject', function (Blueprint $table) {
            $table->increments('id');
            $table->string('subject_id');
            $table->string('teacher_username');
            $table->integer('class_id');
            $table->string('section_id');
            $table->time('duration');
            $table->integer('classes_per_week');
            $table->foreign('subject_id')->references('subject_id')->on('subject');
            $table->foreign('teacher_username')->references('username')->on('users');
            $table->foreign('class_id')->references('class_id')->on('section');
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
        Schema::drop('assigned_subject');
    }
}
