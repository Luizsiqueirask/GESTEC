<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// I Removed security middleware. 'middleware' => 'auth:api'. Because to get faster the datas.
Route::group(['namespace' => 'API'], function(){
    Route::apiResource('patient',         'PatientController')->except(['store', 'update', 'destroy']);
});

