<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Blog;
use App\User;
use RealRashid\SweetAlert\Facades\Alert;


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

    public function user()
    {
        $user = User::get();
        return view('admin/user/user', compact('user'));
    }

    public function blog()
    {
        $blog = Blog::get();
        return view('admin/blog/blog', compact('blog'));
    }

    public function comment()
    {
        $comment = Comment::get();
        return view('admin/comment/comment', compact('comment'));
    }

    public function report()
    {
        $blog = Blog::get();
        $user = User::get();
        $comment = Comment::get();
        return view('admin/report/report', compact('blog', 'user', 'comment'));
    }

    public function userDelete($id)
    {
        User::find($id)->delete();
        alert()->success('Success.','Your Data has been deleted!');
        return redirect()->route('admin');
    }

    public function blogDelete($id)
    {
        Blog::find($id)->delete();
        alert()->success('Success.','Your Data has been deleted!');
        return redirect()->route('admin');
    }

    public function commentDelete($id)
    {
        Comment::find($id)->delete();
        alert()->success('Success.','Your Data has been deleted!');
        return redirect()->route('admin');
    }

    public function userEdit($id)
    {
        $data = User::findOrFail($id);
        return view('admin.user.edit', compact('data'));
    }

    public function blogEdit($id)
    {
        $data = Blog::findOrFail($id);
        return view('admin.blog.edit', compact('data'));
    }

    public function commentEdit($id)
    {
        $data = Comment::findOrFail($id);
        return view('admin.comment.edit', compact('data'));
    }

    public function userUpdate(Request $request, $id)
    {

    }

    public function blogUpdate(Request $request, $id)
    {

    }

    public function commentUpdate(Request $request, $id)
    {

    }
}
