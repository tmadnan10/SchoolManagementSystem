<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Teacher;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\TeacherRepository;
use App\Repositories\ClubRepository;

class TeacherController extends Controller
{
    //
    /**
     * The teacher repository instance.
     *
     * @var TeacherRepository
     */
    protected $teacher;
    protected $club;
    protected $request;

    /**
     * Create a new controller instance.
     *
     * @param  TeacherRepository  $teacher
     * @return void
     */
    public function __construct(TeacherRepository $teacher, ClubRepository $club, Request $request)
    {
        $this->middleware('auth');

        $this->teacher = $teacher;
        $this->club = $club;
        $this->request = $request;
    }



    /**
     * Display teacher profile of the user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {
        if (Auth::user()->account_type == 'teacher') {
            return view('teacher.index', [
                'teacher' => $this->teacher->forUser($request->user()),
            ]);
        }
        return redirect(url('/').'/'.Auth::user()->account_type);
    }


    public function club(Request $request)
    {
        if (Auth::user()->account_type == 'teacher') {
            return view('teacher.club1', [
                'teacher' => $this->teacher->forUser($request->user()),
                'club' => $this->club->forTeacher($request->user()),
            ]);
        }
        return redirect(url('/').'/'.Auth::user()->account_type);
    }



    public function addClubMember(Request $request){

        $this->validate($request, [
            'class_id' => 'required|max:2',
            'section_id' => 'required|max:4',
            'student_id' => 'required',
            'membership_status' => 'required',
        ]);
        echo ($request->class_id);
        /*return redirect(url('/').'/addnew/'.$request->account_type)
                        ->with(['userName' => $request->username, 'passWord' => bcrypt($request->password), 'account' => $request->account_type]);*/
    }

    /**
     * Edit Student profile of the user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function edit(Request $request)
    {
        if (Auth::user()->account_type == 'teacher') {
            return view('teacher.edit', [
                'teacher' => $this->teacher->forUser($request->user()),
            ]);
        }
        return redirect(url('/').'/'.Auth::user()->account_type);
    }


    /**
    * Save Edited Data.
    *
    * @param  Request  $request
    * @return Response
    */
    public function editData(Request $request)
    {
      $this->validate($request, [
          'first_name' => 'max:255',
          'last_name' => 'max:255',
          'email' => 'required|email|unique:users,email,'.Auth::user()->username.',username',
          'blood_group' => 'max:15',
          'Address' => 'max:255',
      ]);
      $array = array(
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'email' => $request->email,
        'blood_group' => $request->blood_group,
        'Address' => $request->Address,
      );
      Teacher::where('username', '=', Auth::user()->username)->update($array);
      if ($request->email != "") {
        DB::table('users')
            ->where('username', Auth::user()->username)
            ->update(['email' => $request->email]);
      }
      return redirect(url('/').'/'.Auth::user()->account_type);
    }


    /**
    * Save 1st Time Edited Data.
    *
    * @param  Request  $request
    * @return Response
    */
    public function firstEdit(Request $request)
    {
      $this->validate($request, [
          'first_name' => 'required|max:255',
          'last_name' => 'required|max:255',
          'email' => 'required|email|unique:users,email,'.Auth::user()->username.',username',
          'date_of_birth' => 'required',
          'blood_group' => 'max:15',
          'address' => 'required|max:255',
      ]);
      $array = array(
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'email' => $request->email,
        'date_of_birth' => $request->date_of_birth,
        'blood_group' => $request->blood_group,
        'Address' => $request->address,
        'profile_pic' => $request->profile_pic
      );
      Student::where('username', '=', Auth::user()->username)->update($array);
      if ($request->email != "") {
        DB::table('users')
            ->where('username', Auth::user()->username)
            ->update(['email' => $request->email]);
      }
      return redirect(url('/').'/'.Auth::user()->account_type);
    }

    /**
     * show my activities.
     *
     * @param  Request  $request
     * @return Response
     */

    public function myActivities(Request $request){
      return view('teacher.activities',[
        'teacher' => $this->teacher->forUser($request->user()),
        'club' => $this->club->forTeacher($request->user()),
        ]);
    }


    public function changeProPic(Request $request){
      if (Auth::check()) {
        if (Auth::user()->account_type == 'teacher') {
          return view('teacher.propicchange', [
            'teacher' => $this->teacher->forUser($request->user()),
          ]);
        }
        return redirect(url('/').'/'.Auth::user()->account_type);
      }
      return redirect(url('/login'));
    }


    public function changeMyProPic(Request $request){
      $this->validate($request, [
        'file' => 'image',
        ]);

      if (Input::hasFile('file')) {

        


       
        $file = Input::file('file');
        $extension = Input::file('file')->getClientOriginalExtension();
        //echo($extension);
        $image_name = time()."-".$file->getClientOriginalName();
        $file->move('pro_pics', $image_name);
        

        $image = Image::make(sprintf('pro_pics/%s', $image_name))
                ->resize(null, 300, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                    }
                )
                ->save();
        $a = Image::make(sprintf('pro_pics/%s', $image_name))->width(); //echo ($a);
        $height = $width = null;
        if ($a < 300) {
          $width = $height = $a;

        }
        else {$height = $width = 300;}
        
        $image = Image::make(sprintf('pro_pics/%s', $image_name))
                ->crop($height,$width)
                ->save();
        
        DB::table('teacher')
            ->where('username', Auth::user()->username)
            ->update(['profile_pic' => $image_name]);
        }
        //return redirect(url('/teacher'));
      /*$txt = $this->request->hasFile('file');
      echo($txt); */
      //return $txt;
       //$file = Request::file('file');
        //$image_name = time()."-".$file->getClientOriginalName();
        //echo($image_name);
        //$file->move('uploads', $image_name);
        //$image = Image::make(sprintf('uploads/%s', $image_name))->resize(200, 200)->save();
      return view('teacher.redirect', [
        'msg' => 'Successfully Changed Your Profile Picture',
        'page' => 'Your Portal',
        'url' => 'teacher',
        'teacher' => $this->teacher->forUser($request->user()),
        ]);
      
    }


    public function classTest(Request $request){
      if (Auth::user()->account_type == 'teacher') {
        return view('teacher.classTest', ['teacher' => $this->teacher->forUser($request->user())]);
      }
      return redirect(url('/').'/'.Auth::user()->account_type);
    }
    /**
     * Create a new teacher.
     *
     * @param  Request  $request
     * @return Response
     */
    /*public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
        ]);

        $request->user()->tasks()->create([
            'name' => $request->name,
        ]);

        return redirect('/tasks');
    }*/
}
