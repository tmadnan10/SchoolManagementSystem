<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClubMember extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubMember', function (Blueprint $table) {
            $table->increments('id');
            $table->string('member_username');
            $table->string('club_id');
            $table->string('membership_status',30);
            $table->timestamps();
        });
        Schema::table('clubMember', function($table) {
            $table->foreign('member_username')->references('username')->on('student');
            $table->foreign('club_id')->references('club_id')->on('club');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clubMember');
    }
}
