<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Study_Materials extends Model
{
     protected $table = 'study_materials';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'class_id', 'section_id', 'subject_id', 'name', 'file', 'extension' ,'uploader',
    ];
    public function getAll($class_id, $section_id)
    {
    	return Study_Materials::where('class_id', $class_id)->where('section_id', $section_id)->orderBY('created_at')->paginate(5);
    }

    public function search($key)
    {
        $result = \DB::table('Study_Materials')
                    ->join('Subject', 'Subject.subject_id' ,'=', 'Study_Materials.subject_id')
                    ->select('Subject.subject_name', 'Study_Materials.*')
                    ->where('name', 'like', '%'.$key.'%')
                    ->orWhere('file', 'like', '%'.$key.'%')
                    ->get();
        return $result;
    }

}
