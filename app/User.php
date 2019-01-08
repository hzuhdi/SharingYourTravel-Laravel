<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;
use Tymon\JWTAuth\Contracts\JWTSubject as JWT;

class User extends Authenticable implements JWT
{

	const ADMIN_TYPE = 'admin';
	const DEFAULT_TYPE = 'default';

    protected $table = 'users';
    protected $fillable = ['email', 'name', 'password', 'bio', 'type', 'image'];
    protected $hidden = ['password', 'type', 'remember_token'];

    public function isAdmin(){
    	return $this->type === self::ADMIN_TYPE;
    }

    public function blogs()
    {
        return $this->hasMany('App\Blog');
    }

    public function comments(){
        return $this->hasMany('App\Comment');
    }


		public function getJWTIdentifier(){
   		return $this->getKey();
		}

		public function getJWTCustomClaims(){
   		return [];
		}
}
