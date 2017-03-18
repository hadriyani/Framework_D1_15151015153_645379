<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\mahasiswa;

class mahasiswaController extends Controller
{
    public function awal()
    {
    	return "Hello dari mahasiswaController";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$Mahasiswa = new Mahasiswa();
       	$Mahasiswa->nama = 'Ahmad Shofiyurrahman';
    	$Mahasiswa->nim = '0808';
    	$Mahasiswa->alamat = 'Jl. Ahmad Dahlan';
    	$Mahasiswa->pengguna_id = '001';
    	$Mahasiswa->save();
    	return "data dengan id {$Mahasiswa->nama} telah disimpan";
    }
}
