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
Route::resource('/', 'homeController');
Route::get('/{id}/edit', 'homeController@edit');
Route::put('/{id}', 'homeController@update');
Route::delete('/{id}', 'homeController@destroy');
