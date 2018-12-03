<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;

class User extends Authenticable
{

	const ADMIN_TYPE = 'admin';
	const DEFAULT_TYPE = 'default';

    protected $table = 'users';
    protected $fillable = ['email', 'name', 'password', 'bio', 'type'];
    protected $hidden = ['password', 'type', 'remember_token'];

    public function isAdmin(){
    	return $this->type === self::ADMIN_TYPE;
    }

    public function blogs()
    {
        return $this->hasMany('App\Blog');
    }
}
