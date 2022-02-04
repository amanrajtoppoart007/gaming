<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{



    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('admin.auth.login');
    }


       public function login(Request $request)
    {
        $validator = Validator::make($request->all(),[
             'email' => 'required|email',
            'password' => 'required'
        ]);
        if(!$validator->fails())
        {
            if (Auth::guard('admin')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')], $request->input('remember'))) {
                return redirect()->route('admin.dashboard');
            }
            else
            {
                return redirect()->back()->with('message','Invalid credentials')->withInput($request->only('email', 'remember'));
            }
        }
        else
        {
            return redirect()->back()->withErrors($validator->errors())->withInput($request->only('email', 'remember'));
        }

    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

}
