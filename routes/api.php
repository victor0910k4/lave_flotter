<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;

Route::apiResource('personas', PersonaController::class)->names('api.persona');

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
