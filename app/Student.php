<?php

namespace App;
use DB;
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
    public function updateAll($username, $array)
    {
        DB::table('student')
            ->where('username', $username)
            ->update($array);
    }
    public function getAll($class_id, $section_id)
    {
        return Student::where('class_id', $class_id)->where('section_id', $section_id)->get();
    }

    public function getAllS($class_id, $section_id)
    {
        return Student::where('class_id', $class_id)->where('section_id', $section_id)->orderBy('student_id')->get();
    }
    public function updateProPic($username, $image_name){
        return Student::where('username', $username)
            ->update(['profile_pic' => $image_name]);    
    }
    public function getID($class_id, $section_id, $student_id)
    {
        return Student::where('class_id', $class_id)->where('section_id', $section_id)->where('student_id', $student_id)->first();
    }
    public function getClassID($username)
    {   
        return Student::where('username', $username)->first();
    }
    public function getEntire(){
        return Student::select('username')->get();
    }
    public function getIDs($username){
        return Student::where('username', $username)->first();
    }
    public function search($key)
    {
        return Student::where('first_name', 'like', '%'.$key.'%')
                      ->orWhere('last_name', 'like', '%'.$key.'%')
                      ->select('first_name', 'last_name')
                      ->get();
    }
}
