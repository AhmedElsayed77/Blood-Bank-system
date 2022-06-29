<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class donorformcontroller extends Controller
{

    
    

    
     public function storefun(Request $request){
        $request=  DB::insert('insert into donor_details(name,email,number,age,bloodgroup,wieght,hieght) values(?,?,?,?,?,?,?)',
        [$request->name ,$request->email,$request->number, $request->age,$request->bloodgroup, $request->wieght, $request->hieght]);
         if ($request){
             return view('click');
         }
         else{
             return  " Please try to fill in the form again ";
         }
     }
}