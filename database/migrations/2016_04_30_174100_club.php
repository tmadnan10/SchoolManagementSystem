<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Club extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('club', function (Blueprint $table) {
            $table->string('club_id');
            $table->string('club_name', 30);
            $table->string('office_room_no',10);
            $table->string('moderator_id')->unique();
            $table->string('total_members');
            $table->timestamps();
            $table->primary('club_id');
        });
        Schema::table('club', function($table) {
            $table->foreign('moderator_id')->references('username')->on('teacher');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('club');
    }
}
