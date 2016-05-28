<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image;
use Illuminate\Contracts\Auth\Authenticatable;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Club;
use App\Teacher;
use App\Section;
use App\Subject;
use App\Student;
use App\ClubMember;
use App\Class_Test;
use App\Notification;
use App\assigned_subject;
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

//**********************************************************************************************
//**********************************************************************************************
//******************************************  Club  ********************************************
//**********************************************************************************************
//**********************************************************************************************

    public function club(Request $request)
    {
        if (Auth::user()->account_type == 'teacher') {
            return view('teacher.club', [
                'teacher' => $this->teacher->forUser($request->user()),
                'club' => $this->club->forTeacher($request->user()),
            ]);
        }
        return redirect(url('/').'/'.Auth::user()->account_type);
    }

    public function clubAddPage(Request $request)
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
        $clubMember = new ClubMember;
        
        $std = new Student;
        $userid =  $std->getID($request->class_id, $request->section_id, $request->student_id);
        $clubMember->create([
            'member_username' => $userid->username,
            'club_id' => $request->club_id,
            'membership_status' => $request->membership_status,
        ]);
        $notif = new Notification;
        $notif->create([
          'username' => $userid->username,
          'type' => 'club',
          'hlink' => 'student/club/myclubs',
          'details' => 'You have been added to the '.$request->club_name.' by moderator',
          'uploader' => Auth::user()->username,
          'date' => date('Y-m-d'),
        ]);
    return view('teacher.redirect', [
        'msg' => 'Successfully Added a New Club Member',
        'page' => 'Club Management',
        'url' => 'teacher/club_management/view',
        'teacher' => $this->teacher->forUser($request->user()),
        ]); 
    }    

    public function viewClubMembers(Request $request){
      if (Auth::user()->account_type == 'teacher') {
            $club = $this->club->forTeacher($request->user());
            foreach ($club as $key) {
              $members = new ClubMember;
              $member = $members->getAll($key->club_id);
              return view('teacher.members', [
                'teacher' => $this->teacher->forUser($request->user()),
                'club' => $this->club->forTeacher($request->user()),
                'members' => $member
            ]);
            }
        }
        return redirect(url('/').'/'.Auth::user()->account_type); 
    }
    public function destroy1(Request $request, ClubMember $task)
    {
      $club = new Club;
      $club = $club->getClub($task->club_id);
      $this->authorize('destroy', $club);
      return view('teacher.clubedit', [
        'teacher' => $this->teacher->forUser($request->user()),
        'member' => $task,

        ]);
    }

    public function editMemberStatus(Request $request)
    { 
      $this->validate($request, [
            'new' => 'required',
      ]);
      $clubMember = new ClubMember;
      $clubMember->editMemberStatus($request->a, $request->new);
      
      $club = new Club;
      $club = $club->getClub($request->club_id);
      $notif = new Notification;
        $notif->create([
          'username' => $request->member_username,
          'type' => 'club',
          'hlink' => 'student/club/myclubs',
          'details' => 'Your membership status of '.$club->club_name.' has been updated',
          'uploader' => Auth::user()->username,
          'date' => date('Y-m-d'),
        ]);
        return view('teacher.redirect5', [
        'msg' => 'Successfully Edited a Club Member',
        'page' => 'Club Management',
        'url' => 'teacher/club_management/view',
        'teacher' => $this->teacher->forUser($request->user()),
        ]); 
    }

    public function destroy(Request $request, ClubMember $task)
    {
      $club = new Club;
      $club = $club->getClub($task->club_id);
      $this->authorize('destroy', $club);

      $notif = new Notification;
        $notif->create([
          'username' => $task->member_username,
          'type' => 'club',
          'hlink' => 'student/club/myclubs',
          'details' => 'Your membership status of '.$club->club_name.' has been removed',
          'uploader' => Auth::user()->username,
          'date' => date('Y-m-d'),
        ]);
      $task->delete();
      return view('teacher.redirect', [
        'msg' => 'Successfully Deleted a Club Member',
        'page' => 'Club Management',
        'url' => 'teacher/club_management/view',
        'teacher' => $this->teacher->forUser($request->user()),
        ]); 
    }

//**********************************************************************************************
//**********************************************************************************************
//******************************************  Club  ********************************************
//**********************************************************************************************
//**********************************************************************************************

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
      $teacher = new Teacher;
      $teacher->updateAll(Auth::user()->username, $array);  
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
      $teacher = new Teacher;
      $teacher->updateAll(Auth::user()->username, $array);  
      if ($request->email != "") {
        $user = new User;
        $user->updateEmail(Auth::user()->username, $request->email);
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

      $assigned_subject = new assigned_subject;

      $class_teacher = new Section;

      return view('teacher.activities',[
        'teacher' => $this->teacher->forUser($request->user()),
        'club' => $this->club->forTeacher($request->user()),
        'assigned_subject' => $assigned_subject->getAll(Auth::user()->username),
        'class_teacher' => $class_teacher->getClassTeacher(Auth::user()->username),
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
        $teacher = new Teacher;
        $teacher->updateProPic(Auth::user()->username, $image_name);
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
      return view('teacher.redirect', [
        'msg' => 'Successfully Changed Your Profile Picture',
        'page' => 'Your Portal',
        'url' => 'teacher',
        'teacher' => $this->teacher->forUser($request->user()),
        ]);
      
    }


//**********************************************************************************************
//**********************************************************************************************
//***************************************  Class Test  *****************************************
//**********************************************************************************************
//**********************************************************************************************


    public function classTest(Request $request){
      if (Auth::user()->account_type == 'teacher') {
        $assigned_subject = new assigned_subject;
        $upcoming = new Class_Test;
        $done = new Class_Test;
        return view('teacher.classTest', ['teacher' => $this->teacher->forUser($request->user()),
            'assigned_subject' => $assigned_subject->getAll(Auth::user()->username),
            'upcoming' => $upcoming->getUpcoming(Auth::user()->username),
            'done' => $done->getDone(Auth::user()->username)
          ]);
      }
      return redirect(url('/').'/'.Auth::user()->account_type);
    }


    public function addClassTest(Request $request){
      if (Auth::user()->account_type == 'teacher') {
        $assigned_subject = new assigned_subject;
        /*$assigned = \DB::table('assigned_subject') 
                    ->where('teacher_username', Auth::user()->username)
                    ->get();*/
        return view('teacher.addClassTest', ['teacher' => $this->teacher->forUser($request->user()),
          'assigned_subject'=>$assigned_subject->getAll(Auth::user()->username),
          'assigned' => $assigned_subject->getUnique(Auth::user()->username)
          ]);

      }
      return redirect(url('/').'/'.Auth::user()->account_type);
    }

    public function addNewClassTest(Request $request)
    {
      
    
      $this->validate($request, [
          'class_id' => 'required|max:255',
          'section_id' => 'required|max:255',
          'subject_id' => 'required|max:255',
          'date' => 'required',
          'syllabus' => 'max:255',
      ]);
      $class_test = new Class_Test;
      $class_test->create([
          'username' => $request->username,
          'class_id' => $request->class_id,
          'section_id' => $request->section_id,
          'subject_id' => $request->subject_id,
          'date' => $request->date,
          'syllabus' => $request->syllabus,
        ]);

      $subject = new Subject;
      $subjectName = $subject->getSubjectName($request->subject_id);

      $students = new Student;
      $student = $students->getAll($request->class_id, $request->section_id);
      foreach ($student as $std) {
        $notif = new Notification;
        $notif->create([
          'username' => $std->username,
          'type' => 'class_test',
          'hlink' => 'student/class_test',
          'details' => 'A New Class Test on '.$subjectName->subject_name.' is coming up on '.$request->date.'......',
          'uploader' => Auth::user()->username,
          'date' => $request->date,
        ]);
      }
      

      return view('teacher.redirect1', [
        'msg' => 'Successfully Added a New Class Test',
        'page' => 'Class Test Management',
        'url' => 'teacher/class_test',
        'teacher' => $this->teacher->forUser($request->user()),
        ]); 
      
    }
    public function editClassTest(Request $request){
      if (Auth::user()->account_type == 'teacher') {
        $class_test = new Class_Test;
        /*$assigned = \DB::table('assigned_subject') 
                    ->where('teacher_username', Auth::user()->username)
                    ->get();*/
        return view('teacher.editClassTest', ['teacher' => $this->teacher->forUser($request->user()),
          'class_test_dist'=>$class_test->getUpcomingDist(Auth::user()->username),
          'class_test'=>$class_test->getUpcoming(Auth::user()->username),
          ]);

      }
      return redirect(url('/').'/'.Auth::user()->account_type);
    }

    public function editAClassTest(Request $request)
    {
      
    
      $this->validate($request, [
          'class_id' => 'required|max:255',
          'section_id' => 'required|max:255',
          'subject_id' => 'required|max:255',
          'date' => 'required',
          'syllabus' => 'max:255',
      ]);
      $class_test = new Class_Test;
      if ($request->date != '' && $request->syllabus != '') {
        $array = array(
        'date' => $request->date,
        'syllabus' => $request->syllabus,
      );
      }
      elseif ($request->date != '') {
        $array = array(
        'date' => $request->date,
      );
      }
      elseif ($request->syllabus != '') {
        $array = array(
        'syllabus' => $request->syllabus,
      );
      }
      $class_test->updateAll(Auth::user()->username, $request->class_id, $request->section_id, $request->subject_id, $request->cd, $array);  
      $subject = new Subject;
      $subjectName = $subject->getSubjectName($request->subject_id);

      $students = new Student;
      $student = $students->getAll($request->class_id, $request->section_id);
      foreach ($student as $std) {
        $notif = new Notification;
        $notif->create([
          'username' => $std->username,
          'type' => 'class_test',
          'hlink' => 'student/class_test',
          'details' => 'A Class Test on '.$subjectName->subject_name.' has been updated ',
          'uploader' => Auth::user()->username,
          'date' => $request->date,
        ]);
      }
      return view('teacher.redirect1', [
        'msg' => 'Successfully Edited a Class Test',
        'page' => 'Class Test Management',
        'url' => 'teacher/class_test',
        'teacher' => $this->teacher->forUser($request->user()),
        ]); 
      
    }

    public function uploadClassTestMarks(Request $request)
    {
      if (Auth::user()->account_type == 'teacher') {
        $class_test = new Class_Test;
        return view('teacher.uploadMarks', ['teacher' => $this->teacher->forUser($request->user()),
          'class_done_dist'=>$class_test->getDoneDist(Auth::user()->username),
          'class_done'=>$class_test->getDone(Auth::user()->username),
          ]);

      }
      return redirect(url('/').'/'.Auth::user()->account_type);
    }

    public function uploadAClassTestMarks(Request $request)
    {
      $this->validate($request, [
          'file' => 'mimes:pdf,doc,docx,xls|required',
          'class_id' => 'required|max:255',
          'section_id' => 'required|max:255',
          'subject_id' => 'required|max:255',
          'cd' => 'required',
      ]);
      $file = $request->file('file');
      $date = date("Y-m-d-h:m:s");
      $name = $date.$file->getClientOriginalName();
      $file->move('files/', $name);
      $class_test = new Class_Test;
      $class_test->uploadMarks(($request->class_id), ($request->section_id),($request->subject_id),($request->cd),(Auth::user()->username), 'files/'.$name);
        
      $subject = new Subject;
      $subjectName = $subject->getSubjectName($request->subject_id);

      $students = new Student;
      $student = $students->getAll($request->class_id, $request->section_id);
      foreach ($student as $std) {
        $notif = new Notification;
        $notif->create([
          'username' => $std->username,
          'type' => 'class_test',
          'hlink' => 'student/class_test',
          'details' => 'Class Test Marks on '.$subjectName->subject_name.' of date '.$request->cd.' has been uploaded',
          'uploader' => Auth::user()->username,
          'date' => $request->cd,
        ]);
      }

      return view('teacher.redirect1', [
        'msg' => 'Successfully Uploaded Class Test Marks',
        'page' => 'Class Test Management',
        'url' => 'teacher/class_test',
        'teacher' => $this->teacher->forUser($request->user()),
        ]); 
    }
//**********************************************************************************************
//**********************************************************************************************
//***************************************  Class Test  *****************************************
//**********************************************************************************************
//**********************************************************************************************

    public function exam(Request $request){
      if (Auth::user()->account_type == 'teacher') {
        $date = date("Y-m-d");
        return view('teacher.exam', ['teacher' => $this->teacher->forUser($request->user()),
          'date' => $date,
          ]);
      }
      return redirect(url('/').'/'.Auth::user()->account_type);
    }

    public function firstTerminal(Request $request){
      echo "he";
    }

    public function upload(Request $request){
      if (Auth::user()->account_type == 'teacher') {
        $assigned_subject = new assigned_subject;
        return view('teacher.upload', ['teacher' => $this->teacher->forUser($request->user()),
          'classes' => $assigned_subject->getUnique(Auth::user()->username)
          ]);
      }
      return redirect(url('/').'/'.Auth::user()->account_type);

    }

    public function marks(Request $request)
    {
      $this->validate($request, [
          'file' => 'mimes:pdf,doc,docx,xls|required',
      ]);
      $file = $request->file('file');
      echo $request->class_id.$file->getMimeType();
      $date = date("Y-m-d-h:m:s");
      $name = $date.$file->getClientOriginalName();
      $file->move('img/', $name);
      echo $date;
    }

    public function doSomething($id)
    {
      $data['id'] = $id;
      //return View::make('simple', $data);
       $arr = array();
        array_push($arr, $data['id']);
        return json_encode($arr);
    }

    public function check(Request $request){
      if (\Hash::check($request->password, Auth::user()->password)) {
        echo "The passwords match...";
      }
      else {
        echo  "code...";
        return redirect()->back()->with(['error' => 'password not matched']);
      }
    }

    public function categoryDropDownData()
{

   $cat_id = Input::get('cat_id');


   $subcategories = array();

   array_push($subcategories, 'var');

   return Response::json_encode($subcategories);


}


}
