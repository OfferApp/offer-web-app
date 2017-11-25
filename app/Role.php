<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  const VENDOR_USER = 'VENDOR';
  const CUSTOMER_USER = 'CUSTOMER';

  protected $fillable = [
    'id',
    'name',
    'createTime',
    'updateTime',
  ];
}
