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

Route::get('/', "MyController@index");

Route::get('about', "MyController@about");

Route::get('contact', "MyController@contact");

// Route::get('home', "MyController@index");

Route::get('/add', "MyController@add")->middleware('auth');

Route::get('/addtest', "MyController@addtest")->middleware('auth');


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

Route::post('/store', "BlogController@store");
Route::get('/read/{id}', "MyController@show");
Route::get('query', 'MyController@search');

//route fo update delete
Route::get('/edit/{id}', 'BlogController@edit');
Route::post('/update/{id}', 'BlogController@update');
Route::get('/delete/{id}', 'BlogController@destroy');
Route::get('/exportpdf/{id}', 'BlogController@expToPdf');

Auth::routes();

//This routes are provided for comment
Route::post('/store-comment', 'CommentController@store')->middleware('auth');


// UserController routes (auth middleware, so can't access if you're not logged)
Route::get('/logout', 'UserController@logout');
Route::get('/profile', 'UserController@showAuthenticatedUser')->middleware('auth');
Route::get('/edit-profile', 'UserController@show')->middleware('auth');
Route::post('/update-profile', 'UserController@update')->middleware('auth');

// Route for admin, I created a middleware to check whether the user is admin or not
// Route::get('/admin', 'AdminController@admin')->middleware('is_admin')
//     ->name('admin');
Route::get('/admin_panel', 'AdminController@admin')->name('admin');
Route::get('thisisadmin', "MyController@admin");
Route::get('/blogs/latests', "BlogController@getThreeLatestPosts");

Route::get('/country/{country}', 'MyController@country');
