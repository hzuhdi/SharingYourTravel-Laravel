<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Blog;
use App\User;
use RealRashid\SweetAlert\Facades\Alert;
use App\Services\UserService;
use App\Services\BlogService;
use App\Services\CommentService;
use PDF;
use Excel;
use App\Exports\UsersExport;
use App\Exports\BlogsExport;





class AdminController extends Controller
{
    //

    public function __construct(UserService $userService, BlogService $blogService, CommentService $commentService)
    {
    	$this->middleware('auth');
        $this->middleware('is_admin');
        $this->userService = $userService;
        $this->blogService = $blogService;
        $this->commentService = $commentService;
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

    public function reportUser(){
        return view('admin/report/user', compact('user'));
    }

    public function reportBlog(){
        return view('admin/report/blog', compact('blog'));
    }


    public function reportUserPdf(){
        $user = User::get();
        $pdf = PDF::loadView('admin.report.user_pdf', compact('user'));
        return $pdf->download('user_report_'.date('Y-m-d_H-i-s').'.pdf');
    }

    public function reportBlogPdf(){
        $blog = Blog::get();
        $pdf = PDF::loadView('admin.report.blog_pdf', compact('blog'));
        return $pdf->download('blog_report_'.date('Y-m-d_H-i-s').'.pdf');
    }

    public function userDelete($id)
    {
        $del = User::find($id);
        if($del->blogs()){
            $del->blogs()->delete();
        }
        if($del->comments()){
            $del->comments()->delete();
        }
        //relation
        $del->delete();

        //Deleting the user
        alert()->success('Success.','Your User has been deleted!');
        return redirect()->route('admin');
    }

    public function blogDelete($id)
    {
        $del = Blog::find($id);
        $del->comments()->delete();
        //relation
        $del->delete();
        //Deleting for user
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

        $update = User::where('id', $id)->first();
        //update it
        $this->userService->update($update, $request['email'], $request['name'], $request['password'], $request['bio'], $request->file('image'));
        //For user type
        $this->userService->update_type($update, $request['type']);
        alert()->success('Successful','User has been changed!');
        return redirect()->route('admin-user');
    }

    public function blogUpdate(Request $request, $id)
    {
        $update = Blog::where('id', $id)->first();
        //update it
        $this->blogService->update($update, $request['title'], $request['content'], $request['countries'], $request->file('image'));
        //redirect to profile
        Alert::success('Successful', 'Blog has been changed');
        return redirect()->route('admin-blog');
    }

    public function commentUpdate(Request $request, $id)
    {
        $update = Comment::where('id', $id)->first();
        //update it
        $this->commentService->update($update, $request['email']);
        
        alert()->success('Successful','Comment has been changed!');
        return redirect()->route('admin-comment');

    }

    public function reportUserExc(Request $request)
    {
        //We will call export class
        //From App/Exports
        return Excel::download(new UsersExport, 'users.xlsx');

    }

    public function reportBlogExc(Request $request)
    {
       return Excel::download(new BlogsExport, 'blogs.xlsx');

    }

}
