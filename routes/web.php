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
Route::get('holders/{holder}/edit','HoldersController@edit')->name('holders.edit');
Route::get ('holders/{holder}','HoldersController@show')->name('holders.show');
Route::post('holders','HoldersController@store')->name('holders.store');
Route::put('holders/{holder}','HoldersController@update')->name('holders.update');
Route::delete('holders/{holder}','HoldersController@delete')->name('holders.delete');

//ACCOUNT
Route::get('accounts','AccountsController@index')->name('accounts.index');
Route::get('accounts/create','AccountsController@create')->name('accounts.create');
Route::get('accounts/{account}/edit','AccountsController@edit')->name('accounts.edit');
Route::get('accounts/{account}','AccountsController@show')->name('accounts.show');
Route::post('accounts','AccountsController@store')->name('accounts.store');
Route::put('accounts/{account}','AccountsController@update')->name('accounts.update');
Route::delete('accounts/{account}','AccountsController@delete')->name('accounts.delete');