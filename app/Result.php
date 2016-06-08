<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $table = 'result';
    protected $fillable = [
        'exam_id', 'std_username', 'subject_id', 'obtained_marks', 'grade',
    ];

    public function getMyResult($exam_id,$username)
    {
    	$result = \DB::table('result')
    			->join('subject', 'subject.subject_id', '=', 'result.subject_id')
    			->select('result.*', 'subject.subject_name')
    			->where('exam_id', $exam_id)
    			->where('std_username', $username)
    			->orderBy('subject.subject_name')
    			->get();
    	return $result;
    }
}
