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
Route::get('/users', 'UserController@index')->name('users.index');
Route::get('/users/create','UserController@create')->name('users.create');
Route::get('/users/{id}','UserController@show')->name('users.show');
Route::delete('/users/{id}','UserController@destroy')->name('users.destroy');
Route::post('/users', 'UserController@store')->name('users.store');
Route::get('/users/{id}/edit','UserController@edit')->name('users.edit');
Route::put('users/{id}/updated', 'UserController@update')->name('users.update');
Route::get('/categories', 'CategoryController@index')->name('categories.index');
Route::get('/categories/create','CategoryController@create')->name('categories.create');
Route::get('/categories/{id}','CategoryController@show')->name('categories.show');
Route::delete('/categories/{id}','CategoryController@destroy')->name('categories.destroy');
Route::post('/categories', 'CategoryController@store')->name('categories.store');
Route::get('/categories/{id}/edit','CategoryController@edit')->name('categories.edit');
Route::put('categories/{id}/updated', 'CategoryController@update')->name('categories.update');