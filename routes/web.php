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

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DynamicFieldController;

Route::get('index/{lang}', function ($lang) {
    \Session::put('lang', $lang);
    return redirect()->back();
})->name('locale');

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
Route::get('/home', 'HomeController@index')->name('home');


Route::resource('category','CategoryController');
Route::resource('/menu', 'MenuController');
Route::resource('/post','PostController');
Route::resource('/settings','SettingsController');
Route::resource('/partners','PartnersController');
Route::resource('/pages','PagesController');
Auth::routes();



Route::get('/price', 'DynamicFieldController@index')->name('price.index');
Route::get('create','DynamicFieldController@create')->name('price.create');
Route::post('dynamic-field/insert', 'DynamicFieldController@insert')->name('dynamic-field.insert');
