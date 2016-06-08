<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Class_Test extends Model
{
    protected $table = 'class_test';
    protected $fillable = [
        'username', 'class_id', 'section_id', 'subject_id', 'date', 'class_teacher', 'marks', 'marks_uploaded', 'syllabus',
    ];

    public function getUpcoming($username)
    {
    	$date = date('Y-m-d');
    	return Class_Test::where('username', $username)
    					   ->where('date', '>', $date)
    					   ->orderBy('date', 'asc')
    					   ->get();
    }
    public function getUpcomingDist($username)
    {
    	$date = date('Y-m-d');
    	return Class_Test::where('username', $username)
    					   ->select('class_id')
    					   ->where('date', '>', $date)
    					   ->orderBy('date', 'asc')
    					   ->distinct()->get();
    }
    public function getDone($username)
    {
    	$date = date('Y-m-d');
    	return Class_Test::where('username', $username)
    					   ->where('date' , '<', $date)
    					   ->get();
    }
    public function getDoneDist($username)
    {
    	$date = date('Y-m-d');
    	return Class_Test::where('username', $username)
    					   ->select('class_id')
    					   ->where('date', '<', $date)
    					   ->orderBy('date', 'asc')
    					   ->distinct()->get();
    }

    public function updateAll($username, $class_id, $section_id, $subject_id, $cd, $array){
    	return Class_test::where('username', $username)
    					 ->where('class_id', $class_id)
    					 ->where('section_id', $section_id)
    					 ->where('subject_id', $subject_id)
    					 ->where('date', $cd)
    					 ->update($array);
    }
    public function uploadMarks($class_id, $section_id,$subject_id,$cd,$username,$name){
    	return Class_test::where('username', $username)
    					 ->where('class_id', $class_id)
    					 ->where('section_id', $section_id)
    					 ->where('subject_id', $subject_id)
    					 ->where('date', $cd)
    					 ->update(['marks'=>$name, 'marks_uploaded' => 1]);
    }
    
    public function getUpcomingCTs($class_id, $section_id)
    {
        $date = date('Y-m-d');
        return Class_Test::where('class_id', $class_id)
                           ->where('section_id', $section_id)
                           ->where('date', '>', $date)
                           ->orderBy('date', 'asc')
                           ->get();
    }

    public function getUpcomingCTsJoined($class_id, $section_id){
        $date = date('Y-m-d');
        $CTs = \DB::table('class_test')
                   ->join('subject', 'class_test.subject_id', '=', 'subject.subject_id')
                   ->select('class_test.*','subject.subject_name')
                   ->where('class_id', $class_id)
                   ->where('section_id', $section_id)
                   ->where('date', '>', $date)
                   ->orderBy('date', 'asc')
                   ->get();
        return $CTs;
    }

    public function getCTsWithMarks($class_id, $section_id)
    {
        $date = date('Y-m-d');
        $CTs = \DB::table('class_test')
                   ->join('subject', 'class_test.subject_id', '=', 'subject.subject_id')
                   ->select('class_test.*','subject.subject_name')
                   ->where('class_id', $class_id)
                   ->where('section_id', $section_id)
                   ->where('date', '<', $date)
                   ->where('marks_uploaded', '1')
                   ->orderBy('date', 'desc')
                   ->get();
        return $CTs;
    }
}
