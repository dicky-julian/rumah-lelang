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

Route::get('/','Pages\IndexController@home');
Route::get('/id_lelang','Pages\Lelang\detailLelangController@get');
Route::get('/id_user','Pages\IndexController@UserDetail');