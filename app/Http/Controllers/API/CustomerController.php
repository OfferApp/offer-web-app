<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Customer;
use Auth;

class CustomerController extends Controller
{

  public $successStatus = 200;


    /**
     * login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(){
        if(Auth::attempt(['username' => request('username'), 'password' => request('password')]) ||
            Auth::attempt(['email' => request('username'), 'password' => request('password')]) ||
            Auth::attempt(['mobile' => request('username'), 'password' => request('password')])){
            $user = Auth::user();
            $verified = Auth::user()->verified;
            if($verified == 1){
              $success['token'] =  $user->createToken('OfferApp')->accessToken;
              return response()->json(['success' => $success, 'StatusCode' => $this->successStatus], $this->successStatus);
            }
            return response()->json(['error'=>'Unverified Account', 'StatusCode' => 406]);
        }
        else{
            return response()->json(['error'=>'Unauthorised', 'StatusCode' => 401], 401);
        }
    }

    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
      $errorEmail ='true';
      $errorUsername = 'true';
      $errorMobileNo = 'true';

        $validator = Validator::make($request->all(), [
          'fullname' => 'required|max:255',
          'username' => 'required|max:255|unique:users',
          'mobile' => 'required|regex:/[0-9]/',
          'email' => 'required|email|max:255|unique:users',
          'password' => 'required|min:6',
          'rpassword' => 'required|min:6|same:password',
        ]);

        if ($validator->fails()) {

          if($validator->errors()->has('email')){
            $errorEmail ='false';
          }
          if($validator->errors()->has('username')){
            $errorUsername = 'false';
          }
          if($validator->errors()->has('mobile')){
            $errorMobileNo = 'false';
          }
            return response()->json(['error'=>$validator->errors(),'errorEmail' => $errorEmail, 'errorUsername' => $errorUsername, 'errorMobileNo' => $errorMobileNo, 'StatusCode' => 401 ], 401);
        }

        $input = $request->all();
        $user = User::create([
            'username' => $input['username'],
            'email' => $input['email'],
            'mobile' =>$input['mobile'],
            'verified' => '0',
            'role_id' => '2',
            'password' => bcrypt($input['password']),
        ]);
        $customer = Customer::create([
          'fullName' => $input['fullname'],
          'profilePicture' => 'profile-picture.png',
          'user_id' => $user['id'],
        ]);
        $success['token'] =  $user->createToken('project2')->accessToken;
        $success['name'] =  $user->username;

        return response()->json(['success'=>$success, 'StatusCode' => $this->successStatus], $this->successStatus);
    }

    /**
     * details api
     *
     * @return \Illuminate\Http\Response
     */
    public function details()
    {
        $user = Auth::user();
        return response()->json(['success' => $user], $this->successStatus);
    }
}
