<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Subject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject', function (Blueprint $table) {
            $table->string('subject_id');
            $table->string('dept_id');
            $table->string('subject_name');
            $table->timestamps();
            $table->primary('subject_id');
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
        Schema::drop('subject');
    }
}
