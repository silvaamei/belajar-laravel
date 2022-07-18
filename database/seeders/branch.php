<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class branch extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sB = [
            ['branchNo' => "B005",'bAdress' => "22 Deer Rd, London"],
            ['branchNo' => "B003",'bAdress' => "163 main st, Glasgow"],
            ['branchNo' => "B003",'bAdress' => "163 main st, Glasgow"],
            ['branchNo' => "B007",'bAdress' => "16 Argyll St, Aberdeen"],
            ['branchNo' => "B003",'bAdress' => "163 main st, Glasgow"],
            ['branchNo' => "B005",'bAdress' => "22 Deer Rd, London"],
        ];

        DB::table('branches')->insert($sB);
    }
}
