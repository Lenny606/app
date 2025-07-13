<?php

use App\Http\Controllers\TestModelController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


//LOGIN
Route::post('/auth/login', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('testModel', TestModelController::class);
