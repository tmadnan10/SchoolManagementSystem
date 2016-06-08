<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\User;
use App\Teacher;
use App\Student;
use App\Section;
use App\Club;
use App\Club_Event;
use App\Department;
use App\Subject;
use App\Exam;
use App\Assigned_Subject;
use App\Http\Requests;
use App\Notification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;







class AdminController extends Controller
{
    ////***********************************************************************////
    ////*****************************  Constructor  ***************************////
    ////***********************************************************************////
    public function __construct()
    {
        $this->middleware('auth');
    }

    ////***********************************************************************////
    ////*****************************  Portal Page  ***************************////
    ////***********************************************************************////
    public function index(Request $request){
        if (Auth::user()->account_type == 'admin') {
            return view('admin.adminpage');
        }
        return redirect(url('/').'/'.Auth::user()->account_type);
    	
    }

    ////***********************************************************************////
    ////************************ New User Creation Page ***********************////
    ////***********************************************************************////
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

    ////***********************************************************************////
    ////************************ New Teacher Creation  ************************////
    ////***********************************************************************////
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
        $dept = new Department;
        $dept->inc($request->dept_id);
        return view('admin.redirect', ['msg' => 'Succesfully Added A New Teacher', 
            'page' => 'Admin Portal', 'url' => 'admin'
            ]);
    }

    ////***********************************************************************////
    ////************************ New Student Creation  ************************////
    ////***********************************************************************////
    public function createStudent(Request $request)
    {
        if ($request->class_id != '' & $request->section_id != '') {
            $sec = new Section;
            $total = $sec->getTotal($request->class_id, $request->section_id)->capacity;
        }
        $newUser = new User;
        $newTeacher = new Student;
        $this->validate($request, [
            'class_id' => 'required',
            'section_id' => 'required',
            'student_id' => 'unique:student,student_id,NULL,username,class_id,'.$request->class_id.',section_id,'.$request->section_id.'|required|max:'.$total,
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
        $section = new Section;
        $section->inc($request->class_id, $request->section_id);
        /*DB::table('section')
            ->where('class_id', $request->class_id)
            ->where('section_id', $request->section_id)
            ->increment('total_students');
    */
        return view('admin.redirect', ['msg' => 'Succesfully Added A New Student', 
            'page' => 'Admin Portal', 'url' => 'admin'
            ]);
    }

    ////***********************************************************************////
    ////*************************** Club Management  **************************////
    ////***********************************************************************////
    public function clubModeratorPage(){
        if (Auth::check()) {
        if (Auth::user()->account_type == 'admin') {
          return view('admin.moderator');
        }
        return redirect(url('/').'/'.Auth::user()->account_type);
      }
      return redirect(url('/').'/login');
    }

    public function addClubModerator(Request $request){
        $this->validate($request, [
            'club_id' => 'required',
            'dept_id' => 'required',
            'username' => 'required',
        ]);
        $club = new Club;

        $club->addModerator($request->club_id, $request->username);
        $club = new Club;
        $notif = new Notification;
            $notif->create([
              'username' => $request->username,
              'type' => 'clubModerator',
              'hlink' => 'teacher/activities',
              'details' => 'You have been assigned as Moderator of '.$club->getClub($request->club_id)->club_name,
              'uploader' => Auth::user()->username,
              'date' => date('Y-m-d'),
            ]);

        return view('admin.redirect1', ['msg' => 'Succesfully Changed The Moderator of '.$club->getClub($request->club_id)->club_name, 
            'page' => 'Club Management', 'url' => 'admin/club_management'
            ]);
    }

    public function clubEventPage(){
      if (Auth::check()) {
        if (Auth::user()->account_type == 'admin') {
          return view('admin.clubNotice');
        }
        return redirect(url('/').'/'.Auth::user()->account_type);
      }
      return redirect(url('/').'/login');
    }

    public function addClubNotice(Request $request){
        $this->validate($request, [
            'club_id' => 'required',
            'type' => 'required',
            'date' => 'required',
            'notes' => 'required',
        ]);
        $clubEvent = new Club_Event;
        //echo ($request->club_id).($request->type).($request->date).($request->notes);
        $clubEvent->create([
              'club_id' => $request->club_id, 
              'event_type' => $request->type,
              'date' => $request->date, 
              'details' => $request->notes, 
              'uploader' => Auth::user()->username,
            ]);
        $club = new Club;
        $clubModerator = $club->getModerator($request->club_id)->moderator_id;
        $notif = new Notification;
            $notif->create([
              'username' => $clubModerator,
              'type' => 'clubEvent',
              'hlink' => '#',
              'details' => 'An Event has been added to '.$club->getModerator($request->club_id)->club_name,
              'uploader' => Auth::user()->username,
              'date' => date('Y-m-d'),
            ]);
        $members = $club->members($request->club_id);
        foreach ($members as $key) {
            $notif = new Notification;
            $notif->create([
              'username' => $key->member_username,
              'type' => 'clubEvent',
              'hlink' => 'student/club/events',
              'details' => 'An Event has been added to '.$club->getModerator($request->club_id)->club_name,
              'uploader' => Auth::user()->username,
              'date' => date('Y-m-d'),
            ]);
        }
        return view('admin.redirect1', ['msg' => 'Succesfully Added A New Event of '.$club->getClub($request->club_id)->club_name, 
            'page' => 'Club Management', 'url' => 'admin/club_management'
            ]);
    }

    ////***********************************************************************////
    ////************************** Teacher Management  ************************////
    ////***********************************************************************////
    
    public function subjectTeacher(Request $request){
        if (Auth::user()->account_type == 'admin') {
            return view('admin.addSubjectTeacher');
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
            $subject = new Subject;
            $notif = new Notification;
            $notif->create([
              'username' => $request->username,
              'type' => 'subjectTeacher',
              'hlink' => 'teacher/activities',
              'details' => 'You have been assigned to take '.$subject->getSubjectName($request->subject_id)->subject_name.' subject of class '.$request->class_id.' section '.$request->section_id,
              'uploader' => Auth::user()->username,
              'date' => date('Y-m-d'),
            ]);

        }
        else{
            $subject = new assigned_subject;
            $subject->setSubjectTeacher($request->class_id, $request->section_id, $request->subject_id, $request->username);
            $subject = new Subject;
            $notif = new Notification;
            $notif->create([
              'username' => $request->username,
              'type' => 'subjectTeacher',
              'hlink' => 'teacher/activities',
              'details' => 'You have been assigned to take '.$subject->getSubjectName($request->subject_id)->subject_name.' subject of class '.$request->class_id.' section '.$request->section_id,
              'uploader' => Auth::user()->username,
              'date' => date('Y-m-d'),
            ]);

            $noti = new Notification;
            $noti->create([
              'username' => $request->moderatorid,
              'type' => 'subjectTeacher',
              'hlink' => 'teacher/activities',
              'details' => 'You have been released from taking class on '.$subject->getSubjectName($request->subject_id)->subject_name.' subject of class '.$request->class_id.' section '.$request->section_id,
              'uploader' => Auth::user()->username,
              'date' => date('Y-m-d'),
            ]);

            /*DB::table('assigned_subject')
            ->where('class_id', $request->class_id)
            ->where('section_id', $request->section_id)
            ->where('subject_id', $request->subject_id)
            ->update(['teacher_username' => $request->username]);*/
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
            $section = new Section;
            $section->setClassTeacher($request->class_id1, $request->section_id1, $request->username1);
        if ($request->moderator2 == '') {
            
            $subject = new Subject;
            $notif = new Notification;
            $notif->create([
              'username' => $request->username1,
              'type' => 'classTeacher',
              'hlink' => 'teacher/activities',
              'details' => 'You have been assigned as Class Teacher of class '.$request->class_id.' section '.$request->section_id,
              'uploader' => Auth::user()->username1,
              'date' => date('Y-m-d'),
            ]);

        }
        else{
            $notif = new Notification;
            $notif->create([
              'username' => $request->username1,
              'type' => 'classTeacher',
              'hlink' => 'teacher/activities',
              'details' => 'You have been assigned as Class Teacher of class '.$request->class_id.' section '.$request->section_id,
              'uploader' => Auth::user()->username,
              'date' => date('Y-m-d'),
            ]);
            $noti = new Notification;
            $noti->create([
              'username' => $request->moderator2,
              'type' => 'classTeacher',
              'hlink' => 'teacher/activities',
              'details' => 'You have been released from Class Teacher of class '.$request->class_id.' section '.$request->section_id,
              'uploader' => Auth::user()->username,
              'date' => date('Y-m-d'),
            ]);

            /*DB::table('assigned_subject')
            ->where('class_id', $request->class_id)
            ->where('section_id', $request->section_id)
            ->where('subject_id', $request->subject_id)
            ->update(['teacher_username' => $request->username]);*/
        }
            /*DB::table('section')
            ->where('class_id', $request->class_id1)
            ->where('section_id', $request->section_id1)
            ->update(['class_teacher' => $request->username1]);*/
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


    ////***********************************************************************////
    ////*************************** Exam Management  **************************////
    ////***********************************************************************////
    public function addNewExamPage(){
        if (Auth::check()) {
            if (Auth::user()->account_type == 'admin') {
            return view('admin.addNewExam');
        }
            return redirect(url('/').'/'.Auth::user()->account_type);
        }
        return redirect(url('/').'/login');
    }

    public function addNewExam(Request $request){
        $this->validate($request, [
            'date' => 'required',
        ]);
        $exam = new Exam;
        $today = date('m');
        if ($today<7) {
            $exam_name = '2nd Terminal Exam';  
            $exam_id = '2ndt' ;
        }
        elseif ($today<4) {
            $exam_name = '1st Terminal Exam';
            $exam_id = '1stt' ;    
        }
        elseif ($today<11) {
            $exam_name = 'Term Final Exam'; 
            $exam_id = 'ter' ; 
        }
        $exam->create([
            'exam_id' => $exam_id,
            'exam_name' => $exam_name,
            'exam_date' => $request->date,
        ]);

        $students = new Student;
      $student = $students->getEntire();
      foreach ($student as $std) {
        $notif = new Notification;
        $notif->create([
          'username' => $std->username,
          'type' => 'exam',
          'hlink' => 'student/download',
          'details' => 'Class Routine has been uploaded',
          'uploader' => Auth::user()->username,
          'date' => date('Y-m-d'),
        ]);
      }

      return view('admin.redirect', [
        'msg' => 'Successfully Announced the '.$exam_name,
        'page' => 'Your Portal',
        'url' => 'admin',
        ]); 
    }



    public function classRoutinePage(){
        if (Auth::check()) {
            if (Auth::user()->account_type == 'admin') {
                $section = new Section;
            return view('admin.classRoutinePage', ['classes' => $section->getAllClasses()]);
        }
            return redirect(url('/').'/'.Auth::user()->account_type);
        }
        return redirect(url('/').'/login');
    }

    public function classRoutineAdd(Request $request){
        $this->validate($request, [
          'file' => 'mimes:pdf,doc,docx,xls|required',
          'class_id' => 'required|max:255',
          'section_id' => 'required|max:255',
      ]);
      $file = $request->file('file');
      $date = date("Y-m-d-h:m:s");
      $name = $request->class_id.$request->section_id.$date.$file->getClientOriginalName();
      $file->move('classRoutines/', $name);
      $section = new Section;
      $section->uploadClassRoutine(($request->class_id), ($request->section_id), 'classRoutines/'.$name);


      $students = new Student;
      $student = $students->getAll($request->class_id, $request->section_id);
      foreach ($student as $std) {
        $notif = new Notification;
        $notif->create([
          'username' => $std->username,
          'type' => 'class_routine',
          'hlink' => 'student/download',
          'details' => 'Class Routine has been uploaded',
          'uploader' => Auth::user()->username,
          'date' => date('Y-m-d'),
        ]);
      }

      return view('admin.redirect1', [
        'msg' => 'Successfully Uploaded Class Routine',
        'page' => 'Your Portal',
        'url' => 'admin',
        ]); 
    }

    public function seatPlanPage(){
        if (Auth::check()) {
            if (Auth::user()->account_type == 'admin') {
                $exam = new Exam;
            return view('admin.seatPlanPage', ['exams' => $exam->getExamsForUploadSeatPlan()]);
        }
            return redirect(url('/').'/'.Auth::user()->account_type);
        }
        return redirect(url('/').'/login');
    }

    
    public function examResult(){
        if (Auth::check()) {
            if (Auth::user()->account_type == 'admin') {
                $exam = new Exam;
            return view('admin.uploadResult', ['exams' => $exam->getExamsForPublishResult()]);
        }
            return redirect(url('/').'/'.Auth::user()->account_type);
        }
        return redirect(url('/').'/login');
    }

    public function publish(Request $request)
    {
        $this->validate($request, [
          'exam' => 'required'
      ]);



        $ex = new Exam;
        $ex->announce($request->date);

        $students = new Student;
        $student = $students->getEntire();
        foreach ($student as $std) {
        $notif = new Notification;
        $notif->create([
          'username' => $std->username,
          'type' => 'seat_plan',
          'hlink' => 'student/download',
          'details' => 'Seat Plan of '.$request->exam_name.' has been uploaded',
          'uploader' => Auth::user()->username,
          'date' => date('Y-m-d'),
        ]);

        return view('admin.redirect1', [
        'msg' => 'Successfully Announced Result of '.$request->name,
        'page' => 'Your Portal',
        'url' => 'admin',
        ]);
    }
}

    public function seatPlan(Request $request)
    {
        $this->validate($request, [
          'file' => 'mimes:pdf,doc,docx,xls|required',
      ]);
      $file = $request->file('file');
      $date = date("Y-m-d-h:m:s");
      $name = $request->exam_id.$date.$file->getClientOriginalName();
      $file->move('seatPlans/', $name);
      $exam = new Exam;
      $exam->uploadSeatPlan($request->exam_id, 'seatPlans/'.$name);


      $students = new Student;
      $student = $students->getEntire();
      foreach ($student as $std) {
        $notif = new Notification;
        $notif->create([
          'username' => $std->username,
          'type' => 'seat_plan',
          'hlink' => 'student/download',
          'details' => 'Seat Plan of '.$request->exam_name.' has been uploaded',
          'uploader' => Auth::user()->username,
          'date' => date('Y-m-d'),
        ]);
      }

      return view('admin.redirect1', [
        'msg' => 'Successfully Uploaded Seat Plan',
        'page' => 'Your Portal',
        'url' => 'admin',
        ]);
    }
    public function examRoutinePage(){
        if (Auth::check()) {
            if (Auth::user()->account_type == 'admin') {
                $exam = new Exam;
            return view('admin.examRoutinePage', ['exams' => $exam->getExamsForUploadRoutine()]);
        }
            return redirect(url('/').'/'.Auth::user()->account_type);
        }
        return redirect(url('/').'/login');
    }

    public function examRoutine(Request $request)
    {
        $this->validate($request, [
          'file' => 'mimes:pdf,doc,docx,xls|required',
      ]);
      $file = $request->file('file');
      $date = date("Y-m-d-h:m:s");
      $name = $request->exam_id.$date.$file->getClientOriginalName();
      $file->move('examRoutines/', $name);
      $exam = new Exam;
      $exam->uploadRoutine($request->exam_id, 'examRoutines/'.$name);


      $students = new Student;
      $student = $students->getEntire();
      foreach ($student as $std) {
        $notif = new Notification;
        $notif->create([
          'username' => $std->username,
          'type' => 'exam_routine',
          'hlink' => 'student/download',
          'details' => 'Exam Routine of '.$request->exam_name.' has been uploaded',
          'uploader' => Auth::user()->username,
          'date' => date('Y-m-d'),
        ]);
      }

      return view('admin.redirect1', [
        'msg' => 'Successfully Uploaded Exam Routine',
        'page' => 'Your Portal',
        'url' => 'admin',
        ]);
    }

    
}
