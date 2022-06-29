<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactcontroller extends Controller
{
    public function contactfun(){
        return view('contact');
    }
}
