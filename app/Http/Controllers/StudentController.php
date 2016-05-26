<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Teacher;
use App\Student;
use App\ClubMember;
use App\Notification;
use App\User;
use App\Club;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\StudentRepository;
use App\Repositories\ClubMemberRepository;

class StudentController extends Controller
{
    //
    /**
     * The teacher repository instance.
     *
     * @var TeacherRepository
     */
    protected $student;
    protected $clubMember;

    /**
     * Create a new controller instance.
     *
     * @param  TeacherRepository  $teacher
     * @return void
     */
    public function __construct(StudentRepository $student, ClubMemberRepository $clubMember)
    {
        $this->middleware('auth');

        $this->student = $student;
        $this->clubMember = $clubMember;
    }

    /**
     * Display Student profile of the user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {
        if (Auth::user()->account_type == 'student') {
            return view('student.index', [
                'student' => $this->student->forUser($request->user()),
            ]);
        }
        return redirect(url('/').'/'.Auth::user()->account_type);
    }


    /**
     * Edit Student profile of the user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function edit(Request $request)
    {
        if (Auth::user()->account_type == 'student') {
            return view('student.edit', [
                'student' => $this->student->forUser($request->user()),
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
          'email' => 'email|unique:users,email,'.Auth::user()->username.',username',
          'date_of_birth' => 'date',
          'blood_group' => 'max:15',
          'address' => 'max:255',
          'profile_pic' => 'max:200',
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
      $student = new Student;
      $student->updateAll(Auth::user()->username, $array);  
      if ($request->email != "") {
        $user = new User;
        $user->updateEmail(Auth::user()->username, $request->email);
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
      $student = new Student;
      $student->updateAll(Auth::user()->username, $array);  
      if ($request->email != "") {
        $user = new User;
        $user->updateEmail(Auth::user()->username, $request->email);
      }
      return redirect(url('/').'/'.Auth::user()->account_type);
    }

    public function clubs(Request $request){
      if (Auth::user()->account_type == 'student') {
        
            return view('student.club', [
                'student' => $this->student->forUser($request->user()),
                'clubs' => $this->clubMember->forUser($request->user())
            ]);
        }
        return redirect(url('/').'/'.Auth::user()->account_type);
    }

    public function myAllClubs(Request $request)
    {
      if (Auth::user()->account_type == 'student') {
        $clb = new Club;
            return view('student.myallclubs', [
                'student' => $this->student->forUser($request->user()),
                'clubs' => $this->clubMember->forUser($request->user()),
                'list' => $clb->all(),
            ]);
        }
        return redirect(url('/').'/'.Auth::user()->account_type);
    }

    public function myClubEvent(Request $request)
    {
      if (Auth::user()->account_type == 'student') {
        $clubevent = new Club;
        $joined = $clubevent->joined(Auth::user()->username);
            return view('student.clubevents', [
                'student' => $this->student->forUser($request->user()),
                'clubs' => $this->clubMember->forUser($request->user()),
                'joined' => $joined
            ]);
        }
        return redirect(url('/').'/'.Auth::user()->account_type); 
    }

    public function notification(Request $request){
      if (Auth::user()->account_type == 'student') {
        //$users = Notification::getAll(Auth::user()->username);
        $notif = new Notification;
        $users = DB::table('notification')
                  ->where('username', Auth::user()->username)
                  ->paginate(5);

        return view('student.notification', ['users' => $notif->getAll(Auth::user()->username), 'student' => $this->student->forUser($request->user()),]);
  
        }
        return redirect(url('/').'/'.Auth::user()->account_type);
    }

    public function changeProPic(Request $request){
      if (Auth::check()) {
        if (Auth::user()->account_type == 'student') {
          return view('student.propicchange', [
            'student' => $this->student->forUser($request->user()),
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
        $student = new Student;
        $student->updateProPic(Auth::user()->username, $image_name);
        /*DB::table('teacher')
            ->where('username', Auth::user()->username)
            ->update(['profile_pic' => $image_name]);*/
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
      return view('student.redirect', [
        'msg' => 'Successfully Changed Your Profile Picture',
        'page' => 'Your Portal',
        'url' => 'student',
        'student' => $this->student->forUser($request->user()),
        ]);
      
    }

}
