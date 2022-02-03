<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    public function register(RegisterRequest $request)
    {
        try {
            if ($this->create($request->validated())) {
                Auth::guard()->attempt(['email' => $request->input('email'), 'password' => $request->input('password')], $request->input('remember'));
                if ($request->ajax()) {
                    $result = ["status" => 1, "response" => "success", "message" => "User created successfully"];
                    return response()->json($result, 200);
                } else {
                    return redirect()->route('dashboard');
                }
            } else {

                if ($request->ajax()) {
                    $result = ["status" => 0, "response" => "error", "message" => "Account creation failed,please try again"];
                    return response()->json($result, 200);
                } else {
                    return redirect()->back()->with('message', 'Invalid credentials')->withInput($request->only('email', 'remember'));
                }

            }
        }
        catch (\Exception $exception)
        {
            if($request->ajax())
            {
                $result = ["status" => 0, "response" => "exception_error", "message" =>$exception->getMessage()];
                return response()->json($result, 200);
            }
            else
            {
                 return redirect()->back()->with('message', $exception->getMessage())->withInput($request->only('email', 'remember'));
            }

        }

    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
