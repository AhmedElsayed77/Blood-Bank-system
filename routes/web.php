<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\aboutcontroller;
use App\Http\Controllers\clickcontroller;
use App\Http\Controllers\contactcontroller;
use App\Http\Controllers\mapcontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagecontroller;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\userlogincontroller;
use App\Http\Controllers\donorformcontroller;
use App\Http\Controllers\profilecontoller;
use App\Http\Controllers\servicescontroller;
use App\Http\Controllers\testcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[pagecontroller::class ,'index'] );
Route::get('/bloodbank',[pagecontroller::class ,'index'] );
Route::get('/about',[aboutcontroller::class ,'aboutfun'] );
Route::get('/login ',[userlogincontroller::class ,'userfun'] );
Route::get('/contact ',[contactcontroller::class ,'contactfun'] );
Route::get('/services ',[servicescontroller::class ,'servicesfun'] );
Route::get('/map ',[mapcontroller::class ,'mapfun'] );
Route::get('/click',[clickcontroller::class ,'click']);
Route::get('/profile' ,[profilecontoller::class,'profun' ]);
Route::post('/register',[usercontroller::class , 'register']);
Route::post('/test', [donorformcontroller::class,'storefun']);
Route::post('/login',[userlogincontroller::class ,'login']);
Route::get('/report',[testcontroller::class ,'datafun']);




Route::group(['middleware' => 'myguest'],function(){
    Route::get('/signin',function(){
        return view('sign in user');
    
    });
    
    Route::post('/signin',function( Request $request){
        $email= $request->email;
           $password= $request->password;
      $result= DB::select('select * from users where email= ? and password= ?',[$email,$password]);
      
          if($result){
            $user=$result[0];
            session()->regenerate();
              session(['loggedin'=>True,'useremail'=>$user->email,'user'=>$user]);
             
                return view('profile');
    
            }else{
                return back()->with(['message'=>'Wrong email or Password'])->withInput();
           }
           
    });
});


Route::group(['middleware'=>'Mymid'],function(){
    Route::get('/profile',function(){

        return view('profile');
    });
    
    
    Route::get('/logout',function(){
    
        session()->invalidate();
        return redirect('/signin')->with(['message' => 'You are not logged in !']);
    });
    
    

});


