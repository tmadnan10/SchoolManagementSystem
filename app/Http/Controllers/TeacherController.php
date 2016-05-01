<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    /**
     * Create a new controller instance.
     *
     * @param  TeacherRepository  $teacher
     * @return void
     */
    public function __construct(TeacherRepository $teacher, ClubRepository $club)
    {
        $this->middleware('auth');

        $this->teacher = $teacher;
        $this->club = $club;
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
            return view('teacher.club', [
                'teacher' => $this->teacher->forUser($request->user()),
                'club' => $this->club->forTeacher($request->user()),
            ]);
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
