<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table = 'comments';
    protected $fillable = ['user_id', 'blog_id', 'content'];

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function blog(){
    	return $this->belongsTo('App\Blog');
    }
}
