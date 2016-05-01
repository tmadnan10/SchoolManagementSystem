<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    /**
	*It will assume the database table is the plural form of the model name
	*So we will define the database name manually 
	*
    */
    protected $table = 'student';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'class_id', 'section_id', 'student_id', 'first_name', 'last_name', 'email', 'date_of_birth', 
        'admission_year', 'blood_group', 'Address', 'profile_pic',
    ];

    /**
     * Get the user that owns the teacher row.
     */

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
