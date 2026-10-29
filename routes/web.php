<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/',function(){
    return view('home');
});
 

Route::get('/contact',function(){
    return view('contact');
});



//post route 

Route::get('/user-form',function(){
    return view ('user_form');
});

Route::post('get-userdata',function(Request $request){
    dd($request-> all());
});

Route::get('admin',function(){
    return view ('admin');
});

