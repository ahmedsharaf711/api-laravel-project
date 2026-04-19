<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SettingController;

Route::get('/settings', [SettingController::class, 'index']);



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');