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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('makul', 'MakulController@index')->name('makul');
Route::get('tambah-makul', 'MakulController@create')->name('tambah.makul');
Route::post('simpan-makul', 'MakulController@store')->name('simpan.makul');

Route::get('edit-makul/{id}', 'MakulController@edit')->name('edit.makul');
Route::post('makul-update/{id}', 'MakulController@update')->name('makul.update');
Route::get('hapus-makul/{id}', 'MakulController@destroy')->name('hapus.makul');

//Mahasiswa

Route::get('mahasiswa', 'MahasiswaController@index')->name('mahasiswa');
Route::get('tambah-mahasiswa', 'MahasiswaController@create')->name('tambah.mahasiswa');
Route::post('simpan-mahasiswa', 'MahasiswaController@store')->name('simpan.mahasiswa');

Route::get('edit-mahasiswa/{id}', 'MahasiswaController@edit')->name('edit.mahasiswa');
Route::post('update-mahasiswa/{id}', 'MahasiswaController@update')->name('update.mahasiswa');
Route::get('hapus-mahasiswa/{id}', 'MahasiswaController@destroy')->name('hapus.mahasiswa');

//Nilai

Route::get('nilai', 'NilaiController@index')->name('nilai');
Route::get('tambah-nilai', 'NilaiController@create')->name('tambah.nilai');
Route::post('simpan-nilai', 'NilaiController@store')->name('simpan.nilai');

Route::get('edit-nilai/{id}', 'NilaiController@edit')->name('edit.nilai');
Route::post('update-nilai/{id}', 'NilaiController@update')->name('update.nilai');
Route::get('hapus-nilai/{id}', 'NilaiController@destroy')->name('hapus.nilai');
