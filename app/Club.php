<?php

namespace App;
use DB;
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
    public function getAll()
    {
        
    }

    public function joined($username)
    {
        $users = DB::table('clubMember')
            ->join('club', 'club.club_id', '=', 'clubMember.club_id')
            ->join('student', 'student.username', '=', 'clubMember.member_username')
            ->select('clubMember.*', 'club.club_name', 'student.first_name')
            ->where('clubMember.member_username', $username)
            ->get();
        return $users;
    }
}
