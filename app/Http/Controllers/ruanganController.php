<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\ruangan;

class ruanganController extends Controller
{
    public function awal()
    {
    	return "Hello dari ruanganController";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$Ruangan = new Ruangan();
       	$Ruangan->title = 'ruangan 1';
    	$Ruangan->save();
    	return "data dengan id {$Ruangan->nama} telah disimpan";
    }
}
