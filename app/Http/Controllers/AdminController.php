<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\User;
use App\Teacher;
use App\Student;
use App\Assigned_Subject;
use App\Http\Requests;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;







class AdminController extends Controller
{
    //
    public static $data = 'yo';
    public $d;

    public function __construct()
{
    $this->middleware('auth');
}

    public function index(Request $request){
        if (Auth::user()->account_type == 'admin') {
            return view('admin.adminpage');
        }
        return redirect(url('/').'/'.Auth::user()->account_type);
    	
    }


    public function createUser(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
            'account_type' => 'required',
        ]);

        return redirect(url('/').'/addnew/'.$request->account_type)
                        ->with(['userName' => $request->username, 'passWord' => bcrypt($request->password), 'account' => $request->account_type]);
    }

    public function createTeacher(Request $request)
    {
        $newUser = new User;
        $newTeacher = new Teacher;
        $this->validate($request, [
            'first_name' => 'max:255',
            'last_name' => 'max:255',
            'dept_name' => 'required',
            'email' => 'email|unique:users',
            'join_date' => 'required',
            'designation' => 'required',
            'blood_group' => 'max:15',
            'address' => 'max:255',
        ]);

        $newUser->create([
            'username' => $request->user,
            'password' => $request->password,
            'email' => $request->email,
            'account_type' => $request->account_type,
        ]);



        //$dept = DB::table('department')->where('dept_name', $request->dept_name)->first();

        $newTeacher->create([
        	'username' => $request->user,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'dept_id' => $request->dept_name,
            'email' => $request->email,
            'join_date' => $request->join_date,
            'designation' => $request->designation,
            'blood_group' => $request->blood_group,
            'Address' => $request->address,            
            'profile_pic' => $request->profile_pic,
        ]);

        DB::table('department')
            ->where('dept_id', $request->dept_id)
            ->increment('total_teacher');

        return view('admin.redirect', ['msg' => 'Succesfully Added A New Teacher', 
            'page' => 'Admin Portal', 'url' => 'admin'
            ]);
    }


    public function createStudent(Request $request)
    {
        $newUser = new User;
        $newTeacher = new Student;
        $this->validate($request, [
            'class_id' => 'required',
            'section_id' => 'required',
            'student_id' => 'unique:student,student_id,NULL,username,class_id,'.$request->class_id.',section_id,'.$request->section_id.'|required',
            'first_name' => 'max:255',
            'last_name' => 'max:255',
            'email' => 'email|unique:users',
            'admission_year' => 'required',
            'blood_group' => 'max:15',
            'address' => 'max:255',
        ]);

        $newUser->create([
            'username' => $request->user,
            'password' => $request->password,
            'email' => $request->email,
            'account_type' => $request->account_type,
        ]);
        /*echo ($request->date_of_birth);
        $date_of_birth = strtotime($request->date_of_birth);
        echo ($date_of_birth);
        $new_date_of_birth = date('Y-m-d',$date_of_birth);
        echo ($new_date_of_birth);
*/
        if ($request->profile_pic == '') {
            $request->profile_pic = 'default_avatar.png';
        }

        $newTeacher->create([
            'username' => $request->user,
            'class_id' =>$request->class_id,
            'section_id' => $request->section_id,
            'student_id' => $request->student_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'date_of_birth' => $request->date_of_birth,
            'admission_year' => $request->admission_year,
            'blood_group' => $request->blood_group,
            'Address' => $request->address,            
            'profile_pic' => $request->profile_pic,
        ]);

        DB::table('section')
            ->where('class_id', $request->class_id)
            ->where('section_id', $request->section_id)
            ->increment('total_students');

        return view('admin.redirect', ['msg' => 'Succesfully Added A New Student', 
            'page' => 'Admin Portal', 'url' => 'admin'
            ]);
    }


    public function addClubModerator(Request $request){
        $this->validate($request, [
            'club_id' => 'required',
            'dept_id' => 'required',
            'username' => 'required',
        ]);
        $club = DB::table('club')
            ->select('club_name')
            ->where('club_id', $request->club_id)
            ->get();
        DB::table('club')
            ->where('club_id', $request->club_id)
            ->update(['moderator_id' => $request->username]);
        foreach ($club as $key) {
            $name = $key->club_name;
        }
        return view('admin.redirect1', ['msg' => 'Succesfully Changed The Moderator of '.$name, 
            'page' => 'Club Management', 'url' => 'admin/club_management'
            ]);
        //echo ($request->club_id).($request->dept_id).($request->username);
    }

    public function addClubNotice(Request $request){
        //if ($request->has('notes')) {
        //    echo "string";
        //}
        //else echo "string2";
        //echo "in";
        $this->validate($request, [
            'club_id' => 'required',
            'type' => 'required',
            'date' => 'required',
            'notes' => 'required',
        ]);
        $club = DB::table('club')
            ->where('club_id', $request->club_id)
            ->first();
        //echo "in";
        /*$club = DB::table('club')
            ->select('club_name')
            ->where('club_id', $request->club_id)
            ->get();
        DB::table('club')
            ->where('club_id', $request->club_id)
            ->update(['moderator_id' => $request->username]);
        foreach ($club as $key) {
            $name = $key->club_name;
        }
        return view('admin.redirect', ['msg' => 'Succesfully Changed The Moderator of '.$name, 
            'page' => 'Club Management', 'url' => 'club_management'
            ]);*/
        echo ($request->club_id).($request->type).($request->date).($request->notes);
        return view('admin.redirect1', ['msg' => 'Succesfully Added A New Event of '.$club->club_name, 
            'page' => 'Club Management', 'url' => 'admin/club_management'
            ]);
    }


    public function addSubjectTeacher(Request $request){
        $this->validate($request, [
            'class_id' => 'required',
            'section_id' => 'required',
            'subject_id' => 'required',
            'username' => 'required',
            'duration' => 'required',
            'classes_per_week' => 'required',
        ]);
        if ($request->moderator == '') {
            $newAssigned = new Assigned_Subject;
            $newAssigned->create([
                'subject_id' => $request->subject_id,
                'teacher_username' => $request->username,
                'class_id' => $request->class_id,
                'section_id' => $request->section_id,
                'duration' => $request->duration,
                'classes_per_week' => $request->classes_per_week,
            ]);
        }
        else{
            DB::table('assigned_subject')
            ->where('class_id', $request->class_id)
            ->where('section_id', $request->section_id)
            ->where('subject_id', $request->subject_id)
            ->update(['teacher_username' => $request->username]);
        }
/*
        $club = DB::table('club')
            ->select('club_name')
            ->where('club_id', $request->club_id)
            ->get();
        DB::table('assigned_subject')
            ->where('class_id', $request->club_id)
            ->update(['moderator_id' => $request->username]);
        foreach ($club as $key) {
            $name = $key->club_name;
        }
        
            */
        //echo ($request->club_id).($request->dept_id).($request->username);
        return view('admin.redirect', ['msg' => 'Succesfully Assigned Subject Teacher', 
            'page' => 'Teacher Management', 'url' => 'teacher_management'
            ]);
    }

    public function classTeacher(Request $request){
        if (Auth::user()->account_type == 'admin') {
            return view('admin.addClassTeacher');
        }
        return redirect(url('/').'/'.Auth::user()->account_type);
/*
        $club = DB::table('club')
            ->select('club_name')
            ->where('club_id', $request->club_id)
            ->get();
        DB::table('assigned_subject')
            ->where('class_id', $request->club_id)
            ->update(['moderator_id' => $request->username]);
        foreach ($club as $key) {
            $name = $key->club_name;
        }
        
            */
        //echo ($request->club_id).($request->dept_id).($request->username);
        
    }

    public function addClassTeacher(Request $request){
        $this->validate($request, [
            'class_id1' => 'required',
            'section_id1' => 'required',
            'username1' => 'required',
        ]);
        
            DB::table('section')
            ->where('class_id', $request->class_id1)
            ->where('section_id', $request->section_id1)
            ->update(['class_teacher' => $request->username1]);
/*
        $club = DB::table('club')
            ->select('club_name')
            ->where('club_id', $request->club_id)
            ->get();
        DB::table('assigned_subject')
            ->where('class_id', $request->club_id)
            ->update(['moderator_id' => $request->username]);
        foreach ($club as $key) {
            $name = $key->club_name;
        }
        
            */
        //echo ($request->club_id).($request->dept_id).($request->username);
        return view('admin.redirect', ['msg' => 'Succesfully Assigned Class Teacher of Class '.$request->class_id1.'-'.$request->section_id1, 
            'page' => 'Teacher Management', 'url' => 'teacher_management'
            ]);
    }


    public function set(Request $request){
        $one = '10';
        $two = 'A';
        $this->validate($request, [
            'username' => 'required|unique:student,student_id,NULL,username,class_id,'.$one.',section_id,'.$two
        ]);

    	return redirect(url('/').'/temp1')->with([ 'none' => $request->username1, 'ntwo' => $two]);
    }

    public function get(Request $request){
        $this->validate($request, [
            'username' => 'max:1'
        ]);
    }
    
}
