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
Route::get('/users', 'PostController@index')->name('posts.index');
Route::get('/users/create','PostController@create')->name('posts.create');
Route::get('/users/{id}','PostController@show')->name('posts.show');
Route::delete('/users/{id}','PostController@destroy')->name('posts.destroy');
Route::post('/users', 'PostController@store')->name('posts.store');
Route::get('/users/{id}/edit','PostController@edit')->name('posts.edit');
Route::put('users/{id}/updated', 'PostController@update')->name('posts.update');
Route::get('/categories', 'CategoryController@index')->name('categories.index');
Route::get('/categories/create','CategoryController@create')->name('categories.create');
Route::get('/categories/{id}','CategoryController@show')->name('categories.show');
Route::delete('/categories/{id}','CategoryController@destroy')->name('categories.destroy');
Route::post('/categories', 'CategoryController@store')->name('categories.store');
Route::get('/categories/{id}/edit','CategoryController@edit')->name('categories.edit');
Route::put('categories/{id}/updated', 'CategoryController@update')->name('categories.update');
