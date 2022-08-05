<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/',function (){
    return view('layouts/home');
});
Route::get('/home/operator',function (){
    return view('layouts/selectseat');
});
Route::get('/operator/confirm',function (){
    return view('layouts/confirmticket');
});

