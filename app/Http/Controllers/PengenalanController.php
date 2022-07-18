<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengenalanController extends Controller
{
    //
    
    public function pengenalan(){
        echo "Passing Data Controller ke View<br>";
        $nama = "Silva Meilani";
        $umur = "17";
        return view('pages1.pengenalan', compact('nama','umur'));
    }

    public function intro($nama,$alamat,$umur){
        return view('pages1.intro', compact('nama','alamat','umur'));
        // tampilan output
        // localhost.8000/bay/bandung/23
    }

    public function siswa(){
        $a = [
            array('id' => 1, 'nama' => 'Silva', 'umur' => 17, 'kelas' => 'XII RPL 1', 'mapel' => ['B.Indonesia', 'B.Inggris']),
            array('id' => 2, 'nama' => 'Saffitri', 'umur' => 17, 'kelas' => 'XII RPL 1', 'mapel' => ['MTK', 'IPA']),
            array('id' => 3, 'nama' => 'Vivi', 'umur' => 17, 'kelas' => 'XII RPL 1', 'mapel' => ['SIMDIG', 'B.Sunda']),
            array('id' => 4, 'nama' => 'Rafey', 'umur' => 16, 'kelas' => 'XII RPL 1', 'mapel' => ['FISIKA', 'KWU']),
            array('id' => 5, 'nama' => 'Syifa', 'umur' => 17, 'kelas' => 'XII RPL 1', 'mapel' => ['PAI', 'Al-Quran']),
        ];

        // dd($a);

        return view('/pages1.siswa',['siswa' => $a]);
    }
}