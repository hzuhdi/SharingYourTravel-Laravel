<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Blog;
use App\User;

class AdminController extends Controller
{
    //

    public function __construct()
    {
    	$this->middleware('auth');
        $this->middleware('is_admin');
    }

    public function admin()
    {
        $blog = Blog::get();
        $user = User::get();
        $comment = Comment::get();
    	return view('admin/index', compact('blog', 'user', 'comment'));
    }
}
