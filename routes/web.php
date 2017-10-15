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

Route::post('/new', 'ElectController@newGame');
Route::post('/move', 'ElectController@newMove');
Route::post('/win', 'ElectController@setWin');
Route::post('/top', 'ElectController@getTop');
