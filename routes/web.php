<?php

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
// View::composer('layouts.main',function($view){
// return $view;
// });
Route::get('/', function () {
    return view('layouts.main');
});
Route::get('/','FrontendController@index')->name('index');
Route::get('/features','FrontendController@features')->name('features');
Route::get('/pricing','FrontendController@pricing')->name('pricing');
Route::get('/blog','FrontendController@blog')->name('blog');
Route::get('/single-blog','FrontendController@SingleBlog')->name('single-blog');
Route::get('/elements','FrontendController@elements')->name('elements');
Route::get('/contact','FrontendController@contact')->name('contact');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('category','Category');
Route::resource('menu', 'Menu');
Route::resource('post','Post');
Route::resource('settings','Settings');
Route::resource('partners','Partners');
Route::resource('pages','Pages');