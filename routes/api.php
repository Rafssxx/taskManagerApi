<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::post('auth', [UserController::class, 'login']);
Route::resource('users',\App\Http\Controllers\UserController::class);

Route::middleware('auth:sanctum')->get('/check-auth', function () {
    return response()->json(['authenticated' => true]);
});
