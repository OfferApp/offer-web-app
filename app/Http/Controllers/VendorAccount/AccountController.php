<?php

namespace App\Http\Controllers\VendorAccount;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\vendorProfile;
use Mapper;
use App\Vendor;
use Response;
use Auth;
use App\Offer;

class AccountController extends Controller
{
    /**
     * Display a listing of the account.
     *
     * @return \Illuminate\Http\Response
     */
    public function PersonalInfo()
    {
        return view('vendorPersonalInfo');
    }

    public function Avatar()
    {


      return view('vendorAvatar');
    }

    public function Password()
    {
        return view('vendorChangePassword');
    }

    public function Location()
    {
        $vendor = Vendor::all();
        $address = $vendor->first()->shopAddress;
        $latitude= $vendor->first()->xCoordinate;
        $longitude = $vendor->first()->yCoordinate;
        $content = $vendor->first()->fullName;
        Mapper::location($address)
        ->map(['zoom' => 15, 'center' => true, 'marker' => true, 'type' => 'HYBRID', 'overlay' => 'TRAFFIC']);
        return view('vendorLocation',compact('map'));
    }

    public function setPersonalInfo(vendorProfile $request)
    {

        $vendor = Vendor::where('user_id',Auth::guard('web_vendor')->user()->id)->first();
        $vendor->fullName = $request['firstName'];
        $vendor->shopName = $request['shopName'];
        $vendor->shopAddress = $request['address'];
        $vendor->shopContactNo = $request['mobileNo'];
        $vendor->zipCode = $request['zipcode'];
        $vendor->website = $request['website'];
        $vendor->xCoordinate = '18.25';
        $vendor->yCoordinate = '75.23';
        $vendor->user_id = Auth::guard('web_vendor')->user()->id;
        $vendor->save();

        return view('vendorPersonalInfo');
    }

    public function setAvatar(vendorProfile $request)
    {
      $file = $request->file('avatar');
      $destinationPath = 'assets/pages/media/works/';
      $file->move($destinationPath,$file->getClientOriginalName());

      $vendor = Vendor::where('user_id',Auth::guard('web_vendor')->user()->id)->first();
      $vendor->vendorLogo = $destinationPath.$file->getClientOriginalName();
      $vendor->save();

      return view('vendorAvatar');
    }

    public function setPassword(vendorProfile $request)
    {

        if(Auth::attempt(['username' => Auth::guard('web_vendor')->user()->username , 'password' => request('currentPassword')]) ){
            $user = Auth::guard('web_vendor')->user();
            $user->password = bcrypt($request['newPassword']);
            $user->save();
            redirect('/vendor_logout');
        }
        else{
          $error = 'Enter a Vaild Old Password';
        }

        return view('vendorChangePassword',['currentPassword' => $error]);
    }

    public function setLocation(vendorProfile $request)
    {



        $vendor = Vendor::all();
        $address = $vendor->first()->shopAddress;
        $latitude= $vendor->first()->xCoordinate;
        $longitude = $vendor->first()->yCoordinate;
        $content = $vendor->first()->fullName;
        $location = Mapper::location($request['address']);
        dd($location);
        // ->map(['zoom' => 23, 'center' => true, 'marker' => true,])
        // ->informationWindow( $content, ['markers' => ['animation' => 'DROP']]);
        return view('vendorLocation',compact('map'));
    }

    public function index()
    {
      $vendor = Vendor::where('user_id', Auth::guard('web_vendor')->user()->id)->first();
      $offers = Offer::where('vendor_id',Auth::guard('web_vendor')->user()->id)
                               ->get();
    return view('dashboard',compact(['vendor','offers']));
    }

    /**
     * Show the form for creating a new account.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created account in storage.
     *
     * @param  \Illuminate\Http\vendorProfile  $request
     * @return \Illuminate\Http\Response
     */
    public function store(vendorProfile $request)
    {
        //
    }

    /**
     * Display the specified account.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified account.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified account in storage.
     *
     * @param  \Illuminate\Http\vendorProfile  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(vendorProfile $request, $id)
    {
        //
    }

    /**
     * Remove the specified account from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
