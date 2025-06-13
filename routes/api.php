<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\AtaqueController;
use App\Http\Controllers\AuthController;

Route::apiResource('persona', PersonaController::class)->names('api.persona');
Route::apiResource('ataque', AtaqueController::class)->names('api.ataque');


        Route::post('login', [AuthController::class, 'login']);
    
    Route::post('register', [AuthController::class, 'register']);

Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);
