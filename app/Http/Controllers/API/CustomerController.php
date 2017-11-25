<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Offer;
use App\User;
use App\Customer;
use App\Bookmark;
use Auth;
use DB;

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
            if($verified == true){
              $token =  $user->createToken('OfferApp')->accessToken;
              return response()->json(['token' => $token,
                                       'StatusCode' => $this->successStatus],
                                        $this->successStatus);
            }
            return response()->json(['error'=>'Unverified Account',
                                     'StatusCode' => 406]);
        }
        else{
            return response()->json(['error'=>'Unauthorised',
                                     'StatusCode' => 401], 401);
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
           'username' => 'required|max:255|unique:users,username,'.$request->id,
           'mobile' => 'required|regex:/[0-9]/|unique:users,mobile,'.$request->id,
           'email' => 'required|email|max:255|unique:users,email,'.$request->id,
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
             return response()->json(['error'=>$validator->errors(),
                                      'errorEmail' => $errorEmail,
                                      'errorUsername' => $errorUsername,
                                      'errorMobileNo' => $errorMobileNo,
                                      'StatusCode' => 401 ], 401);
         }

         $input = $request->all();
         $user = User::create([
             'username' => $input['username'],
             'email' => $input['email'],
             'mobile' =>$input['mobile'],
             'verified' => 'true',
             'role_id' => '2',
             'password' => bcrypt($input['password']),
         ]);
         $customer = Customer::create([
           'fullName' => $input['fullname'],
           'profilePicture' => '/Upload/images/profile-picture.png',
           'user_id' => $user['id'],
         ]);
         $success['token'] =  $user->createToken('project2')->accessToken;
         $success['name'] =  $user->username;

         return response()->json(['success'=>$success,
                                  'StatusCode' => $this->successStatus],
                                  $this->successStatus);
     }


    /**
     * details api
     *
     * @return \Illuminate\Http\Response
     */
    public function details()
    {

        $customer = DB::table('users')
              ->join('customers', 'users.id', '=', 'customers.user_id')
              ->select('users.id','users.username', 'customers.fullName','users.email','users.mobile','customers.profilePicture')
              ->where('user_id',Auth::user()->id)
              ->first();

        return response()->json(['id' => $customer->id,
                                 'username' => $customer->username,
                                 'name' =>$customer->fullName,
                                 'email'=> $customer->email,
                                 'number'=> $customer->mobile,
                                 'profilePic'=> '/Upload/images/'.$customer->profilePicture,
                                 'StatusCode' => $this->successStatus],
                                 $this->successStatus);
    }

    /**
    *edit profile api
    **/

    public function editProfile(Request $request)
    {
      $errorEmail ='true';
      $errorUsername = 'true';
      $errorMobileNo = 'true';

        $validator = Validator::make($request->all(), [
          'id' => 'required',
          'name' => 'required|',
          'username' => 'required|max:255|unique:users,username,'.$request->id,
          'mobile' => 'required|regex:/[0-9]/|unique:users,mobile,'.$request->id,
          'email' => 'required|email|max:255|unique:users,email,'.$request->id,
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
            return response()->json(['error'=>$validator->errors(),
                                     'errorEmail' => $errorEmail,
                                     'errorUsername' => $errorUsername,
                                     'errorMobileNo' => $errorMobileNo,
                                     'StatusCode' => 401 ], 401);
        }

        $input = $request->all();
        $user = User::where('id',$input['id'])->first();
        $user->username = $input['username'];
        $user->email = $input['email'];
        $user->mobile = $input['mobile'];
        $user->save();

        $customer = Customer::where('user_id',$input['id'])->first();
        $customer->fullName = $input['name'];
        $customer->save();
        return response()->json(['StatusCode' => $this->successStatus]);
    }

/**
*Edit Profile Picture of Customer
**/


    public function editProfilePic(Request $request)
    {
        $id = $request['id'];
        $image = base64_decode($request['data']);
        file_put_contents('Upload/images/'.time().'_'.$request['filename'], $image);

        $customer  = Customer::where('user_id',$id)->first();
        if(file_exists(public_path('Upload/images/*'.$request['filename'])))
        {
          unlink(public_path('Upload/images/*'.$request['filename']));
          }
        $customer->profilePicture = time().'_'.$request['filename'];
        $customer->save();
        return response()->json(['StatusCode' => $this->successStatus,
              'profilePic'=> '/Upload/images/'.$customer->profilePicture,]);
    }

/**
*Chande customer Password
**/

  public function setPassword(Request $request)
  {
        $errorPassword ='true';

        $validator = Validator::make($request->all(), [
          'id' => 'required',
          'password' => 'required',
          'npassword' => 'required|min:6',
          'npasswordagain' => 'required|min:6|same:npassword',
        ]);

        if ($validator->fails()) {

          if($validator->errors()->has('username')){
            $errorUsername = 'false';
          }
          if($validator->errors()->has('password')){
            $errorPassword = 'false';
          }
            return response()->json(['error'=>$validator->errors(),
                                     'errorPassword' => $errorPassword,
                                     'StatusCode' => 401 ], 401);
        }

        $id = $request['id'];
        $user= User::where('id',$id)->first();
        if(Auth::attempt(['username' => $user->username ,'password' => request('password')]) ){
            $user = Auth::user();
            $user->password = bcrypt($request['npassword']);
            $user->save();
            return response()->json(['StatusCode' => $this->successStatus]);
        }
        else{
            $error = 'Enter a Vaild Old Password';
            return response()->json(['errorPassword' => $errorPassword, 'msg' => $error]);
        }
  }

  /**
   *offers details api
   *
   * @return \Illuminate\Http\Response
   */
  public function offersDetails(Request $request)
  {

      $perPage = 5;
      $allOffers = Offer::join('vendors', 'offers.vendor_id', '=', 'vendors.id')
                  ->select('offers.id As offerId','offers.offerName','offers.offerPic', 'vendors.fullName AS offerVendor' ,'offers.offerExpiry')
                  ->where('category', $request['category'])
                  ->paginate($perPage);
      $records = [];
      foreach ($allOffers as $key => $offer) {
        $offer->offerPic = '/assets/pages/media/works/'.$offer->offerPic;
        $records[$key] = $offer;
      }
      return response()->json(['records' => $records,
                               'pagination' => [
                                'page' => $allOffers->currentPage(),
                                'perPage' => $perPage,
                                'pageCount' => $allOffers->count(),
                                'totalCount' => $allOffers->total(),
                                ],

                               'StatusCode' => $this->successStatus],
                               $this->successStatus);
  }

  /**
   *offer details by id api
   *
   * @return \Illuminate\Http\Response
   */
  public function offerByIdDetails(Request $request)
  {

      $offer = Offer::join('vendors', 'offers.vendor_id', '=', 'vendors.id')
                  ->select('offers.id As offerId','offers.offerName','offers.offerPic', 'vendors.fullName AS offerVendor' ,'offers.offerExpiry','offers.offerDescription')
                  ->where('offers.id', $request['offerId'])
                  ->first();

      $bookmark = Bookmark::where('customer_id',$request['id'])
                            ->where('offer_id',$request['offerId'])->get();
      //return $bookmark;
      if ($bookmark->isNotEmpty()) {
        $bookmark = true;
      }
      else {
        $bookmark = false;
      }
      return response()->json([ 'offerId' => $offer->offerId,
                                'offerName' => $offer->offerName,
                                'offerPic' => '/assets/pages/media/works/'.$offer->offerPic,
                                'offerDescription' => $offer->offerDescription,
                                'offerExpiry' => $offer->offerExpiry,
                                'offerVendor' => $offer->offerVendor,
                                'offerBookmark' => $bookmark,
                                'StatusCode' => $this->successStatus],
                                $this->successStatus);
  }

  /**
   *offer details by id api
   *
   * @return \Illuminate\Http\Response
   */
  public function offerBookmark(Request $request)
  {
      if ($request['offerBookmark']=='true') {
        $bookmark = new Bookmark;
        $bookmark->customer_id = $request['id'];
        $bookmark->offer_id = $request['offerId'];
        $bookmark->save();

        return response()->json(['offerBookmark' => $request['offerBookmark'],
                                 'StatusCode' => $this->successStatus],
                                 $this->successStatus);

      }
      elseif ($request['offerBookmark']=='false'){
        $bookmark = Bookmark::where('customer_id',$request['id'])
                    ->where('offer_id',$request['offerId'])
                    ->delete();
        return response()->json(['offerBookmark' => $request['offerBookmark'],
                                 'StatusCode' => $this->successStatus],
                                 $this->successStatus);
      }

  }
  /**
   *offers bookmarks api
   *
   * @return \Illuminate\Http\Response
   */
  public function getBookmarks(Request $request)
  {

      $perPage = 5;
      $allOffers = Offer::join('bookmarks','offers.id','=','bookmarks.offer_id')
                          ->join('vendors', 'offers.vendor_id', '=', 'vendors.id')
                          ->select('offers.id As offerId','offers.offerName','offers.offerPic', 'vendors.fullName AS offerVendor' ,'offers.offerExpiry')
                          ->where('bookmarks.customer_id', $request['id'])
                          ->paginate($perPage);
      $records = [];
      foreach ($allOffers as $key => $offer) {
        $offer->offerPic = '/assets/pages/media/works/'.$offer->offerPic;
        $records[$key] = $offer;
      }
      return response()->json(['records' => $records,
                               'pagination' => [
                                'page' => $allOffers->currentPage(),
                                'perPage' => $perPage,
                                'pageCount' => $allOffers->count(),
                                'totalCount' => $allOffers->total(),
                                ],

                               'StatusCode' => $this->successStatus],
                               $this->successStatus);
  }

}
