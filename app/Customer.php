<?php

namespace App;
use DB;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
  protected $fillable = [
    'id',
    'fullName',
    'profilePicture',
    'user_id',
  ];

  public function bookmark($id)
  {

    $bookmark = DB::table('offers')
                ->leftjoin('bookmarks','offers.id','=','bookmarks.offer_id')
                ->leftjoin('customers','bookmarks.customer_id','=','customers.id')
                ->where('customers.id',$id)
                ->get();

    return $bookmark;
  }

}
