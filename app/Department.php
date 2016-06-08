<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //
    protected $table = 'department';
 	
 	public function inc($dept_id)
 	{
 	   	DB::table('department')
            ->where('dept_id', $dept_id)
            ->increment('total_teacher');
 	}   
 	public function search($key)
 	{
        return Department::where('dept_name', 'like', '%'.$key.'%')
                      ->orWhere('dept_id', 'like', '%'.$key.'%')
                      ->get();
    }
}
