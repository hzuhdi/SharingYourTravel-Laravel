<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Services\UserService;
use JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use App\Exceptions\BadCredentialsApi;

class UserController extends Controller
{
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * @SWG\GET(
     *   path="/api/users",
     *   summary="[PUBLIC] Get all users",
     *   @SWG\Response(response=200, description="all users are retrieved")
     * )
     *
     */
    public function index_api(){
        return response()->json(\App\User::all());
    }

    /**
     * @SWG\PUT(
     *   path="/api/users/{id}",
     *   summary="[OWNER OR ADMIN] - update a user",
     *   @SWG\Parameter(
     *     name="id",
     *     in="path",
     *     description="user id",
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
     *     name="email",
     *     in="query",
     *     description="new email",
     *     required=false,
     *     type="string"
     *    ),
     *  @SWG\Parameter(
     *     name="name",
     *     in="query",
     *     description="new name",
     *     required=false,
     *     type="string"
     *    ),
     *  @SWG\Parameter(
     *     name="password",
     *     in="query",
     *     description="new password",
     *     required=false,
     *     type="string"
     *    ),
     *  @SWG\Parameter(
     *     name="bio",
     *     in="query",
     *     description="new bio",
     *     required=false,
     *     type="string"
     *    ),
     *   @SWG\Response(response=200, description="the user is updated"),
     *   @SWG\Response(response=404, description="user not found"),
     *   @SWG\Response(response=401, description="unauthorized")
     * )
     *
     */
    public function update_api(Request $request, $id)
    {
        $user = $this->userService->getAPIUser();
        if (!$user->isAdmin() && $user->id != $id)
            throw new BadCredentialsApi();

        $user = $this->userService->update($user, $request['email'], $request['name'], $request['password'], $request['bio'], $request->file('image'));
        return response()->json($user);
    }

    /**
     * @SWG\POST(
     *   path="/api/login",
     *   summary="[PUBLIC] Retrieve a JWT token",
     *   @SWG\Parameter(
     *     name="email",
     *     in="query",
     *     description="login email",
     *     required=true,
     *     type="string"
     *   ),
     *   @SWG\Parameter(
     *     name="password",
     *     in="query",
     *     description="unencrypted password (should be used over https)",
     *     required=true,
     *     type="string"
     *   ),
     *   @SWG\Response(response=200, description="token has been retrieved"),
     *   @SWG\Response(response=401, description="bad credentials")
     * )
     *
     */
    public function login_api(Request $request){
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        $token = JWTAuth::attempt(['email' => $request->email, 'password' => $request->password]);
        if (!$token) {
            throw new BadCredentialsApi();
        }
        return response()->json([
                'token' => $token
        ], 200);
    }

    /**
     * @SWG\GET(
     *   path="/api/self",
     *   summary="[USER] Return the user associated with the given JWT (headers)",
     *   @SWG\Parameter(
     *     name="Authorization",
     *     in="header",
     *     description="Bearer your_token_here",
     *     required=false,
     *     type="string"
     *   ),
     *   @SWG\Response(response=200, description="user is retrieved"),
     *   @SWG\Response(response=401, description="the token is not valid")
     * )
     *
     */
    public function self_api(Request $request){
        $current_user = $this->userService->getAPIUser();
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
        $this->userService->update($current_user, $request['email'], $request['name'], $request['password'], $request['bio'], $request->file('image'));
        //redirect to profile
        return view('user.profile')->with('user', $current_user);

    }


}
