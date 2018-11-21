<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class myController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blogs = Blog::orderBy('id', 'DESC')->paginate(10);
        return view('home')->with('blogs', $blogs);
        //return view('home', compact('blogs'));

    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    public function add(){
        return view('add-blog');
    }

    public function search(Request $request)
    {
        $query = $request->get('q');
        $result = Blog::where('title', 'LIKE', '%' . $query . '%')->paginate(10);

        return view('result-view', compact('result', 'query'));
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
        //
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
        /*$b = Blog::find($id);
        return view('single-blog')->with('b', $b);*/
        //return view('blog-single', ['b' => Blog::findOrFail($id)]);
        $b = Blog::find($id);
 
        return view('blog-single', ['b' => $b]);

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
