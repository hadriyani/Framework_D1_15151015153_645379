<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Dosen;

class dosenController extends Controller
{
    public function awal()
    {
    	return "Hello dari dosenController";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$Dosen = new Dosen();
       	$Dosen->nama = 'hadriyani';
    	$Dosen->nip = '08134';
    	$Dosen->alamat = 'Jl. Ahmad Dahlan';
    	$Dosen->pengguna_id = '001';
    	$Dosen->save();
    	return "data dengan id {$Dosen->nama} telah disimpan";
    }
}