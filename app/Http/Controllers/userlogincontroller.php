<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userlogincontroller extends Controller
{
    public function userfun()
    {
        return view('sign in user');
    } 


//     public function login(Request $request)
//     {
      
//        $email= $request->email;
//        $password= $request->password;
    
//     $passwordEnc= Hash::make($password);
//     DB::insert('insert into users(email,password) values(?,?)',[$email,$passwordEnc]);
//     $userId = DB::getpdo()->lastinsertid();
//     $result = DB::select('select id,email from users where id = ?', [$userId]);
//         $user = null;
//         if($result){
//             $user = $result[0];
//             return view('profile');
//     }
    
    

// }

}
