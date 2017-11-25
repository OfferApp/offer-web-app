<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
  use HasApiTokens, Notifiable;

  const VERIFIED_USER = 'true';
  const UNVERIFIED_USER = 'false';

    protected $fillable = [
      'username',
      'email',
      'mobile',
      'password',
      'verified',
      'role_id',
  ];

    protected $hidden = [
      'password', 'verified', 'role_id','remember_token',
  ];
}
