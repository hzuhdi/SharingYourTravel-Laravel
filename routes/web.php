<?php

use App\Blog;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', "myController@index");

Route::get('about', "myController@about");

Route::get('contact', "myController@contact");

// Route::get('home', "myController@index");

Route::get('/add', "myController@add")->middleware('auth');

Route::get('/addBlogs', function()
{
	$blog = new Blog;
    $blog->title = "Lost in Germany";
    $blog->content = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum minima eveniet recusandae suscipit eum laboriosam fugit amet deleniti iste et. Ad dolores, necessitatibus non saepe tenetur impedit commodi quibusdam natus repellat, exercitationem accusantium perferendis officiis. Laboriosam impedit quia minus pariatur!

Dignissimos iste consectetur, nemo magnam nulla suscipit eius quibusdam, quo aperiam quia quae est explicabo nostrum ab aliquid vitae obcaecati tenetur beatae animi fugiat officia id ipsam sint? Obcaecati ea nisi fugit assumenda error totam molestiae saepe fugiat officiis quam?

Culpa porro quod doloribus dolore sint. Distinctio facilis ullam voluptas nemo voluptatum saepe repudiandae adipisci officiis, explicabo eaque itaque sed necessitatibus, fuga, ea eius et aliquam dignissimos repellendus impedit pariatur voluptates. Dicta perferendis assumenda, nihil placeat, illum quibusdam. Vel, incidunt?

Dolorum blanditiis illum quo quaerat, possimus praesentium perferendis! Quod autem optio nobis, placeat officiis dolorem praesentium odit. Vel, cum, a. Adipisci eligendi eaque laudantium dicta tenetur quod, pariatur sunt sed natus officia fuga accusamus reprehenderit ratione, provident possimus ut voluptatum.";
	$blog->image = NULL;
	$blog->countries = 'Europe';
    $blog->save();
});

Route::post('/store', "blogController@store");
Route::get('/read/{id}', "myController@show");
Route::get('query', 'myController@search');

Auth::routes();


// UserController routes (auth middleware, so can't access if you're not logged)
Route::get('/logout', 'UserController@logout');
Route::get('/profile', 'UserController@showAuthenticatedUser');
