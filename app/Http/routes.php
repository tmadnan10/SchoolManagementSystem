<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
//use Intervention\Image\Facades\Image as Image;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\AdminController;

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('welcome1');
    })->middleware('guest');


    Route::auth();


    Route::get('/home', function(){
        return view('welcome');
    });






    Route::get('/admin', 'AdminController@index');
    Route::get('/addnew', function(){
        if (Auth::check()){
        if (Auth::user()->account_type =='admin') {
            return view('admin.addnewuser');
        }
        return redirect(url('/').'/'.Auth::user()->account_type);
    }
    return redirect(url('/').'/login');
    });

    Route::post('/addnew', 'AdminController@createUser');
    Route::get('/addnew/teacher', function(){
        if (Auth::check()){
            if (Auth::user()->account_type =='admin') {
                return view('admin.addteacher', ['userName' => session('userName'), 'passWord' => session('passWord'), 'account' => session('account')]);
        }
        return redirect(url('/').'/'.Auth::user()->account_type);
    }
        return redirect(url('/').'/login');
    });
    Route::post('/addnew/teacher', 'AdminController@createTeacher');


    Route::get('/teacher_management', function(){
      if (Auth::check()) {
        if (Auth::user()->account_type == 'admin') {
          return view('admin.teachermanagement');
        }
        return redirect(url('/').'/'.Auth::user()->account_type);
      }
      return redirect(url('/').'/login');
    });

    Route::get('admin/exam_management', function(){
      if (Auth::check()) {
        if (Auth::user()->account_type == 'admin') {
          return view('admin.exammanagement');
        }
        return redirect(url('/').'/'.Auth::user()->account_type);
      }
      return redirect(url('/').'/login');
    });

    
/**************************** start ******************************
************************  Club Management  ***********************
*****************************************************************/

    Route::get('admin/club_management', function(){
      if (Auth::check()) {
        if (Auth::user()->account_type == 'admin') {
          return view('admin.club_management');
        }
        return redirect(url('/').'/'.Auth::user()->account_type);
      }
      return redirect(url('/').'/login');
    });    

    Route::get('admin/club_management/moderator', 'AdminController@clubModeratorPage');



    Route::get('admin/club_management/notices', 'AdminController@clubEventPage');

    Route::get('/api/dept=', function(){
      $arr = array();
      array_push($arr, '');
        echo json_encode($arr);
    });

        Route::get('/api/department=', function(){
      $arr = array();
      array_push($arr, '');
        echo json_encode($arr);
    });

    Route::get('/admin/club_id={id}', function($id){
      $arr = array();
      $username = \DB::table('club')
                ->select('moderator_id')
                ->where('club_id', $id)
                ->get();

        $moderator = null;
        foreach ($username as $key) {
            $moderator = \DB::table('teacher')
                ->select('first_name', 'last_name')
                ->where('username', $key->moderator_id)
                ->get();
        }
        foreach ($moderator as $key) {

            array_push($arr, $key->first_name." ".$key->last_name);
        }
        
        echo json_encode($arr);
    });


    Route::get('/admin/club_id=', function(){
      $arr = array();
      array_push($arr, '');
        echo json_encode($arr);
    });

    Route::get('/teacher=={id}={id2}', function($id,$id2){
          $arr = array();
      array_push($arr, '');
        echo json_encode($arr);
    });

    Route::get('/teachers={id}', function($id){
        $arr = array();
        $dept = \DB::table('subject')
                ->where('subject_id', $id)
                ->get();
        $teacher = null;
        foreach ($dept as $key) {
            $teacher = \DB::table('teacher')
                        ->where('dept_id', $key->dept_id)
                        ->get();
        }
        foreach ($teacher as $key) {
            $name = $key->first_name." ".$key->last_name;
            array_push($arr, $key->username);
            array_push($arr, $name);
        }
        echo json_encode($arr);
    });

    Route::get('/teachers=', function(){
          $arr = array();
      array_push($arr, '');
        echo json_encode($arr);
    });

    Route::get('/teacher={id}={id1}={id2}', function($id,$id1,$id2){
    $arr = array();
     $username = \DB::table('assigned_subject')
                ->select('teacher_username')
                ->where('subject_id', $id)
                ->where('class_id', $id1)
                ->where('section_id', $id2)
                ->get();

        $teacher = null;
        if (count($username)) {
            foreach ($username as $key) {
                $teacher = \DB::table('teacher')
                            ->where('username', $key->teacher_username)
                            ->get();
            }
        }
        if (count($teacher)) {
            foreach ($teacher as $key) {
                $name = $key->first_name." ".$key->last_name;
                array_push($arr, $key->username);array_push($arr, $name);

            }
        }
        echo json_encode($arr);
    });



    Route::get('/api/dept={id}', function($id){
        $arr = array();

        $teacher = \DB::table('teacher')
                ->select('username', 'first_name', 'last_name')
                ->where('dept_id', $id)
                ->get();
        if (count($teacher) != 0) {
            array_push($arr, 'Select A Teacher');
            foreach ($teacher as $subcat) {
                $name = $subcat->first_name." ".$subcat->last_name;
            array_push($arr, $subcat->username);
            array_push($arr, $name);
        }

        }
        echo json_encode($arr);
    });

    Route::get('/api/department={id}', function($id){
        $arr = array();

        $teacher = \DB::table('teacher')
                ->select('username', 'first_name', 'last_name')
                ->where('dept_id', $id)
                ->get();

        if (count($teacher) != 0) {
            array_push($arr, 'Select A Teacher');
            foreach ($teacher as $subcat) {
                $mod = NULL;
                $mod = \DB::table('club')
                ->select('moderator_id')->where('moderator_id', $subcat->username)
                ->get();
                if ($mod == NULL) {
                    $name = $subcat->first_name." ".$subcat->last_name;
                    array_push($arr, $subcat->username);
                    array_push($arr, $name);
                }
                
        }

        }
        echo json_encode($arr);
    });




    Route::get('/admin/subject_id=', function(){
      $arr = array();
      array_push($arr, '');
        echo json_encode($arr);
    });

    Route::get('/class_teacher={id}={id1}', function($id,$id1){
        $arr = array();
        $class_teacher = \DB::table('section')
                        ->where('class_id', $id)
                        ->where('section_id', $id1)
                        ->get();
                        /*
        foreach ($class_teacher as $key) {
            $array = array();

            array_push($array, $key->first_name." ".$key->last_name);
            echo json_encode($array);
        }*/
        if (count($class_teacher)) {
            foreach ($class_teacher as $key) {
                $username = $key->class_teacher;
                $teacher = \DB::table('teacher')
                        ->where('username', $username)
                        ->get();
                foreach ($teacher as $key) {
                    array_push($arr, $key->first_name." ".$key
                        ->last_name);
                    array_push($arr, $key->username);
                }
                
            }
        }
        echo json_encode($arr);
    });

    Route::get('/teacher_list={id}={id1}', function($id,$id1){
        $arr = array();
        $class_teacher = \DB::table('assigned_subject')
                        ->where('class_id', $id)
                        ->where('section_id', $id1)
                        ->get();

        if (count($class_teacher)) {
            foreach ($class_teacher as $key) {
                $username = $key->teacher_username;
                $teacher = \DB::table('teacher')
                        ->where('username', $username)
                        ->get();
                foreach ($teacher as $key) {
                    array_push($arr, $key->username);
                    array_push($arr, $key->first_name." ".$key
                        ->last_name);
                }
                
            }
        }
        echo json_encode($arr);
    });

    Route::get('/admin/exam/addnew', 'AdminController@addNewExamPage');
    Route::post('/addexam', 'AdminController@addNewExam');
    Route::post('/addclubmoderator', 'AdminController@addClubModerator');
    Route::post('/addclubnotice' ,'AdminController@addClubNotice');
    Route::delete('/deletemember/{task}', 'TeacherController@destroy');
    Route::delete('/deletemember1/{task}', 'TeacherController@destroy1');
    Route::post('/edit', 'TeacherController@editMemberStatus');
    Route::get('/admin/class_routine', 'AdminController@classRoutinePage');
    Route::post('/admin/class_routine', 'AdminController@classRoutineAdd');
    Route::get('/admin/exam/seat', 'AdminController@seatPlanPage');
    Route::post('/seatplan', 'AdminController@seatPlan');
    Route::get('/admin/exam/rout', 'AdminController@examRoutinePage');
    Route::post('/routine', 'AdminController@examRoutine');
    Route::get('/admin/resultpublish', 'AdminController@examResult');
    Route::post('/publish', 'AdminController@publish');

/**************************** end ******************************
************************  Club Management  ***********************
*****************************************************************/
    
    Route::get('/teacher_management/st', 'AdminController@subjectTeacher');
    Route::get('/teacher_management/ct', 'AdminController@classTeacher');    

    Route::post('/teacher_management/st', 'AdminController@addSubjectTeacher');
    Route::post('/teacher_management/ct', 'AdminController@addClassTeacher');


    Route::get('/addnew/student', function(){
        if (Auth::check()){
            if (Auth::user()->account_type =='admin') {
                return view('admin.addstudent', ['userName' => session('userName'), 'passWord' => session('passWord'), 'account' => session('account')]);
            }
            return redirect(url('/').'/'.Auth::user()->account_type);
        }
        return redirect(url('/').'/login');
    });
    Route::post('/addnew/student', 'AdminController@createStudent');



/********************************************************************************
*********************************************************************************
*
********************************  Teacher Part  *********************************
*
*********************************************************************************
*********************************************************************************/







    Route::get('/teacher', 'TeacherController@index');

    Route::get('/teacher/edit', 'TeacherController@edit');
    Route::post('/teacher/edit', 'TeacherController@editData');

    Route::post('/student/firstedit', 'StudentController@firstEdit');
    Route::get('/teacher/class_test', 'TeacherController@classTest');

    Route::get('/teacher/class_test/addClassTest', 'TeacherController@addClassTest');
    Route::post('/teacher/class_test/addClassTest', 'TeacherController@addNewClassTest');

    Route::get('/teacher/class_test/editClassTest', 'TeacherController@editClassTest');
    Route::post('/teacher/class_test/editClassTest', 'TeacherController@editAClassTest');

    Route::get('/ctedit={id}={id1}={id2}', function($id,$id1,$id2){
    $arr = array();
    $today = date('Y-m-d');
     $username = \DB::table('class_test')
                ->select('date','syllabus')
                ->where('class_id', $id)
                ->where('section_id', $id1)
                ->where('subject_id', $id2)
                ->where('date', '>', $today)
                ->get();

        /*$teacher = null;
        if (count($username)) {
            foreach ($username as $key) {
                $teacher = \DB::table('teacher')
                            ->where('username', $key->teacher_username)
                            ->get();
            }
        }
        if (count($teacher)) {
            foreach ($teacher as $key) {
                $name = $key->first_name." ".$key->last_name;
                array_push($arr, $name);
            }
        }*/

        if (count($username)) {
            foreach ($username as $key) {
                
                array_push($arr, $key->date);
                array_push($arr, $key->syllabus);
            }
        }        

        echo json_encode($arr);
    });

Route::get('/ctedit2={id}={id1}={id2}', function($id,$id1,$id2){
    $arr = array();
    $today = date('Y-m-d');
     $username = \DB::table('class_test')
                ->select('date','syllabus')
                ->where('class_id', $id)
                ->where('section_id', $id1)
                ->where('subject_id', $id2)
                ->where('date', '<', $today)
                ->get();

        /*$teacher = null;
        if (count($username)) {
            foreach ($username as $key) {
                $teacher = \DB::table('teacher')
                            ->where('username', $key->teacher_username)
                            ->get();
            }
        }
        if (count($teacher)) {
            foreach ($teacher as $key) {
                $name = $key->first_name." ".$key->last_name;
                array_push($arr, $name);
            }
        }*/

        if (count($username)) {
            foreach ($username as $key) {
                
                array_push($arr, $key->date);
                array_push($arr, $key->syllabus);
            }
        }        

        echo json_encode($arr);
    });


    Route::get('/ctedit={id}={id1}=', function($id,$id1){
    $arr = array();
     array_push($arr, '');

        echo json_encode($arr);
    });

    Route::get('/ctedit1={id}={id1}={id2}={id3}', function($id,$id1,$id2,$id3){
    $arr = array(); 
    $today = date('Y-m-d');
    
    $str1 = substr($id3, 0, 4);
    $str2 = substr($id3, 4, 2);
    $str3 = substr($id3, 6, 2);
    $date = $str1.'-'.$str2.'-'.$str3;
    //array_push($arr, $date);
    //echo $date;
     $username = \DB::table('class_test')
                ->select('date','syllabus')
                ->where('class_id', $id)
                ->where('section_id', $id1)
                ->where('subject_id', $id2)
                ->where('date', $date)
                ->where('date', '>', $today)
                ->get();

        /*$teacher = null;
        if (count($username)) {
            foreach ($username as $key) {
                $teacher = \DB::table('teacher')
                            ->where('username', $key->teacher_username)
                            ->get();
            }
        }
        if (count($teacher)) {
            foreach ($teacher as $key) {
                $name = $key->first_name." ".$key->last_name;
                array_push($arr, $name);
            }
        }*/

        if (count($username)) {
            foreach ($username as $key) {
                array_push($arr, $key->syllabus);
            }
        }        

        echo json_encode($arr);
    });

Route::get('/ctedit3={id}={id1}={id2}={id3}', function($id,$id1,$id2,$id3){
    $arr = array(); 
    $today = date('Y-m-d');
    
    $str1 = substr($id3, 0, 4);
    $str2 = substr($id3, 4, 2);
    $str3 = substr($id3, 6, 2);
    $date = $str1.'-'.$str2.'-'.$str3;
    //array_push($arr, $date);
    //echo $date;
     $username = \DB::table('class_test')
                ->select('date','syllabus')
                ->where('class_id', $id)
                ->where('section_id', $id1)
                ->where('subject_id', $id2)
                ->where('date', $date)
                ->where('date', '<', $today)
                ->get();

        /*$teacher = null;
        if (count($username)) {
            foreach ($username as $key) {
                $teacher = \DB::table('teacher')
                            ->where('username', $key->teacher_username)
                            ->get();
            }
        }
        if (count($teacher)) {
            foreach ($teacher as $key) {
                $name = $key->first_name." ".$key->last_name;
                array_push($arr, $name);
            }
        }*/

        if (count($username)) {
            foreach ($username as $key) {
                array_push($arr, $key->syllabus);
            }
        }        

        echo json_encode($arr);
    });

    Route::get('/ctedit1={id}={id1}={id2}=', function($id,$id1,$id2){
        $arr = array();
        array_push($arr, '');

        echo json_encode($arr);
    });
    Route::get('/teacher/class_test/uploadMarks', 'TeacherController@uploadClassTestMarks');
    Route::post('/teacher/class_test/uploadMarks', 'TeacherController@uploadAClassTestMarks');
    Route::get('teacher/club', 'TeacherController@club');


    /*
        Route::get('/ajax-subcat', function(){
            $cat_id = Input::get('cat_id');
            $section = Class::where('class_id', '=', $cat_id);
            return Response::json($section);
        });
    */

    //$.get("{{ url('/ct')}}=" + class_id + "=" + username, function(data){
    Route::get('/ct={id}={id1}', function($id, $id1){
        $arr = array();

        if ($id == '') {
          $id = -1;
        }

        $sub = \DB::table('assigned_subject')
                ->select('section_id')
                ->where('class_id', $id)
                ->where('teacher_username', $id1)
                ->orderBy('section_id', 'asc')
                ->get();
        if (count($sub) != 0) {
            array_push($arr, 'Select A Section');
            foreach ($sub as $subcat) {
                array_push($arr, $subcat->section_id);
            }

        }
        echo json_encode($arr);
    });

    Route::get('/ct/sub={id}={id1}={id2}', function($id, $id1,$id2){
        $arr = array();

        if ($id == '') {
          $id = -1;
        }

        $sub = \DB::table('assigned_subject')
                ->select('subject_id')
                ->where('class_id', $id)
                ->where('section_id', $id1)
                ->where('teacher_username', $id2)
                ->get();
        if (count($sub) != 0) {
            //array_push($arr, 'Select A Section');
            foreach ($sub as $subcat) {
                array_push($arr, $subcat->subject_id);
                $name = \DB::table('subject')
                        ->select('subject_name')
                        ->where('subject_id', $subcat->subject_id)
                        ->first();
                array_push($arr, $name->subject_name);
            }

        }
        echo json_encode($arr);
    });

    Route::get('/api/dropdown={id}', function($id){
        $arr = array();

        if ($id == '') {
          $id = -1;
        }

        $sub = \DB::table('section')
                ->select('section_id')
                ->where('class_id', $id)
                ->get();
        if (count($sub) != 0) {
            array_push($arr, 'Select A Section');
            foreach ($sub as $subcat) {
            array_push($arr, $subcat->section_id);
        }

        }
        echo json_encode($arr);
    });



    Route::get('/api/dropdown=', function(){
      $arr = array();
      array_push($arr, '');
        echo json_encode($arr);
    });

    Route::get('/api/dropdown/steacher={id}', function($id){
        $arr = array();

        if ($id == '') {
          $id = 0;
        }

        $sub = \DB::table('subject')
                ->select('subject_id', 'subject_name')
                ->where('subject_id', 'like', $id.'%')
                ->get();
        if (count($sub) != 0) {
            //array_push($arr, 'Select A Subject');
            foreach ($sub as $subcat) {
            array_push($arr, $subcat->subject_id);
            array_push($arr, $subcat->subject_name);
        }

        }
        echo json_encode($arr);
    });


    Route::get('/api/dropdown/steacher=', function(){
      $arr = array();
      array_push($arr, '');
        echo json_encode($arr);
    });

    Route::post('/teacher/club', 'TeacherController@addClubMember');

    Route::get('/teacher/changepass','TeacherController@changePassPage');
    Route::get('/student/changepass','StudentController@changePassPage');

    Route::post('/teacher/passchange', 'TeacherController@changepassword');

     Route::get('/teacher/activities', 'TeacherController@myActivities');
    ////////////////////////////////////////////////////////////////////////////////////
    Route::get('/teacher/assignedclasses', 'TeacherController@assignedclasses');
    ////////////////////////////////////////////////////////////////////////////
    Route::get('/teacher/exam', 'TeacherController@exam');
    Route::get('/teacher/uploadResult', 'TeacherController@uploadResult');
    Route::post('/teacher/uploadResult/results', 'TeacherController@resultUploadPage');
    Route::post('/teacher/addResults', 'TeacherController@addMarks');
    Route::get('/teacher/changepropic', 'TeacherController@changeProPic');
    Route::post('/teacher/changepropic', 'TeacherController@changeMyProPic');
    Route::get('/1stTerminal', 'TeacherController@firstTerminal');

    Route::get('/teacher/upload', 'TeacherController@upload');
    Route::post('/teacher/files', 'TeacherController@files');

    Route::get('/ct/ct={id}={id1}', function($id, $id1){
        $arr = array();
        $today = date('Y-m-d');
        if ($id == '') {
          $id = -1;
        }

        $sub = \DB::table('class_test')
                ->where('class_id', $id)
                ->where('username', $id1)
                ->where('date', '>', $today)
                ->orderBy('section_id', 'asc')
                ->distinct()->get();
        if (count($sub) != 0) {
            array_push($arr, 'Select A Section');
            foreach ($sub as $subcat) {
                $flag = 1;
                foreach ($arr as $key) {
                    if ($key == $subcat->section_id) {
                        $flag = 0;
                    }
                }
                
                if(($subcat->date > $today) && $flag){
                    array_push($arr, $subcat->section_id);
                }
            }

        }
        echo json_encode($arr);
    });
    Route::get('/ct/ct/sub={id}={id1}={id2}', function($id, $id1,$id2){
        $arr = array(); 
        $today = date('Y-m-d');

        if ($id == '') {
          $id = -1;
        }

        $sub = \DB::table('class_test')
                ->where('class_id', $id)
                ->where('section_id', $id1)
                ->where('username', $id2)
                ->where('date', '>', $today)
                ->get();
        if (count($sub) != 0) {
            //array_push($arr, 'Select A Section');
            foreach ($sub as $subcat) {
                $flag = 1;
                foreach ($arr as $key) {
                    if ($key == $subcat->subject_id) {
                        $flag = 0;
                    }
                }
                if($flag){
                    array_push($arr, $subcat->subject_id);
                    $name = \DB::table('subject')
                        ->select('subject_name')
                        ->where('subject_id', $subcat->subject_id)
                        ->first();
                    array_push($arr, $name->subject_name);
                }         
            }
        }
        echo json_encode($arr);
    });

    Route::get('/new={id}={id1}={id2}', function($id, $id1,$id2){
        $arr = array(); 
        $today = date('Y-m-d');

        if ($id == '') {
          $id = -1;
        }

        $sub = \DB::table('class_test')
                ->where('class_id', $id)
                ->where('section_id', $id1)
                ->where('username', $id2)
                ->where('date', '<', $today)
                ->get();
        if (count($sub) != 0) {
            //array_push($arr, 'Select A Section');
            foreach ($sub as $subcat) {
                $flag = 1;
                foreach ($arr as $key) {
                    if ($key == $subcat->subject_id) {
                        $flag = 0;
                    }
                }
                if($flag){
                    array_push($arr, $subcat->subject_id);
                    $name = \DB::table('subject')
                        ->select('subject_name')
                        ->where('subject_id', $subcat->subject_id)
                        ->first();
                    array_push($arr, $name->subject_name);
                }         
            }
        }
        echo json_encode($arr);
    });

    Route::get('/study={id}', function($id){
        $arr = array();

        if ($id == '') {
          $id = 0;
        }

        $sub = \DB::table('assigned_subject')
                ->where('teacher_username', Auth::user()->username)
                ->where('class_id', $id)
                ->get();
        if (count($sub) != 0) {
            array_push($arr, 'Select A Subject');
            foreach ($sub as $subcat) {
            array_push($arr, $subcat->section_id);
        }

        }
        echo json_encode($arr);
    });

    Route::get('/study=', function(){
        $arr = array();

        array_push($arr, '');
        
        echo json_encode($arr);
    });

    Route::get('/study1={id}={id1}', function($id, $id1){
        $arr = array();

        if ($id == '') {
          $id = 0;
        }

        $sub = \DB::table('assigned_subject')
                ->select('subject_id')
                ->where('teacher_username', Auth::user()->username)
                ->where('class_id', $id)
                ->where('section_id', $id1)
                ->get();
        if (count($sub) != 0) {
            foreach ($sub as $subcat) {
            array_push($arr, $subcat->subject_id);
            $s = \DB::table('subject')
                ->select('subject_name')
                ->where('subject_id', $subcat->subject_id)
                ->first();
                array_push($arr, $s->subject_name);
        }

        }
        echo json_encode($arr);
    });

    Route::get('/study=', function(){
        $arr = array();

        array_push($arr, '');
        
        echo json_encode($arr);
    });

    Route::get('api/category-dropdown', 'TeacherController@categoryDropDownData');


    Route::get('/teacher/club_management/view', 'TeacherController@viewClubMembers');
    Route::get('/teacher/club_management/add', 'TeacherController@clubAddPage');
    Route::get('/teacher/club_management/notices', 'TeacherController@clubEventPage');
    Route::post('/teacher/club_management/notices', 'TeacherController@addClubNotice');
    Route::get('/teacher/notification', 'TeacherController@notification');
    Route::get('teacher/notifi={id}', function($id){
        //echo "     ".($id);
        DB::table('notification')
            ->where('id', $id)
            ->update(['view' => 1]);
        $not = DB::table('notification')
            ->where('id', $id)
            ->first();
        $hlink = $not->hlink;
        $hlink = (url('/')).'/'.$hlink;
        return redirect($hlink);
    });
    Route::get('/teacher/notices', 'TeacherController@notices');
    Route::get('/teacher/club_management/show', 'TeacherController@myClubEvent');


/********************************************************************************
*********************************************************************************
*                                                                               *
********************************  Student Part  *********************************
*                                                                               *             
*********************************************************************************
*********************************************************************************/


    Route::get('/student', 'StudentController@index');
    Route::post('/student/firstedit', 'StudentController@firstEdit');

    Route::get('/student/edit', 'StudentController@edit');
    Route::post('/student/edit', 'StudentController@editData');

    Route::get('student/notification', 'StudentController@notification');
    
    Route::get('student/notifi={id}', function($id){
        //echo "     ".($id);
        DB::table('notification')
            ->where('id', $id)
            ->update(['view' => 1]);
        $not = DB::table('notification')
            ->where('id', $id)
            ->first();
        $hlink = $not->hlink;
        $hlink = (url('/')).'/'.$hlink;
        return redirect($hlink);
    });

    Route::get('/student/club', 'StudentController@clubs');


    Route::get('/student/changepropic', 'StudentController@changeProPic');
    Route::post('/student/changepropic', 'StudentController@changeMyProPic');
    Route::get('/student/club/events', 'StudentController@myClubEvent');
    Route::get('/student/club/myclubs', 'StudentController@myAllClubs');
    Route::get('/student/download', 'StudentController@downloadPage');
    Route::get('/student/download/study_materials', 'StudentController@studyMaterialPage');
    Route::get('/student/class_test', 'StudentController@classTestPage');
    Route::get('/student/class_test/upcomings', 'StudentController@upcomingCTs');
    Route::get('/student/class_test/marks', 'StudentController@CTMarks');
    Route::get('/student/download/class_routine', 'StudentController@classRoutineDownload');
    Route::get('/student/result', 'StudentController@result');
    Route::get('student/firstTerminal', 'StudentController@firstTermResult');
    Route::get('student/secondTerminal', 'StudentController@secondTermResult');
    Route::get('student/termFinal', 'StudentController@termFinalResult');

    Route::get('/tasks', 'TaskController@index');
    Route::post('/task', 'TaskController@store');
    Route::delete('/delete/{task}', 'TeacherController@destroy');




    Route::get('/pass', function(){
        return view('temp11');
    });
    Route::post('/pa', 'TeacherController@check');




    Route::get('/temp', function(){
        //AdminController::set('hello');
        //return redirect(url('/').'/temp1')->with(['info' => 'success']);
        return view('student.welcome1');
    });

    Route::post('/temp','AdminController@set');

    Route::get('/temp1', function(){
        return view('temp1', ['info' => session('none'), 'info1' => session('ntwo')]);
    });
    Route::post('/temp1', 'AdminController@get');

    Route::post('/search', 'StudentController@search');

});
