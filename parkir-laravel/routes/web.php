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
// untuk pengguna
Route::get('/', 'penggunaController@lantaiparkir1');  
Route::get('lantai2', 'penggunaController@lantaiparkir2'); 
Route::get('lantai1', 'penggunaController@lantaiparkir1'); 

// untuk user
Route::get('user', 'penggunaController@usertampil'); 
Route::get('user/hapus/{id}', 'penggunaController@hapususer');
Route::get('user/edit/{id}','penggunaController@edituser');
Route::post('user/update','penggunaController@ubahuser');

