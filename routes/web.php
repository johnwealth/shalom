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

Route::get('/', 'BlogController@index')->name('index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('contact' , 'PagesController@contact')->name('contact');
Route::post('contact' , 'PagesController@postContact')->name('contact');

Route::get('about' , 'PagesController@about')->name('about');

Route::get('blog' , 'BlogController@blog')->name('blog');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
 
Route::get('post/{slug}', ['as' => 'blog.single' , 'uses'=>'BlogController@show'])->where('slug', '[\w\d\-\_]+');

Route::get('{slug}', ['uses'=>'PagesController@show']);

Route::post('add/comment', ['uses'=>'BlogController@Comment', 'as'=>'comment']);

