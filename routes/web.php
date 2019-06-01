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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/post/{_id?}', 'PostController@form')->name('post.form');
Route::post('/post/save', 'PostController@save')->name('post.save');
Route::put('/post/update/{_id}', 'PostController@update')->name('post.update');
Route::get('/post/delete/{_id?}', 'PostController@delete')->name('post.delete');
