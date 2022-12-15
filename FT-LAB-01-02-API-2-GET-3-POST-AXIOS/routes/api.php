<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;
use App\Http\Controllers\userController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::post('login', [testController::class, 'logincheck']);
Route::post('register', [testController::class, 'register']);
Route::post('insert_upc', [testController::class, 'insert_upc']);
Route::get('users', [userController::class, 'users']);
Route::get('upc', [testController::class, 'upc']);
Route::get('user', [testController::class, 'profile_api']);
Route::delete('/delete/{id}', [userController::class, 'delete_user']);
Route::get('/api', [testController::class, 'api']);
Route::delete('/delete_api/{id}', [testController::class, 'sendmail']);
Route::delete('/delete_upc/{upc}', [testController::class, 'delete_upc']);
