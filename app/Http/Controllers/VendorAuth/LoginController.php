<?php

namespace App\Http\Controllers\VendorAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;

//Auth facade
use Auth;


class LoginController extends Controller
{
  //Where to redirect seller after login.
    protected $redirectTo = '/';

  //Trait
  use AuthenticatesUsers;

  //Custom guard for vendor
    protected function guard()
    {
      return Auth::guard('web_vendor');
    }

    //Shows vendor login form
   public function showLoginForm()
   {
       return view('auth.login');
   }

   public function verified(Request $request)
   {
     $user = User::where('id',$request['id'])->first();
     $user->verified = 'true';
     $user->save();
     return view('emails.afterVerified');
   }

}
