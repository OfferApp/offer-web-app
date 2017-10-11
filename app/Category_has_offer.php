<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category_has_offer extends Model
{
  protected $fillable = [
    'category_id',
    'offer_id',
  ];
}
