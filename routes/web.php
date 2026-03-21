<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MerendaController;


// lista de Merenda
Route::get('/', [MerendaController::class, 'index' ])->name('home');
Route::get('/cadastro', [MerendaController::class, 'create' ])->name('cadastro');
Route::post('/gravar', [MerendaController::class, 'store'])->name('gravar');

