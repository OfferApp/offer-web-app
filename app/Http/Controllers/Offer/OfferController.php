<?php

namespace App\Http\Controllers\Offer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
<<<<<<< master
<<<<<<< master
<<<<<<< Updated upstream
=======
use App\Http\Requests\offerRequest;
>>>>>>> Finale Update done
=======
use App\Http\Requests\offerRequest;
>>>>>>> Final Update done
use App\Offer;
use App\Vendor;
use Auth;
use Carbon\Carbon;
=======
<<<<<<< refs/remotes/origin/master
=======
use App\Http\Requests\offerRequest;
use App\Offer;
use App\Vendor;
use Auth;
use Carbon\Carbon;
>>>>>>> Final Update done
>>>>>>> Stashed changes

class OfferController extends Controller
{
    /**
     * Display a listing of the offer.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< master
<<<<<<< master
<<<<<<< Updated upstream
        $offers = Offer::where('vendor_id',Auth::guard('web_vendor')->user()->id)
                                 ->get();
=======
=======
>>>>>>> Final Update done
        $vendor = Vendor::where('user_id',Auth::guard('web_vendor')->user()->id)->first();

        $offers = Offer::where('vendor_id',$vendor->id)->get();
        // return $offers;
<<<<<<< master
>>>>>>> Finale Update done
=======
>>>>>>> Final Update done
        return view('offerView',compact('offers'));
=======
<<<<<<< refs/remotes/origin/master
        //
=======
        $vendor = Vendor::where('user_id',Auth::guard('web_vendor')->user()->id)->first();

        $offers = Offer::where('vendor_id',$vendor->id)->get();
        // return $offers;
        return view('offerView',compact('offers'));
>>>>>>> Final Update done
>>>>>>> Stashed changes
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
    public function store(offerRequest $request)
    {
<<<<<<< master
<<<<<<< master
<<<<<<< Updated upstream
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
=======
<<<<<<< refs/remotes/origin/master

=======
=======
>>>>>>> Finale Update done
=======
>>>>>>> Final Update done
             $vendor = Vendor::where('user_id',Auth::guard('web_vendor')->user()->id)->first();
             if ($request['offername'] == 1) {
               $offername = 'Buy '.$request['buy'].' get '.$request['get'];
             }
             if ($request['offername'] == 2) {
               $offername = 'Flat '.$request['flat'].' % ';
             }
             if ($request['offername'] == 3) {
               $offername = $request['cashback'].'CashBack On '.$request['purchase'].' and Above Purchases ';
             }
             if ($request->hasFile('offerimages')) {
               $id = $request['id'];
               $offer = Offer::where('id',$id)->first();
               if (empty($offer)) {
                 $offer = new Offer;

               }
               $file = $request->file('offerimages');
               $destinationPath = 'assets/pages/media/works';
               $file->move($destinationPath,$file->getClientOriginalName());
               $offer->id = $id;
               $offer->offerName = $request['offername'];
               $offer->offerPic = $file->getClientOriginalName();
               $offer->offerDescription = $request['offer_description'];
               $offer->offerExpiry = Carbon::parse($request->input('offer_expire'));
               $offer->offerLabel = $request['label'];
               $offer->category = $request['category'];
               $offer->offerRating = $request['rating'];
               $offer->vendor_id = $vendor->id;
               $offer->save();
               $msg = "The Offers is Added Sucessfully";
               $offers = Offer::where('vendor_id',$vendor->id)->get();
               return view('editOffer',compact(['msg','offers']));
             } else {

               $offer = new Offer;
               $offer->offerName = $offername;
               $offer->offerPic = $request['offerimages'];
               $offer->offerDescription = $request['offer_description'];
               $offer->offerExpiry = Carbon::parse($request->input('offer_expire'));
               $offer->offerLabel = $request['label'];
               $offer->category = $request['category'];
               $offer->offerRating = 5;
               $offer->vendor_id = $vendor->id;
               $offer->save();
               $msg = "The Offers is Created Sucessfully";

               return view('createOffer',compact(['msg']));
             }
<<<<<<< master
<<<<<<< master
>>>>>>> Final Update done
>>>>>>> Stashed changes
=======
>>>>>>> Finale Update done
=======
>>>>>>> Final Update done
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

      $vendor = Vendor::where('user_id',Auth::guard('web_vendor')->user()->id)->first();

      $offers = Offer::where('vendor_id',$vendor->id)->get();


      return view('editOffer',compact('offers'));
    }

    /**
     * Update the specified offer in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $vendor = Vendor::where('user_id',Auth::guard('web_vendor')->user()->id)->first();
      $id = $request['id'];
      $file = $request->file('avatar');
      $destinationPath = 'assets/pages/media/works';
      $file->move($destinationPath,$file->getClientOriginalName());
      $offer = Offer::where('id',$id)->first();
      $offer->offerName = $request['offername'];
      $offer->offerPic = $file->getClientOriginalName();
      $offer->offerDescription = $request['offer_description'];
      $offer->offerExpiry = Carbon::parse($request->input('offer_expire'));
      $offer->offerLabel = $request['label'];
      $offer->category = $request['category'];
      $offer->offerRating = $request['rating'];
      $offer->vendor_id = $vendor->id;
      $offer->save();
      $msg = "The Offers is Updated Sucessfully";
      $offers = Offer::where('vendor_id',$vendor->id)->get();
      return view('editOffer',compact(['msg','offers']));
    }

    /**
     * Remove the specified offer from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
         Offer::where('id',$request['id'])->delete();
         $vendor = Vendor::where('user_id',Auth::guard('web_vendor')->user()->id)->first();
         $msg = "The Offers is Deleted Sucessfully";
         $offers = Offer::where('vendor_id',$vendor->id)->get();
         return view('editOffer',compact(['msg','offers']));
    }
}
