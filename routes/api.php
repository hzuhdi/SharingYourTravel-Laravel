<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/blogs', 'BlogController@index_api');
Route::post('/blogs', 'BlogController@create_api');
Route::get('/blogs/{id}', "BlogController@show_api");
Route::put('/blogs/{id}', "BlogController@update_api");
Route::delete('/blogs/{id}', "BlogController@destroy_api");
