<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Teacher;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\StudentRepository;

class StudentController extends Controller
{
    //
    /**
     * The teacher repository instance.
     *
     * @var TeacherRepository
     */
    protected $student;

    /**
     * Create a new controller instance.
     *
     * @param  TeacherRepository  $teacher
     * @return void
     */
    public function __construct(StudentRepository $student)
    {
        $this->middleware('auth');

        $this->student = $student;
    }

    /**
     * Display teacher profile of the user.
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

}
