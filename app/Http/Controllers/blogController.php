<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Auth;
use App\Services\BlogService;
use Alert;
use PDF;

class BlogController extends Controller
{

    public function __construct(BlogService $blogService)
    {
        $this->blogService = $blogService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    public function store(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'countries' => 'required'
        ]);

        // TODO see if it's really necessary (should use auth middleware instead?)
        if (!$user = Auth::user())
            return view("auth.login");

        $b = $this->blogService->create($user, $request['title'], $request['content'], $request['countries'], $request->file('image'));
        Alert::success('Successful', 'Blog Created Successfully');
        return redirect()->action('MyController@show', $b->id);

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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        alert()->success('Successful','Blog successfully deleted');
        $del = Blog::find($id);
        $del->delete();

        return redirect()->to('/');
    }

    public function getThreeLatestPosts(){
        // return 'test';
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
