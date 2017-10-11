<?php

namespace App;

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
}
