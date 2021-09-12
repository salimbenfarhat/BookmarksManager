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

Route::get('/home', 'BookmarkController@home')->name('home');
Route::get('/bookmarks', 'BookmarkController@index');
Route::get('/add/bookmark','BookmarkController@add');
Route::post('/add/bookmark','BookmarkController@store');
Route::get('/edit/bookmark/{id}','BookmarkController@edit');
Route::post('/edit/bookmark/{id}','BookmarkController@update');
Route::delete('/delete/bookmark/{id}','BookmarkController@destroy');