<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mapcontroller extends Controller
{
    public function mapfun(){
        return view('maps');
    }
}
