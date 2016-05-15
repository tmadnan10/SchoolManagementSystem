<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class assigned_subject extends Model
{
    //
    protected $table = 'assigned_subject';

    protected $fillable = [
        'subject_id', 'teacher_username', 'class_id', 'section_id', 'duration', 'cassed_per_week',
    ];

}
