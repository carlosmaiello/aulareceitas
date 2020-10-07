<?php

use App\Http\Controllers\Site\ReceitaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ReceitaController::class, 'index']);
