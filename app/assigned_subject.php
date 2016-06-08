<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class assigned_subject extends Model
{
    //
    protected $table = 'assigned_subject';

    protected $fillable = [
        'subject_id', 'teacher_username', 'class_id', 'section_id', 'duration', 'classes_per_week',
    ];

    public function getAll($username)
    {
    	return assigned_subject::where('teacher_username', $username)
    						  ->orderBy('section_id', 'asc')
                              ->get();
                              /*\DB::table('assigned_subject')
                              ->where('teacher_username', Auth::user()->username)
                              ->get();*/
    }

    public function getUnique($username)
    {
    	return assigned_subject::where('teacher_username', $username)
    						  ->select('class_id')
                              ->distinct()->get();
                              /*\DB::table('assigned_subject')
                              ->where('teacher_username', Auth::user()->username)
                              ->get();*/
    }

    public function setSubjectTeacher($class_id, $section_id, $subject_id, $username)
    {
     	return assigned_subject::where('class_id', $class_id)
            ->where('section_id', $section_id)
            ->where('subject_id', $subject_id)
            ->update(['teacher_username' => $username]);
    }
    public function getAllJoined($username)
    {
      $subject = DB::table('assigned_subject')
            ->join('subject', 'subject.subject_id', '=', 'assigned_subject.subject_id')
            ->select('assigned_subject.id', 'subject.subject_name', 'assigned_subject.class_id', 'assigned_subject.section_id')
            ->where('assigned_subject.teacher_username', '=', $username)
            ->get();
      return $subject;    
    }

    public function getByID($subject_id)
    {
      return assigned_subject::where('id', $subject_id)
            ->first();
    }
}
