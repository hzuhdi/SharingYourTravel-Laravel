<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Services\UserService;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function __construct(UserService $userService)
    {
        $this->middleware('auth');    
        $this->userService = $userService;
    
    }

    // used to logout of the application
    public function logout()
    {
        Auth::logout();
        return redirect()->action('MyController@index');
    }

    public function showAuthenticatedUser(){
        $current_user = Auth::user();
        return view('user.profile')->with('user', $current_user);
    }

    //below here not laravel function, made by ourself
    public function show()
    {
        //Authentication granted
        $current_user = Auth::user();
        return view('user.profile-extended')->with('user', $current_user);

    }

    public function update(Request $request){
        $current_user = Auth::user();
        //update it
        $this->userService->update($current_user, $request['email'], $request['name'], Hash::make($request['password']), $request['bio'], $request->file('image'));
        //redirect to profile
        return view('user.profile')->with('user', $current_user);

    }


}
