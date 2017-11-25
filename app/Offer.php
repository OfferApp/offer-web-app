<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
  protected $fillable = [
    'id',
    'offerName',
    'offerPic',
    'offerDescription',
    'offerExpiry',
    'offerRating',
    'category',
    'vendor_id',
];

public function customerBookmark($id)
{
  $bookmark = DB::table('customers')
              ->leftjoin('bookmarks','customers.id','=','bookmarks.customer_id')
              ->leftjoin('offers','bookmarks.offer_id','=','offers.id')
              ->where('offers.id',$id)
              ->get();

  return $bookmark;
}

}
