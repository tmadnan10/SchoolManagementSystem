<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Teacher;
use App\Student;
use App\ClubMember;
use App\Notification;
use App\User;
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
                'clubMember' => $this->clubMember->forUser($request->user())
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

}
