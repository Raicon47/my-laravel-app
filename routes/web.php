<?php

use Illuminate\Support\Facades\Route;

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



Auth::routes();
//removing a particular route, maybe you want only a login page
// Auth::routes(['register' => false]);

/* HTTP Basic Authentication provides a quick way to authenticate users of your application without
 setting up a dedicated "login" page.
 Route::get('/dashboard', function () {
     return view('dashboard');
 })->middleware('auth.basic');
*/

//social media uath routes
Route::get('login/{provider}', 'SocialController@redirect');
Route::get('login/twitter/callback', 'SocialController@TwitterCallback');

Route::get('/', 'PagesController@index');
Route::get('/create', 'PagesController@create')->middleware('auth');
Route::get('show/{id}', 'PagesController@show')->name('pages.show/{id}');
Route::get('/cards', 'PagesController@posts');
// Route::get('/cards','SearchController@search');

//this route is called so other functions in the controller class without a route can be used
Route::resource('pages', 'PagesController');


Route::get('/dashboard', 'PagesController@dashboard')->name('pages.dashboard')->middleware(['auth', 'password.confirm']);
