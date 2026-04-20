<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SettingController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\DistrictController;


///// settings module 
Route::get('/settings', [SettingController::class, 'index']);



///// cities module 
Route::get('/cities', [CityController::class, 'index']);



///// districts module 
Route::get('/districts', [DistrictController::class, 'index']);


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');