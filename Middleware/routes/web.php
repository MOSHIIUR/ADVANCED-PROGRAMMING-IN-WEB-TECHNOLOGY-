<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;





Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [testController::class,'home'])->middleware('checkCookie');

//controllers

Route::get('/homepage', [testController::class,'home']);
Route::get('/login', [testController::class,'login']);
Route::post('/loginCheck', [testController::class,'loginCheck']);

//Route::get('/registartion/{name}', [testController::class,'register'])->name('pltops');

//cookies---------------------------------------------------------
//Route::get('/setCookie', [testController::class,'setCookie']);
//Route::get('/cookie/get','CookieController@getCookie');

Route::post('/registration', [testController::class,'register']);
Route::get('/signup', [testController::class,'registrarion_blade'])->middleware('checkCookie');
Route::post('/confirm', [testController::class,'confirm']);


Route::get('/profile', [testController::class,'profile'])->middleware('checkCookie');
Route::post('/viewProfileInfo', [testController::class,'viewProfileInfo']);

Route::get('/logout', [testController::class,'logout']);


?>


