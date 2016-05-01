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

use Illuminate\Support\Facades\Input;
use App\Http\Controllers\AdminController;

Route::group(['middleware' => ['web']], function () {

    Route::get('/', function () {
        return view('welcome');
    })->middleware('guest');


    Route::auth();


    Route::get('/home', function(){
    	return view('home');
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

  

    Route::get('/teacher', 'TeacherController@index');
    Route::get('teacher/club', 'TeacherController@club');
/*
    Route::get('/ajax-subcat', function(){
        $cat_id = Input::get('cat_id');
        $section = Class::where('class_id', '=', $cat_id);
        return Response::json($section);
    });
*/
Route::get('/api/dropdown={id}', function($id){
    $arr = array();
    
    

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

    Route::get('/student', 'StudentController@index');

    Route::get('/tasks', 'TaskController@index');
    Route::post('/task', 'TaskController@store');
    Route::delete('/task/{task}', 'TaskController@destroy');








    Route::get('/temp', function(){
        //AdminController::set('hello');
        //return redirect(url('/').'/temp1')->with(['info' => 'success']);
        return view('temp');
    });

    Route::post('/temp','AdminController@set');

    Route::get('/temp1', function(){
        return view('temp1', ['info' => session('none'), 'info1' => session('ntwo')]);
    });
    Route::post('/temp1', 'AdminController@get');

});
