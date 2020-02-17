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
Route::get('/user/{id_user}','Pages\IndexController@UserDetail');
Route::post('/updateProfile/{id_user}','Pages\IndexController@updateProfile');

// auth
Route::match(['get','post'],'/in','Auth\AuthController@in');

// lelang
Route::post('/tambah_lelang','Pages\lelangController@tambah_lelang');
Route::get('/lelang/{id_lelang}','Pages\lelangController@showlelang');
Route::match(['get','post'],'/take_lelang/{id_lelang}','Pages\lelangController@ikut_lelang');
Route::post('/changeStatus','Pages\lelangController@changeStatus');
Route::get('/getLelangByKategori/{kategori}','Pages\lelangController@getLelangByKategori');
