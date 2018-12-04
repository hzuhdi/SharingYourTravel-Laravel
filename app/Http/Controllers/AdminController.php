<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    	return view('admin/index');
    }
}
