<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;
use App\Http\Controllers\tableController;
use App\Http\Controllers\userController;
use App\Http\Controllers\guideController;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\feedbackController;
use App\Http\Controllers\prototypeController;
use GuzzleHttp\Psr7\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {
    return view('user.user_list');
});//Route::get('/users', [userController::class,'users'])->middleware('checkCookie');


Route::get('/upc_list', function () {
    return view('upc');
});//Route::get('/users', [userController::class,'users'])->middleware('checkCookie');

Route::get('/api_request', function () {
    return view('api');
});//Route::get('/users', [userController::class,'users'])->middleware('checkCookie');





Route::get('/home', [testController::class,'home'])->middleware('checkCookie');

//controllers

Route::get('/homepage', [testController::class,'home']);
Route::get('/login', [testController::class,'login']);
Route::post('/loginCheck', [testController::class,'loginCheck']);

Route::post('/registration', [testController::class,'register']);
Route::get('/signup', [testController::class,'registrarion_blade'])->middleware('checkCookie');
Route::post('/confirm', [testController::class,'confirm']);
Route::get('/table', [tableController::class,'table'])->middleware('checkCookie');
Route::get('/table_list', [tableController::class,'table_list'])->middleware('checkCookie');
Route::get('/table/{table_name}', [tableController::class,'delete_table'])->middleware('checkCookie');




Route::post('/add_table', [tableController::class,'add_attribute_dB_table']);

Route::get('/profile', [testController::class,'profile'])->middleware('checkCookie');
Route::get('/view_Profile_Info', [userController::class,'view_Profile_Info'])->middleware('checkCookie');
Route::post('/update_profile', [userController::class,'update_profile'])->middleware('checkCookie');

Route::get('/logout', [testController::class,'logout']);

Route::get('/show_service_list', [testController::class,'show_service_list'])->middleware('checkCookie');

Route::get('/service', [testController::class,'service'])->middleware('checkCookie');
Route::get('/guide', [guideController::class,'guide'])->middleware('checkCookie');

Route::get('/feedbacks', [feedbackController::class,'feedback'])->middleware('checkCookie');
Route::get('/feed/{f_id}', [feedbackController::class,'view_feedback'])->middleware('checkCookie');
Route::post('/add_response', [feedbackController::class,'add_response'])->middleware('checkCookie');


/* --------------------------------------------------adddd img */
Route::post('/add_admin',[userController::class,'register'])->name('registration')->middleware('checkCookie');
/* ---------------------------------------------------------------- */


Route::get('/attribute', function () {
    return view('service.add_att', ['msg' => '']);
});
Route::get('/add_guide', function () {
    return view('guide.add_guide');
});
Route::post('/add_guide', [guideController::class,'add_guide']);
Route::post('/add_service', [tableController::class,'add_service']);
Route::post('/add_attribute', [tableController::class,'add_attribute']);
Route::get('/service/{service_id}', [serviceController::class,'delete_service'])->middleware('checkCookie');
Route::get('/user/{user_id}', [userController::class,'delete_user'])->middleware('checkCookie');
Route::get('/guide/{guide_id}', [guideController::class,'delete_guide'])->middleware('checkCookie');
Route::get('/{service_name}', [testController::class,'show_service_details']);




/* ===========================================PROTOTYPE============================================= */
/* Route::get('/get_started', function () {
    return view('prototype.get_started');
});

Route::get('/start', [prototypeController::class,'start']);

Route::get('/home', function () {
    return view('prototype.home');
});

Route::post('/login', function () {
    return view('prototype.login');
});

Route::post('/homec', function () {
    return view('prototype.footprint_home');
});

Route::post('/food-c', function () {
    return view('prototype.footprint_food');
});

Route::post('/shop-c', function () {
    return view('prototype.footprint_shopping');
});

Route::post('/your-c', function () {
    return view('prototype.your_footprint');
});

Route::get('/homepage', function () {
    return view('prototype.homepage');
});

Route::post('/service', [prototypeController::class,'service']);

Route::post('/calculate', [prototypeController::class,'calculate']);
?>

 */
