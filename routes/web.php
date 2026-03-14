<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MerendaController;


// lista de Merenda
Route::get('/', [MerendaController::class, 'index' ])->name('home');

Route::get('/32218', [MerendaController::class, 'turma' ])->name('turma');

Route::get('acesso-a-informacao/institucional/contato', [MerendaController::class , 'teste'])->name('teste');