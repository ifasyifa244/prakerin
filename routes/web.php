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

Route::get('/testmodel',function(){
	$q=App\Blog::all();
	return $q;
});

Route::get('/produk',function(){
	$a=App\Produk::all();
	return $a;
});

Route::get('/pengguna',function(){
	$b=App\Pengguna::all();
	return $b;
});

Route::get('/pengaturan',function(){
	$c=App\Pengaturan::all();
	return $c;
});

Route::get('test','PrakerinController@percobaan');
Route::get('test1','PrakerinController@percobaan2');
Route::get('test2','PrakerinController@percobaan3');
Route::get('test3','PrakerinController@percobaan4');
Route::get('test4','PrakerinController@percobaan5');
Route::get('test5','PrakerinController@percobaan6');
Route::get('halaman/{id}','PrakerinController@param');
Route::get('taupik/{a}','PrakerinController@parameter');
Route::get('coba','CobaController@test');
Route::get('coba2/{nama}','CobaController@test2');
Route::get('coba3','CobaController@index');
Route::get('coba4','CobaController@test3');
Route::get('coba5','CobaController@test4');
Route::get('test/{id}','CobaController@binatang');
Route::resource('post','PostController');


