<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Club_Event extends Model
{
    protected $table = 'club_event';
    protected $fillable = [
        'club_id', 'event_type', 'date', 'details', 'uploader',
    ];

    public function getStudentEvents($username)
    {
    	$events = DB::table('club_event')
            ->join('club', 'club.club_id', '=', 'club_event.club_id')
            ->join('clubMember', 'club_event.club_id', '=', 'clubMember.club_id')
            ->leftJoin('teacher', 'club_event.uploader', '=', 'teacher.username')
            ->select('teacher.first_name','teacher.last_name','clubMember.id','club.club_name', 'club_event.event_type', 'club_event.date', 'club_event.details', 'club_event.uploader', 'club_event.created_at')
            ->where('clubMember.member_username', $username)
            ->where('club_event.date','>', date('Y-m-d'))
            ->orderBy('club_event.date')
            ->get();
        return $events;
    }
}
