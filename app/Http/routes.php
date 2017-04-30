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

//	Route::auth();

/*Route::get('/home', 'HomeController@index');*/

Route::get('/login','sesiController@form');
Route::post('/login','sesiController@validasi');
Route::get('/logout','sesiController@logout');
Route::post('/','sesiController@index');

Route::group(['middleware'=>'autentifikasiuser'],function()
{

Route::get('pengguna','PenggunaController@awal');
Route::get('pengguna/tambah','PenggunaController@tambah');

Route::get('dosen','dosenController@awal');
Route::get('dosen/tambah','dosenController@tambah');

Route::get('mahasiswa','mahasiswaController@awal');
Route::get('mahasiswa/tambah','mahasiswaController@tambah');

Route::get('ruangan','ruanganController@awal');
Route::get('ruangan/tambah','ruanganController@tambah');

Route::get('matakuliah','matakuliahController@awal');
Route::get('matakuliah/tambah','matakuliahController@tambah');

Route::get('dosen_matakuliah','dosen_matakuliahController@awal');
Route::get('dosen_matakuliah/tambah','dosen_matakuliahController@tambah');

Route::get('jadwal_matakuliah','jadwal_matakuliahController@awal');
Route::get('jadwal_matakuliah/tambah','jadwal_matakuliahController@tambah');

Route::get('ujiHas','relationshiprebornController@ujiHas');
Route::get('ujiDoesntHave','relationshiprebornController@ujiDoesntHave');

#cek

Route::get('pengguna/{pengguna}','penggunaController@lihat');
Route::post('pengguna/simpan','penggunaController@simpan');
Route::get('pengguna/edit/{pengguna}','penggunaController@edit');
Route::post('pengguna/edit/{pengguna}','penggunaController@update');
Route::get('pengguna/hapus/{pengguna}','penggunaController@hapus');

Route::get('matakuliah/{matakuliah}','matakuliahController@lihat');
Route::post('matakuliah/simpan','matakuliahController@simpan');
Route::get('matakuliah/edit/{matakuliah}','matakuliahController@edit');
Route::post('matakuliah/edit/{matakuliah}','matakuliahController@update');
Route::get('matakuliah/hapus/{matakuliah}','matakuliahController@hapus');

Route::get('ruangan/{ruangan}','ruanganController@lihat');
Route::post('ruangan/simpan','ruanganController@simpan');
Route::get('ruangan/edit/{ruangan}','ruanganController@edit');
Route::post('ruangan/edit/{ruangan}','ruanganController@update');
Route::get('ruangan/hapus/{ruangan}','ruanganController@hapus');

Route::get('mahasiswa/{mahasiswa}','mahasiswaController@lihat');
Route::post('mahasiswa/simpan','mahasiswaController@simpan');
Route::get('mahasiswa/edit/{mahasiswa}','mahasiswaController@edit');
Route::post('mahasiswa/edit/{mahasiswa}','mahasiswaController@update');
Route::get('mahasiswa/hapus/{mahasiswa}','mahasiswaController@hapus');

Route::get('dosen/{dosen}','dosenController@lihat');
Route::post('dosen/simpan','dosenController@simpan');
Route::get('dosen/edit/{dosen}','dosenController@edit');
Route::post('dosen/edit/{dosen}','dosenController@update');
Route::get('dosen/hapus/{dosen}','dosenController@hapus');

Route::get('jadwal_matakuliah/{jadwal_matakuliah}','jadwal_matakuliahController@lihat');
Route::post('jadwal_matakuliah/simpan','jadwal_matakuliahController@simpan');
Route::get('jadwal_matakuliah/edit/{jadwal_matakuliah}','jadwal_matakuliahController@edit');
Route::post('jadwal_matakuliah/edit/{jadwal_matakuliah}','jadwal_matakuliahController@update');
Route::get('jadwal_matakuliah/hapus/{jadwal_matakuliah}','jadwal_matakuliahController@hapus');

Route::get('dosen_matakuliah/{dosen_matakuliah}','dosen_matakuliahController@lihat');
Route::post('dosen_matakuliah/simpan','dosen_matakuliahController@simpan');
Route::get('dosen_matakuliah/edit/{dosen_matakuliah}','dosen_matakuliahController@edit');
Route::post('dosen_matakuliah/edit/{dosen_matakuliah}','dosen_matakuliahController@update');
Route::get('dosen_matakuliah/hapus/{dosen_matakuliah}','dosen_matakuliahController@hapus');

});

Route::get('/',function (Illuminate\Http\Request $request)
{
	echo "ini adalah request dari method get". $request->nama;
});

use Illuminate\Http\Request;
Route::get('/',function ()
{
	echo Form::open(['url'=>'/']).
		Form::label('nama').
		Form::text('nama',null).
		Form::submit('kirim').
		Form::close();
});

Route::post('/',function (Request $request)
{
	echo "Hasil dari Form input tadi nama : ".$request->nama;
});