<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Auth;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';
    protected $username = 'username';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
            'account_type' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'password' => bcrypt($data['password']),
            'account_type' => $data['account_type'],
        ]);
    }

    /**
     * Create a new user.
     *
     * @param  Request  $request
     * @return Response
     */
    
/*
    public function postLogin(Request $request)
{  
    // get our login input
    $login = $request->input('login');
    // check login field
    $login_type = filter_var( $login, FILTER_VALIDATE_EMAIL ) ? 'email' : 'username';
    // merge our login field into the request with either email or username as key
    $request->merge([ $login_type => $login ]);
    // let's validate and set our credentials
    if ( $login_type == 'email' ) {
        $this->validate($request, [
            'email'    => 'required|email',
            'password' => 'required',
        ]);
        $credentials = $request->only( 'email', 'password' );
    } else {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);
        $credentials = $request->only( 'username', 'password' );
    }
    if ($this->auth->attempt($credentials, $request->has('remember')))
    {
        return redirect()->intended($this->redirectPath());
    }
    return redirect($this->loginPath())
        ->withInput($request->only('login', 'remember'))
        ->withErrors([
            'login' => $this->getFailedLoginMessage(),
        ]);
    }*/
    /*
    public function authenticate()
    {
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }
    }*/

}
