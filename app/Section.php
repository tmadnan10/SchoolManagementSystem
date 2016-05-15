<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    //
    protected $table = 'section';
    protected $fillable = [
        'class_id', 'section_id', 'room_no', 'total_students', 'class_teacher', 'duration', 'classes_per_week'
    ];
}
