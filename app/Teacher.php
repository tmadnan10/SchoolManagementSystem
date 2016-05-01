<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //
    /**
	*It will assume the database table is the plural form of the model name
	*So we will define the database name manually 
	*
    */
    protected $table = 'teacher';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username','first_name', 'last_name', 'dept_id', 'email', 'join_date', 
        'designation', 'blood_group', 'Address', 'profile_pic',
    ];

    /**
     * Get the user that owns the teacher row.
     */

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function club()
    {
        return $this->hasOne(Club::class);
    }


}
