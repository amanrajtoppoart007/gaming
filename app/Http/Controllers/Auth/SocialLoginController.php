<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SocialLoginController extends Controller
{
    public function index($platform)
    {
          if($platform==="google")
          {

          }
           if($platform==="facebook")
          {

          }
    }

    public function callback($platform)
    {

    }
}
