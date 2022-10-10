<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;




Route::get('/', function () {
    return view('welcome');
});


Route::get('/index', function () {
    return view('Home');
});

//controllers

Route::get('/homepage', [testController::class,'home']);

//Route::get('/registartion/{name}', [testController::class,'register'])->name('pltops');

Route::post('/registration', [testController::class,'register']);


?>


