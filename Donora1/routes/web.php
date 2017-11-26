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
    return view('index');
});

Route::get('/pengambilandarah', function(){
	return view('pengambilan_darah');
});

Route::get('/ambildarah/{id}', 'HomeController2@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function () {
    return view('dosen.awal');
});

Route::get('rumahsakit', 'RumahSakitController@index');
Route::get('rumahsakit/tambah','RumahSakitController@create');
Route::post('rumahsakit/simpan','RumahSakitController@store');
Route::get('rumahsakit/edit/{rumahsakit}','RumahSakitController@edit');
Route::post('rumahsakit/edit/{rumahsakit}','RumahSakitController@update');
Route::get('rumahsakit/lihat/{rumahsakit}','RumahSakitController@show');
Route::get('rumahsakit/hapus/{rumahsakit}','RumahSakitController@destroy');

Route::get('darah', 'PengambilanController@index');
Route::post('darah/simpan','PengambilanController@store');
Route::get('darah/edit/{rumahsakit}','RumahSakitController@edit');
Route::post('darah/edit/{rumahsakit}','RumahSakitController@update');
Route::get('darah/lihat/{rumahsakit}','RumahSakitController@show');
Route::get('darah/hapus/{rumahsakit}','RumahSakitController@destroy');


