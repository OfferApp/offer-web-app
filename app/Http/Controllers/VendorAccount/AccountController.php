<?php

namespace App\Http\Controllers\VendorAccount;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
    public function setPersonalInfo(Request $request)
    {
        dd($request);
    }

    public function setAvatar(Request $request)
    {
      dd($request);
    }

    public function setPassword(Request $request)
    {
        dd($request);
    }

    public function setLocation(Request $request)
    {
      $address = $request['address'];
      Mapper::location($address)
      ->map(['zoom' => 15, 'center' => true, 'marker' => true, 'type' => 'HYBRID', 'overlay' => 'TRAFFIC']);
    return view('newVendorAccount',compact('map'));
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
      // Draw a map
          $vendor = Vendor::all();
          $address = $vendor->first()->shopAddress;
          $latitude= $vendor->first()->xCoordinate;
          $longitude = $vendor->first()->yCoordinate;
          $content = $vendor->first()->fullName;
          Mapper::location($address)
          ->map(['zoom' => 15, 'center' => true, 'marker' => true, 'type' => 'HYBRID', 'overlay' => 'TRAFFIC']);

        return view('newVendorAccount',compact('map'));
    }

    /**
     * Store a newly created account in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
