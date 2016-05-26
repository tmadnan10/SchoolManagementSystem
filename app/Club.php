<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    //
    protected $table = 'club';


    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function getClub($club_id)
    {

        return Club::where('club_id', $club_id)
            ->first();
    }

    public function addModerator($club_id, $username)
    {
    	 return Club::where('club_id', $club_id)
            ->update(['moderator_id' => $username]);
    }
}
