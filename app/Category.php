<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $fillable = [
    'id',
    'clothingSet',
    'footwearSet',
    'electronicSet',
    'hotelSet',
    'vendor_id',
];

}
