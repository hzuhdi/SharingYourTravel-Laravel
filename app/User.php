<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;

class User extends Authenticable
{
    protected $table = 'users';
    protected $fillable = ['username', 'password', 'bio'];
    protected $hidden = ['password', 'remember_token'];
}
