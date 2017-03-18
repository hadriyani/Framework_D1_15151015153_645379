<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\jadwal_matakuliah;

class jadwal_matakuliahController extends Controller
{
    public function awal()
    {
    	return "Hello dari jadwal_matakuliahController";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$Jadwal_matakuliah = new Jadwal_matakuliah();
       	$Jadwal_matakuliah->mahasiswa_id = '1';
    	$Jadwal_matakuliah->ruangan_id = '1';
    	$Jadwal_matakuliah->dosen_matakuliah_id = '1';
    	$Jadwal_matakuliah->save();
    	return "data dengan id {$Jadwal_matakuliah->mahasiswa_id} telah disimpan";
    }
}
