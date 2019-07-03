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
//HOLDER
Route::get ('holders','HoldersController@index')->name('holders.index');
Route::get ('holders/create','HoldersController@create')->name('holders.create');
Route::get('holders/{country}/edit','HoldersController@edit')->name('holders.edit');
Route::get ('holders/{country}','HoldersController@show')->name('holders.show');
Route::post('holders','HoldersController@store')->name('holders.store');
Route::put('holders/{country}','HoldersController@update')->name('holders.update');
Route::delete('holders/{country}','HoldersController@delete')->name('holders.delete');

