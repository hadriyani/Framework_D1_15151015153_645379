<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

	/*Route::get('/', function () {
    return view('welcome');
    Route::get('hello-world', function () {
    return('Hello World');
    Route::get('pengguna/{pengguna}', function ($pengguna) {
    return "Hallo World dari pengguna $pengguna";
});*/

Route::auth();

/*Route::get('/home', 'HomeController@index');*/
Route::get('pengguna','PenggunaController@awal');
Route::get('pengguna/tambah','PenggunaController@tambah');

Route::get('Dosen','dosenController@awal');
Route::get('Dosen/tambah','dosenController@tambah');

Route::get('Mahasiswa','mahasiswaController@awal');
Route::get('Mahasiswa/tambah','mahasiswaController@tambah');

Route::get('Ruangan','ruanganController@awal');
Route::get('Ruangan/tambah','ruanganController@tambah');

Route::get('Matakuliah','matakuliahController@awal');
Route::get('Matakuliah/tambah','matakuliahController@tambah');

Route::get('Dosen_matakuliah','dosen_matakuliahController@awal');
Route::get('Dosen_matakuliah/tambah','dosen_matakuliahController@tambah');

Route::get('Jadwal_matakuliah','jadwal_matakuliahController@awal');
Route::get('Jadwal_matakuliah/tambah','jadwal_matakuliahController@tambah');