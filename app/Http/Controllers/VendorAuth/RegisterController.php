<?php

namespace App\Http\Controllers\VendorAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\User;
use App\Mail\verified;
use Auth;


class RegisterController extends Controller
{

  use RegistersUsers;

   protected $redirectPath = 'vendor_login';
  //shows registration form to vendor
public function showRegistrationForm()
{
    return view('auth.register');
}
//Handles registration request for vendor
    public function register(Request $request)
    {
       //Validates data
        $this->validator($request->all())->validate();

       //Create vendor
        $user = $this->create($request->all());

       //Redirects vendors
        return redirect($this->redirectPath);
    }

    //Validates user's Input
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'username' => 'required|max:255|unique:users',
            'mobile_no' => 'required|regex:/[0-9]/',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6',
            'rpassword' => 'required|min:6|same:password',
        ]);
    }

    //Create a new vendor instance after a validation.
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'username' => $data['username'],
            'email' => $data['email'],
            'mobile' => $data['mobile_no'],
            'verified' => '0',
            'role_id' => '1',
            'password' => bcrypt($data['password']),
        ]);

        // $vendor = Vendor::create([
        //
        // ]);
        // return $user;

    }

    protected function guard()
   {
       return Auth::guard('web_vendor');
   }

}
