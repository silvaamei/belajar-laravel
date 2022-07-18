<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function menu(){
        $a = [
            array('beranda' => "Beranda",
                'berita' => "Berita",
                'Berita' =>['Politik','Mancanegara'],
                'olahraga' => "Olahraga",
                'Olahraga' => ['Sepak Bola','Bulu Tangkis'],
                'tentang' => "Tentang"),
        ];
        return view('pages1.menu',['menu' => $a]);
    }

    public function dosen(){
        $b = [
            ['Id' => 1, 'namadosen' => 'Yusuf Bachtiar', 'matkul' => 'Pemrograman Mobile',
              'mahasiswa' =>[
                ['nama' =>'Muhammad Sholeh','nilai'=>78],
                ['nama' =>'Jujun Junaedi','nilai'=>85],
                ['nama' =>'Mamat Alkatin','nilai'=>90],
                ['nama' =>'Ubay holin','nilai'=>87],
                ['nama' =>'Fadillah','nilai'=>95]
              ],
            ],
            ['Id' => 2, 'namadosen' => 'Yaris Riyadi', 'matkul' => 'Pemrograman Mobile',
              'mahasiswa' =>[
                ['nama' =>'Alfred McTomminay','nilai'=>67],
                ['nama' =>'Bruno Kasmir','nilai'=>90],
                ['nama' =>'Akid Hendra','nilai'=>50],
                ['nama' =>'Dany Irawan','nilai'=>70],
                ['nama' =>'Chandra Mega Putra','nilai'=>60]
              ]
            ]
        ];
        return view('pages1.dosen',['dosen' => $b]);
    }

    public function tv()
    {
        $tv = [

            ['stasiun' => 'TVRI','Siaran' => 'Berita', 'Jam_tayang' => '18:00','tanggal' => '13 july 2022'],
            ['stasiun' => 'NET TV','Siaran' => 'Komedi', 'Jam_tayang' => '17:00','tanggal' => '14 july 2022'],
            ['stasiun' => 'BEINSPORT','Siaran' => 'Olahraga', 'Jam_tayang' => '16:00','tanggal' => '12 july 2022'],
            ['stasiun' => 'Ochannel','Siaran' => 'Berita', 'Jam_tayang' => '15:00','tanggal' => '11 july 2022'],
            ['stasiun' => 'Indosiar','Siaran' => 'Dangdut', 'Jam_tayang' => '14:00','tanggal' => '13 july 2022'],
        ];
        return view('pages1.tv',['tv' => $tv]);
    }    

    public function belanja(){
        $belanja = [
            ['nama' => "Alfian", 'membeli'=>
            [
                ['beli'=> "Sepatu", 'harga' => 250000],
                ['beli'=> "Baju", 'harga' => 100000],
                ['beli'=> "Celana", 'harga' => 150000],
                ['beli'=> "Kupluk", 'harga' => 100000],
            ]
            ],

            ['nama' => "Dida", 'membeli'=>
            [
                ['beli'=> "Topi", 'harga' => 100000],
                ['beli'=> "Baju", 'harga' => 75000],
                ['beli'=> "Celana", 'harga' => 125000],
            ]
            ]
    ];

    return view('pages1.belanja',['belanja' => $belanja]);

}
}