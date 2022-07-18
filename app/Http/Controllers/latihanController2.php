<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StaffBranch;

class latihanController2 extends Controller
{
    public function staffbranch(){
        $sB = staffbranch::all();
        return view('post.staffBranch', compact('sB'));
    }
}
