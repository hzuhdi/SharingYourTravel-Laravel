<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Services\UserService;
use Illuminate\Support\Facades\Hash;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class UserController extends Controller
{
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    public function login_api(Request $request){
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);
        
        $token = JWTAuth::attempt(['email' => $request->email, 'password' => $request->password]);
        if (!$token) {
            return response()->json(['message' => "Bad Credentials",], 401);
        }
        return response()->json([
                'token' => $token
        ], 200);
    }

    public function self_api(Request $request){
        try {
            $current_user = JWTAuth::parseToken()->authenticate();
        } catch (JWTException $e) {
            return response()->json(['message' => "Bad Credentials"], 401);
        }
        return $current_user;
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
