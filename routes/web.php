<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MerendaController;


// lista de Merenda
Route::get('/', [MerendaController::class, 'index' ])->name('home');
Route::get('/cadastro', [MerendaController::class, 'create' ])->name('cadastro');
Route::post('/gravar', [MerendaController::class, 'store'])->name('gravar');
Route::get('/editar/{id}',[MerendaController::class, 'edit' ])->name('editar');
Route::put('/atualizar/{id}',[MerendaController::class, 'update'])->name('atualizar');
Route::delete('/excluir/{id}',[MerendaController::class, 'destroy'])->name('excluir');


