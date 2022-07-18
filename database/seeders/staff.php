<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class staff extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sB = [
            ['staffNo' => "S1.21",'sName' =>"John White",'position' => "Manager",'salary' => "30000",'branchNo' => "B005"],
            ['staffNo' => "SG37",'sName' =>"Ann Beach",'position' => "Assistant",'salary' => "12000",'branchNo' => "B003"],
            ['staffNo' => "SG14",'sName' =>"David Food",'position' => "Supervisior",'salary' => "18000",'branchNo' => "B003"],
            ['staffNo' => "SA9",'sName' =>"Marry Howe",'position' => "Assistant",'salary' => "9000",'branchNo' => "B007"],
            ['staffNo' => "SG5",'sName' =>"Susan Brand",'position' => "Manager",'salary' => "24000",'branchNo' => "B003"],
            ['staffNo' => "SL41",'sName' =>"Julie Lee",'position' => "Assistant",'salary' => "9000",'branchNo' => "B005"],
        ];

        DB::table('staff')->insert($sB);
    }
}
