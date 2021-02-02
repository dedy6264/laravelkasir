<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
route::get('/','TokohidupController@index');
route::get('/create','OneController@create');
route::post('/store','OneController@store');
route::get('/edit/{id}','OneController@edit');
route::get('/delete/{id}','OneController@delete');
route::post('/update','OneController@update');

//data produk
route::get('/add_p','TokohidupController@create');
route::get('/data_p','TokohidupController@data_produk');
route::post('/simpan_p','TokohidupController@store');
route::get('/ubah/{id}','TokohidupController@edit');
route::get('/hapus/{id}','TokohidupController@delete');
route::post('/simpan_ubah','TokohidupController@update');
route::get('/nyoba','TokohidupController@nyb');
//data penjualan
Route::get('/penjualan_h','PenjualanController@index');
Route::get('/penjualan_add','PenjualanController@create');