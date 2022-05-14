<?php

use Illuminate\Support\Facades\Route;
use Wave\Http\Controllers\API\ApiController;
use Wave\Http\Controllers\API\AuthController;

// Auth
Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout']);
Route::post('refresh', [AuthController::class, 'refresh']);
Route::post('token', [AuthController::class, 'token']);

// BREAD
Route::get('/{datatype}', [ApiController::class, 'browse']);
Route::get('/{datatype}/{id}', [ApiController::class, 'read']);
Route::put('/{datatype}/{id}', [ApiController::class, 'edit']);
Route::post('/{datatype}', [ApiController::class, 'add']);
Route::delete('/{datatype}/{id}', [ApiController::class, 'delete']);
