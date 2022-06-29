<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class testcontroller extends Controller
{
    public function datafun(){
        $blooddonners= DB::select('select*from donor_details');
        return view('test',['donor' =>$blooddonners]);
    }

}
