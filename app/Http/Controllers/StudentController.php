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
use App\Club_Event;
use App\Notification;
use App\User;
use App\Subject;
use App\Exam;
use App\Club;
use App\Search;
use App\Study_Materials;
use App\Section;
use App\Result;
use App\Department;
use App\Class_Test;
use Illuminate\Pagination\Paginator;
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
      ]);
      $array = array(
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'email' => $request->email,
        'date_of_birth' => $request->date_of_birth,
        'blood_group' => $request->blood_group,
        'Address' => $request->address,
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
        $clubevent = new Club_Event;
        $joined = $clubevent->getStudentEvents(Auth::user()->username);
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

    public function downloadPage(Request $request){
      if (Auth::user()->account_type == 'student') {
        $student = new Student;
        $section = new Section;
        $exam = new Exam;
        $class_id = $student->getClassID(Auth::user()->username)->class_id;
        $section_id = $student->getClassID(Auth::user()->username)->section_id;
        //echo $class_id.$section_id;
        $sectionID = $section->getSection($class_id, $section_id);
        return view('student.downloadPage', ['student' => $this->student->forUser($request->user()),
          'section' => $sectionID,
          'exam' => $exam->getExamsRoutine(),
          ]);
  
        }
        return redirect(url('/').'/'.Auth::user()->account_type);
    }

    public function studyMaterialPage(Request $request){
      if (Auth::user()->account_type == 'student') {
        $std = new Student;
        $studyMaterial = new Study_Materials;
        return view('student.studyMaterialPage', ['student' => $this->student->forUser($request->user()),
            'studyMaterials' => $studyMaterial->getAll($std->getClassID(Auth::user()->username)->class_id,$std->getClassID(Auth::user()->username)->section_id),
          ]);
  
        }
        return redirect(url('/').'/'.Auth::user()->account_type);
    }

    public function classTestPage(Request $request){
      if (Auth::user()->account_type == 'student') {
        $student = new Student;
        $classTest = new Class_Test;
          return view('student.classTestPage', ['student' => $this->student->forUser($request->user()),
            'CTs' => $classTest->getUpcomingCTs($student->getIDs(Auth::user()->username)->class_id,$student->getIDs(Auth::user()->username)->section_id)
            ]);
  
        }
        return redirect(url('/').'/'.Auth::user()->account_type);
    }

    public function upcomingCTs(Request $request){
      if (Auth::user()->account_type == 'student') {
        $student = new Student;
        $classTest = new Class_Test;
          return view('student.upcomingCTs', ['student' => $this->student->forUser($request->user()),
            'CTs' => $classTest->getUpcomingCTsJoined($student->getIDs(Auth::user()->username)->class_id,$student->getIDs(Auth::user()->username)->section_id)
            ]);
  
        }
        return redirect(url('/').'/'.Auth::user()->account_type);
    }

    public function CTMarks(Request $request)
    {
      if (Auth::user()->account_type == 'student') {
        $student = new Student;
        $classTest = new Class_Test;
          return view('student.CTMarks', ['student' => $this->student->forUser($request->user()),
            'CTs' => $classTest->getCTsWithMarks($student->getIDs(Auth::user()->username)->class_id,$student->getIDs(Auth::user()->username)->section_id)
            ]);
  
        }
        return redirect(url('/').'/'.Auth::user()->account_type);
    }
    public function classRoutineDownload(Request $request){
      if (Auth::user()->account_type == 'student') {
        $student = new Student;
        //$classTest = new Class_Test;
          //return view('student.CTMarks', [
           // 'student' => $this->student->forUser($request->user()),
           // 'CTs' => $classTest->getCTsWithMarks($student->getIDs(Auth::user()->username)->class_id,$student->getIDs(Auth::user()->username)->section_id)
           // ]);

        $section = new Section;
        $class_id = $student->getClassID(Auth::user()->username)->class_id;
        $section_id = $student->getClassID(Auth::user()->username)->section_id;
        //echo $class_id.$section_id;
        $sectionID = $section->getSection($class_id, $section_id);
        //echo($sectionID);
        //$sectionID = $section->getSection($student->getClassID(Auth::user()->username)->class_id, $student->getClassID(Auth::user()->username)->class_id);
        //echo $sectionID->routine;
        return redirect(url('../').'/'.$sectionID->routine);
        }
        //return redirect(url('/').'/'.Auth::user()->account_type);

    }

    public function result(Request $request)
    {
      if (Auth::user()->account_type == 'student') {
          $exam = new Exam;
          $sub = new Subject;
          $std = new Student;
          $std = $std->getClassID(Auth::user()->username);
          return view('student.resultPage', ['student' => $this->student->forUser($request->user()),
            'exams' => $exam->getExamsForResult(),
            'subList' => $sub->subjectList($std->class_id)
            ]);
  
        }
        return redirect(url('/').'/'.Auth::user()->account_type);
    }
    public function firstTermResult(Request $request)
    {
      if (Auth::user()->account_type == 'student') {
          $exam = new Exam;
          $sub = new Subject;
          $std = new Student;
          $std = $std->getClassID(Auth::user()->username);

          $result = new Result;
          return view('student.myResult', ['student' => $this->student->forUser($request->user()),
            'exams' => $result->getMyResult('1stt', Auth::user()->username),
            'exam_name' => '1st Terminal Exam',
            'subList' => $sub->subjectList($std->class_id),
            ]);
  
        }
        return redirect(url('/').'/'.Auth::user()->account_type);
    }

    public function secondTermResult(Request $request)
    {
      if (Auth::user()->account_type == 'student') {
          $result = new Result;
          return view('student.myResult', ['student' => $this->student->forUser($request->user()),
            'result' => $result->getMyResult('2ndt', Auth::user()->username),
            'exam_name' => '2nd Terminal Exam'
            ]);
  
        }
        return redirect(url('/').'/'.Auth::user()->account_type);
    }

    public function termFinalResult(Request $request)
    {
      if (Auth::user()->account_type == 'student') {
          $result = new Result;
          return view('student.myResult', ['student' => $this->student->forUser($request->user()),
            'result' => $result->getMyResult('3rdt', Auth::user()->username),
            'exam_name' => 'Term Final Exam'
            ]);
  
        }
        return redirect(url('/').'/'.Auth::user()->account_type);
    }

    public function search(Request $request)
    {

      $key_ = Input::get('q');

      $arr = array();
      $student = new Student;
      $teacher = new Teacher;

      $student = $student->search($key_);
      $teacher = $teacher->search($key_);
      foreach ($student as $key) {
        $search = new Search;
        $search->create([
          'key_' => $key_,
          'details' => $key->first_name.' '.$key->last_name.': A Student Account',
          'hlink' => '#',
        ]);
      }
      foreach ($teacher as $key) {
        $search = new Search;
        $search->create([
          'key_' => $key_,
          'details' => $key->first_name.' '.$key->last_name.': A Teacher Account',
          'hlink' => '#',
        ]);
      }

      $studyMaterial = new Study_Materials;
      $studyMaterial = $studyMaterial->search($key_);
      foreach ($studyMaterial as $key) {
        $search = new Search;
        $search->create([
          'key_' => $key_,
          'details' => $key->name.': Study Matrial of '.$key->subject_name.' uploaded on '.$key->created_at,
          'hlink' => $key->file,
        ]);
      }

      $clubevent = new Club_Event;
      $clubevent = $clubevent->search($key_);
      foreach ($clubevent as $key) {
        $search = new Search;
        $search->create([
          'key_' => $key_,
          'details' => $key->event_type.': Event of '.$key->club_name.' announced on '.$key->created_at,
          'hlink' => 'index.php/student/club/events',
        ]);
      }

      $dept = new Department;
      $dept = $dept->search($key_);
      foreach ($dept as $key) {
        $search = new Search;
        $search->create([
          'key_' => $key_,
          'details' => $key->dept_name.': Department.... Total Teachers: '.$key->total_teacher,
          'hlink' => '#',
        ]);
      }

      $clb = new Club;
      $clb = $clb->search($key_);
      foreach ($clb as $key) {
        $clbmem = new ClubMember;
        $clbmem = $clbmem->getME(Auth::user()->username, $key->club_id);
        if(count($clbmem) != 0){
          $search = new Search;
          $search->create([
          'key_' => $key_,
          'details' => $key->club_name.': Moderated By '.$key->first_name.' '.$key->last_name.'....'.'You are a '.$clbmem->membership_status,
          'hlink' => '#',
        ]);
        }
        else{
        $search = new Search;
        $search->create([
          'key_' => $key_,
          'details' => $key->club_name.': Moderated By '.$key->first_name.' '.$key->last_name.'....'.'Total Members: '.$key->total_members,
          'hlink' => '#',
        ]);
      }
      }
      if ($key_ == 'r' || $key_ == 'R' || $key_ == 'Re' || $key_ == 're' || $key_ == 'res' ||$key_ == 'resu' ||
        $key_ == 'resul' ||$key_ == 'result' ||$key_ == 'Result') {
        $search = new Search;
        $search->create([
          'key_' => $key_,
          'details' => 'Result: View Term Exam Results', 
          'hlink' => 'index.php/student/result',
        ]);
      }

      if ($key_ == 'C' || $key_ == 'c' || $key_ == 'CT' || $key_ == 'ct' || $key_ == 'Class Test' ||$key_ == 'class test' ||
        $key_ == 'class' ||$key_ == 'test' ||$key_ == 'ctest') {
        $search = new Search;
        $search->create([
          'key_' => $key_,
          'details' => 'Class Test: View Upcoming Class Tests', 
          'hlink' => 'index.php/student/class_test/upcomings',
        ]);
        $search->create([
          'key_' => $key_,
          'details' => 'Class Test: View Upcoming Class Tests', 
          'hlink' => 'index.php/student/class_test/marks',
        ]);
      }

      $searchResult = new Search;
      $temp = $searchResult->getAll($key_);
      $result = $temp;
      foreach ($temp as $t) {
        $t->delete();
      }
      return view('student.searchResult', ['student' => $this->student->forUser($request->user()),
            'result' => $result,
            ]);
    }

    public function changePassPage(Request $request){
        if (Auth::check()){
        if (Auth::user()->account_type =='student') {
            return view('student.changepassword', ['student' => $this->student->forUser($request->user()),]);
        }
        return redirect(url('/').'/'.Auth::user()->account_type);
    }
    return redirect(url('/').'/login');
    }

    public function changepassword(Request $request)
    {
      $this->validate($request, [
        'oldpassword' => 'required',
        'password' => 'required|confirmed',
      ]);
        if(Auth::check())
        {
        $userpass = Auth::user()->password;
        }
        //echo $request->password;
        //echo $request->oldpassword;
        

         
        if(\Hash::check($request->oldpassword,$userpass))
        {
            $hashed = \Hash::make($request->password);
            $user = Auth::user();
            $user->password=$hashed;
            $user->save();   
        }
        else
        {

            return redirect()->back()->with(['error'=>'Wrong Old Password']);
        }

        return view('student.redirect', [
        'msg' => 'Successfully Changed Your Password',
        'page' => 'Your Portal',
        'url' => 'student',
        'student' => $this->student->forUser($request->user()),
        ]); 

        
    }
}
