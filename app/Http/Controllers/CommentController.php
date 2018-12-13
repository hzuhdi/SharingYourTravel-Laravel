<?php

namespace App\Http\Controllers;

use Auth;
use App\Comment;
use App\Blog;
use App\Services\CommentService;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(CommentService $commentService)
    {
        $this->commentService = $commentService;
    }


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'commentcontent' => 'required'
        ]);

        //but user never reached this steps, since
        //form is blocked when user not logged in
        $blog = Blog::find($request['blogid']);

        if (!$user = Auth::user())
            return view("auth.login");

        $c = $this->commentService->create($request['commentcontent'], $user, $blog);


        //Below here is method without service
        /*Comment::create([
            'content' => $request->commentcontent,
            'user_id' => Auth::id(),
            'blog_id' => $request->blogid
        ]);*/

        return redirect()->to('/');
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
