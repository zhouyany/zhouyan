<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\member;
Route::get('/a', function(){
    //return view('welcome');
   echo member::all();
});
//Route::get()
use App\category;
Route::get('/b',function(){
    return category::all();
});
use App\pdt_images;
Route::get('/c',function(){
    return pdt_images::all();
});
use App\pdt_content;
Route::get('/d',function(){
    return pdt_content::all();
});
use App\product;
Route::get('/e',function(){
    return product::all();
});








