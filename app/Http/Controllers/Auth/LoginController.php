<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */


    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view("guest.auth.login");
    }

    public function login(LoginRequest $request)
    {

        if (Auth::guard()->attempt(['email' => $request->input('email'), 'password' => $request->input('password')], $request->input('remember'))) {
            if ($request->ajax()) {
                $result = ["status" => 1, "response" => "success", "message" => "User logged in successfully"];
                return response()->json($result,200);
            } else {
                return redirect()->route('dashboard');
            }
        } else {

            if ($request->ajax()) {
                $result = ["status" => 0, "response" => "error", "message" => "Incorrect email or password"];
                 return response()->json($result,200);
            } else {
                return redirect()->back()->with('message', 'Invalid credentials')->withInput($request->only('email', 'remember'));
            }

        }

    }
}
