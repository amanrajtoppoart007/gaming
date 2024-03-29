<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\SocialLogin;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
class SocialLoginController extends Controller
{
    public function index($platform)
    {
          return Socialite::driver($platform)->redirect();
    }

    public function callback($platform)
    {
        try {
               $authUser = Socialite::driver($platform)->user();
               if($authUser)
               {
                   $user = User::where(['email' => $authUser->getEmail()])->first();
                   if ($user) {
                       Auth::login($user);
                       return redirect()->route("home");
                   } else {

                       $addNew = [
                           'email'=>$authUser->getEmail(),
                           'password'=>Hash::make('password'),
                           'name'=>$authUser->getName(),
                       ];
                       $newUser = User::create($addNew);
                       SocialLogin::updateOrCreate([
                           'user_id'=>$newUser->id,
                           'platform'=>$platform,
                           'platform_id'=>$authUser->getId()
                       ]);
                       Auth::login($newUser);
                       return redirect()->route("home");

                   }
               }
               else
               {
                    return redirect()->route("login")->with("message","User not found");
               }

        }
        catch (\Exception $exception)
        {
             return redirect()->route("login")->with("message",$exception->getMessage());
        }

    }

    public function deAuthorize($platform)
    {
         return view("guest.auth.deAuthorise");
    }
}
