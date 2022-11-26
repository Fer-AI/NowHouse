<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\inmueble_controller;
use App\Http\Controllers\tipo_controller;
use App\Http\Controllers\login_controller;

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

Route::post('login', [login_controller::class, 'login']);
    Route::group(['middleware'=>'auth:api'],function(){

        Route::group(['prefix'=>'inmueble'],function(){
        Route::get('list', [inmueble_controller::class , 'index']);
        Route::post('delete', [inmueble_controller::class , 'delete']);
        Route::post('save', [inmueble_controller::class , 'save']); 
        });

    Route::group(['prefix'=>'tipo'],function(){
        Route::get('list', [tipo_controller::class , 'index']);
        Route::post('delete', [tipo_controller::class , 'delete']);
        Route::post('save', [tipo_controller::class , 'save']);
        });
});


