<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // used to logout of the application
    public function logout()
    {
        Auth::logout();
        return redirect()->action('myController@index');
    }

    public function showAuthenticatedUser(){
        $current_user = Auth::user();
        return view('user.profile')->with('user', $current_user);
    }
}
