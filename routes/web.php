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

Route::get('/', 'PagesController@index');
Route::get('/input-lomba', function () {
    return view('pages.lomba');
});
Route::resource('lomba','LombaController');
Route::resource('syarat','SyaratController');
Route::post('lomba/update','LombaController@update');
Route::post('syarat/update','SyaratController@update');