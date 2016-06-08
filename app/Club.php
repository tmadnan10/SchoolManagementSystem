<?php

namespace App;
use App\ClubMember;
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

    public function getModerator($club_id)
    {
         return Club::where('club_id', $club_id)->first();
    }

    public function members($club_id)
    {   
        return ClubMember::where('club_id', $club_id)->get();
        
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
    public function inc($club_id)
    {   
        DB::table('club')
            ->where('club_id', $club_id)
            ->increment('total_members');
    }
    public function search($key)
    {
        $users = DB::table('club')
            ->join('teacher', 'club.moderator_id', '=', 'teacher.username')
            ->select('club.*', 'teacher.first_name', 'teacher.last_name')
            ->where('club.club_name', 'like', '%'.$key.'%')
            ->get();
        return $users;
    }

}
