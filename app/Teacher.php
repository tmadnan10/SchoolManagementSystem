<?php

namespace App;
use DB;
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

    public function updateAll($username, $array)
    {
        DB::table('teacher')
            ->where('username', $username)
            ->update($array);
    }

    public function updateProPic($username, $image_name){
        DB::table('teacher')
            ->where('username', $username)
            ->update(['profile_pic' => $image_name]);    
    }

    public function search($key)
    {
        return Teacher::where('first_name', 'like', '%'.$key.'%')
                      ->orWhere('last_name', 'like', '%'.$key.'%')
                      ->select('first_name', 'last_name')
                      ->get();
    }
    

}
