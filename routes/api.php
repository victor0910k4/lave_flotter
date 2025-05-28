<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\AuthController;

Route::apiResource('persona', PersonaController::class)->names('api.persona');

        Route::post('login', [AuthController::class, 'store']);
    
    Route::post('register', [AuthController::class, 'store']);

    Route::post('logout', [AuthController::class, 'destroy']);