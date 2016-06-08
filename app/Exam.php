<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $table = 'exam';
    protected $fillable = [
        'exam_id', 'exam_name', 'exam_date', 'exam_routine', 'result_uploaded', 'seat_plan',
    ];

    public function getExamsForUploadSeatPlan(){
    	$today = date('Y-m-d');
    	return Exam::where('exam_date', '>', $today)->where('seat_plan', '0')->first();
    }

    public function getExamsForUploadRoutine(){
    	$today = date('Y-m-d');
    	return Exam::where('exam_date', '>', $today)->where('exam_routine', '0')->first();
    }

    public function getExamsForUploadResult(){
        $today = date('Y-m-d');
        return Exam::where('exam_date', '<', $today)
                     ->where('result_uploaded', '0')->first();
    }

    public function uploadSeatPlan($exam_id, $name)
    {
    	return Exam::where('id', $exam_id)->update(['seat_plan' => $name]);
    }

    public function uploadRoutine($exam_id, $name)
    {
    	return Exam::where('id', $exam_id)->update(['exam_routine' => $name]);
    }

    public function getExamsRoutine(){
        $today = date('Y-m-d');
        return Exam::where('exam_date', '>', $today)->where('exam_routine', '<>', '0')->first();
    }

    public function getExamsForResult(){
        $today = date('Y-m-d');
        return Exam::where('exam_date', '<', $today)->where('result_uploaded', '1')->get();
    }

    public function getExamsForPublishResult()
    {
        $today = date('Y-m-d');
        return Exam::where('exam_date', '<', $today)->where('result_uploaded', '0')->get();
    }
    public function announce($date)
    {
        return Exam::where('exam_date', $date)->update(['result_uploaded' => '1']);
    }
}
