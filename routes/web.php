<?php

use App\Http\Controllers\Site\ReceitaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ReceitaController::class, 'index']);

Route::resource('receitas', ReceitaController::class);
Route::get('/receitas/delete/{id}', [ReceitaController::class, 'destroy'])->name('receitas.delete');