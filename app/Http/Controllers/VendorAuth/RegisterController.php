<?php

namespace App\Http\Controllers\VendorAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\User;
use App\Vendor;
use App\Customer;
use App\Mail\verified;
use Auth;
use Mail;


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

         //dd($data);

       //Create vendor
        $user = $this->create($request->all());

      //Verify the vendor

        Mail::to($user)->send(new verified($user));

       //Redirects vendors
        return redirect($this->redirectPath);
    }

    //Validates user's Input
    protected function validator(array $data)
    {
        $type = $data['type'];
        // dd($data);
        if ($type == 'vendor') {
          return Validator::make($data, [
              'name' => 'required|max:255',
              'username' => 'required|max:255|unique:users',
              'shopName' => 'required|max:255',
              'address' => 'required|max:255',
              'zipCode' => 'required|min:6|max:6|regex:/[0-9]/',
              'website' => 'required|max:255',
              'mobile_no' => 'required|min:10|max:10|regex:/[0-9]/',
              'email' => 'required|email|max:255|unique:users',
              'password' => 'required|min:6',
              'rpassword' => 'required|min:6|same:password',
          ]);
        }
        else if($type == 'customer')
        {
          return Validator::make($data, [
              'name' => 'required|max:255',
              'username' => 'required|max:255|unique:users',
              'email' => 'required|email|max:255|unique:users',
              'password' => 'required|min:6',
              'rpassword' => 'required|min:6|same:password',
          ]);
        }


    }

    //Create a new vendor instance after a validation.
    protected function create(array $data)
    {

        $type = $data['type'];
        if ($type == 'vendor') {
          $role_id = '1';
          $user =  User::create([
              'username' => $data['username'],
              'email' => $data['email'],
              'mobile' => $data['mobile_no'],
              'verified' => 'false',
              'role_id' => $role_id,
              'password' => bcrypt($data['password']),
          ]);

          $vendor = Vendor::create([
            'fullName' => $data['name'],
            'shopName' => $data['shopName'],
            'shopAddress' => $data['address'],
            'shopContactNo' => $data['mobile_no'],
            'website' => $data['website'],
            'xCoordinate' => '18.23',
            'yCoordinate' => '17.85',
            'zipCode' => $data['zipCode'],
            'vendorLogo' => '/Upload/images/profile-picture.png',
            'user_id' => $user->id,
          ]);

          return $user;

        }
        if($type == 'customer')
        {
          $role_id = '2';
          $user =  User::create([
              'username' => $data['username'],
              'email' => $data['email'],
              'mobile' => $data['mobile_no'],
              'verified' => 'false',
              'role_id' => $role_id,
              'password' => bcrypt($data['password']),
          ]);

          $customer = Customer::create([
            'fullName' => $data['name'],
            'profilePicture' => '/Upload/images/profile-picture.png',
            'user_id' => $user->id,
          ]);
          return $user;


        }



    }

    protected function guard()
   {
       return Auth::guard('web_vendor');
   }

}
