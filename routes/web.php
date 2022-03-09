<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user;
use GuzzleHttp\Middleware;

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

Route::get('/', function () {
    return view('register');
});


Route::post("registers",[user::class,"register"]);


Route::post("logins",[user::class,"logins"]);
Route::post("admins",[user::class,"admin"]);
    
Route::get("logins",[user::class,"login"]);
Route::get("welcomes",[user::class,"back"]);
    
Route::get("registers",[user::class,"registert"]);


Route::get("admi",[user::class,"admi"]);

Route::post("product",[user::class,"product"]);

Route::get("show/{name}",[user::class,"show"]);

Route::post("/deleting/{id}",[user::class,"deleting"]);

Route::get("/edit/{id}",[user::class,'editdata']);


Route::post("update",[user::class,"updatedata"]);

Route::get("/logout",function(){
    if(session()->has('user'))
    {
        session()->pull('user');
    }
    return redirect('login');
});

Route::get("/log",function(){
    if(session()->has('name'))
    {
        session()->pull('name');
    }
    return redirect('admin');
});
        
    
     Route::get("/login",function(){
        if(session()->has('user'))
        {
            return redirect('welcome');
        }
        return view('login');
    });

    Route::get("/welcome",function(){
        if(session()->has('user'))
        {
            return view('welcome');
        }
        return redirect('login');
    });


    Route::get("register",function(){
        if(session()->has('name'))
        {
            return redirect('app');
        }
        return view('register');
    });

     Route::get("/app" ,function(){
      if(session()->has('name'))
        {
            return view('app');
        }
        return redirect('admin');
     });

    Route::get("print/{name}",[user::class,'print']);

    
    Route::view("print","print");

    Route::view("app","app");
	
	 Route::view("edits","edits");
	 
	  Route::view("admin","admin");