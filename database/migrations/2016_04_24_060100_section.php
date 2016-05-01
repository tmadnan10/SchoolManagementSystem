<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Section extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section', function (Blueprint $table) {
            $table->integer('class_id');
            $table->string('section_id', 10);
            $table->string('room_no',15);
            $table->integer('total_students');
            $table->integer('capacity');
            $table->string('class_teacher')->unique()->index();
            $table->timestamps();
            $table->primary(array('class_id', 'section_id'));
        });
        Schema::table('section', function($table) {
            $table->foreign('class_teacher')->references('username')->on('teacher');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('section');
    }
}
