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

Auth::routes();

Route::get('pages', function() {
	return view('pages.homepage');
});

//Data Buku
Route::get('buku','bukucontroller@buku');
//------------------------------------------------//
Route::get('buku/cari', 'bukucontroller@cari');
//------------------------------------------------//
Route::get('buku/daftar', 'bukucontroller@daftar');
Route::get('buku/create','bukucontroller@create');
//------------------------------------------------------//
Route::get('buku/sinop/{buku}', 'bukucontroller@sinop');
//------------------------------------------------------//
Route::get('buku/{buku}','bukucontroller@show');
Route::get('buku/edit/{buku}','bukucontroller@edit');
Route::get('buku/delete/{buku}','bukucontroller@delete');
//Data Buku Post
Route::post('buku/{buku}/update','bukucontroller@update');
Route::post('buku','bukucontroller@store');


//pinjam
Route::get('pinjam','pinjamcontroller@pinjam');
//-----------------------CETAK PDF----------------------//
Route::get('pinjam/cetak_pdf/{pinjam}', 'pinjamcontroller@cetak_pdf');
//-------------------------------------------------------//
Route::get('pinjam/create','pinjamcontroller@create');
Route::get('pinjam/{pinjam}','pinjamcontroller@show');
Route::get('pinjam/edit/{pinjam}','pinjamcontroller@edit');
Route::get('pinjam/delete/{pinjam}','pinjamcontroller@delete');
//Data Buku Post
Route::post('pinjam/{pinjam}/update','pinjamcontroller@update');
Route::post('pinjam','pinjamcontroller@store');


//Anggota
Route::get('anggota','anggotacontroller@anggota');
Route::get('anggota/cari', 'anggotacontroller@cari');
Route::get('anggota/create','anggotacontroller@create');
Route::get('anggota/{anggota}','anggotacontroller@show');
Route::get('anggota/edit/{anggota}','anggotacontroller@edit');
Route::get('anggota/delete/{anggota}','anggotacontroller@delete');

//Data Buku anggota
Route::post('anggota/{anggota}/update','anggotacontroller@update');
Route::post('anggota','anggotacontroller@store');


//login
Route::get('/', 'HomeController@index')->name('homepage');
Route::get('homepage', 'HomeController@index')->name('homepage');
