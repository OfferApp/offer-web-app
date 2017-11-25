<?php

namespace App\Http\Controllers\Offer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Offer;
use Auth;
use Carbon\Carbon;

class OfferController extends Controller
{
    /**
     * Display a listing of the offer.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers = Offer::where('vendor_id',Auth::guard('web_vendor')->user()->id)
                                 ->get();
        return view('offerView',compact('offers'));
    }

    /**
     * Show the form for creating a new offer.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('createOffer');
    }

    /**
     * Store a newly created offer in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
              $offer = new Offer;
            $offer->offerName = $request['offername'];
            $offer->offerPic = $request['offerimages'];
            $offer->offerDescription = $request['offer_description'];
            $offer->offerExpiry = Carbon::parse($request->input('offer_expire'));
            $offer->offerLabel = $request['label'];
            $offer->category = $request->offer['categories'][0];
            $offer->offerRating = 5;
            $offer->vendor_id = Auth::guard('web_vendor')->user()->id;
            $offer->save();
            return redirect('/');
    }

    /**
     * Display the specified offer.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the offers.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
      return view('editOffer');
    }

    /**
     * Update the specified offer in storage.
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
     * Remove the specified offer from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
