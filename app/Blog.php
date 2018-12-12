<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';
    protected $fillable = ['title', 'content', 'image', 'countries'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function blog(){
    	return $this->hasMany('App\Comment');
    }
}
