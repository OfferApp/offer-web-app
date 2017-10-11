<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
  protected $fillable = [
    'id',
    'shopName',
    'vendorLogo',
    'shopAddress',
    'shopContactNo',
    'website',
    'xCoordinate',
    'yCoordinate',
    'zipCode',
    'user_id',
  ];
}
