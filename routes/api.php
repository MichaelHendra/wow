<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::apiResource('/char', App\Http\Controllers\CharacterController::class);
Route::apiResource('/akun', App\Http\Controllers\AkunController::class);
