<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\matakuliah;

class matakuliahController extends Controller
{
    public function awal()
    {
    	return "Hello dari matakuliahController";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$Matakuliah = new Matakuliah();
       	$Matakuliah->title = 'pemrograman web';
    	$Matakuliah->keterangan = 'wajib';
    	$Matakuliah->save();
    	return "data dengan id {$Matakuliah->title} telah disimpan";
    }
}
