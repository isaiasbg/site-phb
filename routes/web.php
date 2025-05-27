<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\EstabelecimentoController;

Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/contato', [ContatoController::class, 'show'])->name('contato');
Route::post('/contato', [ContatoController::class, 'enviar']);

Route::get('/estabelecimentos', [EstabelecimentoController::class, 'index'])->name('estabelecimentos');