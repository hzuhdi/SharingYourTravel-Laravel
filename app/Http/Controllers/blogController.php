<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Auth;
use App\Services\BlogService;
use App\Services\UserService;
use Alert;
use PDF;

class BlogController extends Controller
{

    public function __construct(BlogService $blogService, UserService $userService)
    {
        $this->blogService = $blogService;
        $this->userService = $userService;
    }

    /**
     * @SWG\GET(
     *   path="/api/blogs",
     *   summary="[PUBLIC] Get all blogs",
     *   @SWG\Response(response=200, description="all blogs are retrieved")
     * )
     *
     */
    public function index_api(){
        return response()->json(Blog::all());
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'countries' => 'required'
        ]);

        if (!$user = Auth::user())
            return view("auth.login");

        $b = $this->blogService->create($user, $request['title'], $request['content'], $request['countries'], $request->file('image'));
        Alert::success('Successful', 'Blog Created Successfully');
        return redirect()->action('MyController@show', $b->id);

    }

    /**
     * @SWG\POST(
     *   path="/api/blogs",
     *   summary="[USER] Create a blog",
     *   @SWG\Parameter(
     *     name="title",
     *     in="query",
     *     description="blog title",
     *     required=true,
     *     type="string"
     *   ),
     *   @SWG\Parameter(
     *     name="content",
     *     in="query",
     *     description="blog content",
     *     required=true,
     *     type="string"
     *   ),
     *   @SWG\Parameter(
     *     name="countries",
     *     in="query",
     *     description="country for the blog",
     *     required=true,
     *     enum={"South America", "North America", "Europe", "Middle East", "Asia"},
     *     type="string"
     *   ),
     *  @SWG\Parameter(
     *     name="Authorization",
     *     in="header",
     *     description="Bearer your_token_here",
     *     required=false,
     *     type="string"
     *   ),
     *   @SWG\Response(response=401, description="the token is not valid"),
     *   @SWG\Response(response=200, description="all blogs are retrieved")
     * )
     *
     */
    public function create_api(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'countries' => 'required'
        ]);
        $user = $this->userService->getAPIUser();
        $b = $this->blogService->create($user, $request['title'], $request['content'], $request['countries'], $request->file('image'));
        return response()->json($b);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $b = Blog::find($id);
        return view('about')->with('b', $b);
    }

    /**
     * @SWG\GET(
     *   path="/api/blogs/{id}",
     *   summary="[PUBLIC] get a single blog",
     *   @SWG\Parameter(
     *     name="id",
     *     in="path",
     *     description="blog id",
     *     required=true,
     *     type="string"
     *    ),
     *   @SWG\Response(response=200, description="the blog is retrieved"),
     *   @SWG\Response(response=404, description="blog not found")
     * )
     *
     */
    public function show_api($id)
    {
        $b = $this->blogService->getBlogById_api($id);
        return $b;
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
        $showEdit = Blog::where('id', $id)->first();
        return view('edit')->with('showEdit', $showEdit);
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
        // get the blog to update
        $update = Blog::where('id', $id)->first();
        // update it
        $this->blogService->update($update, $request['title'], $request['content'], $request['countries'], $request->file('image'));
        // redirect to the blog page now that it's updated
        Alert::success('Successful', 'Blog Updated Successfully');
        return redirect()->action('MyController@show', $update->id);
    }

    /**
     * @SWG\PUT(
     *   path="/api/blogs/{id}",
     *   summary="[OWNER OR ADMIN] - update a blog",
     *   @SWG\Parameter(
     *     name="id",
     *     in="path",
     *     description="blog id",
     *     required=true,
     *     type="string"
     *    ),
     *  @SWG\Parameter(
     *     name="Authorization",
     *     in="header",
     *     description="Bearer your_token",
     *     required=true,
     *     type="string"
     *    ),
     *  @SWG\Parameter(
     *     name="title",
     *     in="query",
     *     description="new title",
     *     required=false,
     *     type="string"
     *    ),
     *  @SWG\Parameter(
     *     name="content",
     *     in="query",
     *     description="new content",
     *     required=false,
     *     type="string"
     *    ),
     *  @SWG\Parameter(
     *     name="countries",
     *     in="query",
     *     description="new country",
     *     required=false,
     *     enum={"South America", "North America", "Europe", "Middle East", "Asia"},
     *     type="string"
     *    ),
     *   @SWG\Response(response=200, description="the blog is retrieved"),
     *   @SWG\Response(response=404, description="blog not found"),
     *   @SWG\Response(response=401, description="unauthorized")
     * )
     *
     */
    public function update_api(Request $request, $id)
    {
        $b = $this->blogService->getBlogById_api($id);
        $user = $this->userService->getAPIUser();
        $this->userService->checkRightsOnBlog($user, $b);
        $b = $this->blogService->update($b, $request['title'], $request['content'], $request['countries'], $request->file('image'));
        return response()->json($b);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        alert()->success('Successful','Blog successfully deleted');
        $del = Blog::find($id);
        $del->delete();

        return redirect()->to('/');
    }

    /**
     * @SWG\DELETE(
     *   path="/api/blogs/{id}",
     *   summary="[PUBLIC] - delete a blog",
     *   @SWG\Response(response=200, description="the blog is deleted from db"),
     *   @SWG\Response(response=404, description="blog not found")
     * )
     *
     */
    public function destroy_api($id){
        $blog = $this->blogService->getBlogById_api($id);
        $blog->delete();
        return response()->json($blog);
    }

    public function getThreeLatestPosts(){
        $posts = $this->blogService->getLatestPost(3);
        return $posts;
    }

    public function expToPdf(Request $request, $id)
    {
        $q = Blog::query();
        $q->where('id', $id);
        $datas = $q->get();

        $pdf = PDF::loadView('components.blog_pdf', compact('datas'));
       return $pdf->download('blog_report_'.date('Y-m-d_H-i-s').'.pdf');
    }

}
