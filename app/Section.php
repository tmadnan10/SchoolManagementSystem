<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    //
    protected $table = 'section';
    protected $fillable = [
        'class_id', 'section_id', 'room_no', 'total_students', 'class_teacher', 'duration', 'classes_per_week'
    ];

    public function getClassTeacher($username)
    {
    	return Section::where('class_teacher', $username)
                        ->get();
    }

    public function setClassTeacher($class_id1, $section_id1, $username1)
    {
    	return Section::where('class_id', $class_id1)
            ->where('section_id', $section_id1)
            ->update(['class_teacher' => $username1]);
    }

    public function inc($class_id, $section_id)
    {
    	    DB::table('section')
            ->where('class_id', $class_id)
            ->where('section_id', $section_id)
            ->increment('total_students');
    }
    
}
