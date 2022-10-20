<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;




Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('Home');
});

//controllers

Route::get('/homepage', [testController::class,'home']);
Route::get('/login', [testController::class,'login']);
Route::post('/loginCheck', [testController::class,'loginCheck']);

//Route::get('/registartion/{name}', [testController::class,'register'])->name('pltops');

//cookies---------------------------------------------------------
//Route::get('/setCookie', [testController::class,'setCookie']);
//Route::get('/cookie/get','CookieController@getCookie');

Route::post('/registration', [testController::class,'register']);
Route::post('/confirm', [testController::class,'confirm']);


Route::get('/profile', [testController::class,'profile']);
Route::post('/viewProfileInfo', [testController::class,'viewProfileInfo']);



?>


