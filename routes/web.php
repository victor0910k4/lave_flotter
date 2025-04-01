<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/categorias_func', [CategoriaFuncionarioController::class, 'index'])->name('categoria_func.index');
Route::get('/categorias_func/create', [CategoriaFuncionarioController::class, 'create'])->name('categoria_func.create');
Route::post('/categorias_func', [CategoriaFuncionarioController::class, 'store'])->name('categoria_func.store');
Route::get('/categorias_func/{categoria_func}', [CategoriaFuncionarioController::class, 'show'])->name('categoria_func.show');
Route::get('/categoria_func/{categoria_func}/edit', [CategoriaFuncionarioController::class, 'edit'])->name('categoria_func.edit');
Route::put('/categorias_func/{categoria_func}', [CategoriaFuncionarioController::class, 'update'])->name('categoria_func.update');
Route::delete('/categorias_func/{categoria_func}', [CategoriaFuncionarioController::class, 'destroy'])->name('categoria_func.destroy');

Route::get('/categorias_prod', [CategoriaProdutoController::class, 'index'])->name('categoria_prod.index');
Route::get('/categorias_prod/create', [CategoriaProdutoController::class, 'create'])->name('categoria_prod.create');
Route::post('/categorias_prod', [CategoriaProdutoController::class, 'store'])->name('categoria_prod.store');
Route::get('/categorias_prod/{categoria_prod}', [CategoriaProdutoController::class, 'show'])->name('categoria_prod.show');
Route::get('/categoria_prod/{categoria_prod}/edit', [CategoriaProdutoController::class, 'edit'])->name('categoria_prod.edit');
Route::put('/categorias_prod/{categoria_prod}', [CategoriaProdutoController::class, 'update'])->name('categoria_prod.update');
Route::delete('/categorias_prod/{categoria_prod}', [CategoriaProdutoController::class, 'destroy'])->name('categoria_prod.destroy');

Route::get('/relatorios_vendas', [CategoriaProdutooController::class, 'index'])->name('categoria_prod.index');
Route::get('/relatorios_vendas/create', [CategoriaProdutooController::class, 'create'])->name('categoria_prod.create');
Route::post('/relatorios_vendas', [CategoriaProdutooController::class, 'store'])->name('categoria_prod.store');
Route::get('/relatorios_vendas/{categoria_prod}', [CategoriaProdutooController::class, 'show'])->name('categoria_prod.show');
Route::get('/relatorio_vendas/{categoria_prod}/edit', [CategoriaProdutooController::class, 'edit'])->name('categoria_prod.edit');
Route::put('/relatorios_vendas/{categoria_prod}', [CategoriaProdutooController::class, 'update'])->name('categoria_prod.update');
Route::delete('/relatorios_vendas/{categoria_prod}', [CategoriaProdutooController::class, 'destroy'])->name('categoria_prod.destroy');

Route::get('/produtos', [ProdutosController::class, 'index'])->name('produto.index');
Route::get('/produtos/create', [ProdutosController::class, 'create'])->name('produto.create');
Route::post('/produtos', [ProdutosController::class, 'store'])->name('produto.store');
Route::get('/produtos/{produto}', [ProdutosController::class, 'show'])->name('produto.show');
Route::get('/produto/{produto}/edit', [ProdutosController::class, 'edit'])->name('produto.edit');
Route::put('/produtos/{produto}', [ProdutosController::class, 'update'])->name('produto.update');
Route::delete('/produtos/{produto}', [ProdutosController::class, 'destroy'])->name('produto.destroy');

Route::get('/funcionarios', [FuncionarioController::class, 'index'])->name('categoria_prod.index');
Route::get('/funcionarios/create', [FuncionarioController::class, 'create'])->name('categoria_prod.create');
Route::post('/funcionarios', [FuncionarioController::class, 'store'])->name('categoria_prod.store');
Route::get('/funcionarios/{funcionario}', [FuncionarioController::class, 'show'])->name('categoria_prod.show');
Route::get('/funcionario/{funcionario}/edit', [FuncionarioController::class, 'edit'])->name('categoria_prod.edit');
Route::put('/funcionarios/{funcionario}', [FuncionarioController::class, 'update'])->name('categoria_prod.update');
Route::delete('/funcionarios/{funcionario}', [FuncionarioController::class, 'destroy'])->name('categoria_prod.destroy');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
