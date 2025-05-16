<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PersonaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/persona', [PersonaController::class, 'index'])->name('categoria_funcindex');
Route::get('/persona/create', [PersonaController::class, 'create'])->name('persona.create');
Route::post('/persona', [PersonaController::class, 'store'])->name('persona.store');
Route::get('/persona/{persona}', [PersonaController::class, 'show'])->name('persona.show');
Route::get('persona/{persona}/edit', [PersonaController::class, 'edit'])->name('persona.edit');
Route::put('/persona/{persona}', [PersonaController::class, 'update'])->name('persona.update');
Route::delete('/persona/{persona}', [PersonaController::class, 'destroy'])->name('persona.destroy');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
