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

Route::get('/toko', 'TokoController@home');
Route::get('/toko/about', 'TokoController@about');
Route::get('/toko/contact', 'TokoController@contact');

Route::get('/barang', 'BarangController@index');
Route::get('/barang/tambah', 'BarangController@tambah');
Route::post('/barang/kirim_data', 'BarangController@kirim_data');
Route::get('/barang/edit/{id}', 'BarangController@edit');
Route::get('/barang/hapus/{id}', 'BarangController@hapus');
Route::post('/barang/simpan', 'BarangController@simpan_edit');
Route::get('/barang/cari', 'BarangController@cari');

Route::get('/upload', 'UploadController@upload');
Route::post('/upload/proses', 'UploadController@proses');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
