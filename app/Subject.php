<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
	protected $table = 'subject';
	protected $fillable = [
        'subject_id', 'dept_id', 'subject_name',
    ];

    public function getSubjectName($subject_id)
    {	
		return Subject::where('subject_id', $subject_id)->first();	
    }
}
