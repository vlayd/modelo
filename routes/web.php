<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('index');

//Se logado
Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::prefix('usuario')->group(function () {
            Route::get('/', [UserController::class, 'index'])->name('usuario');
            Route::get('/outra_pagina', [UserController::class, 'outraPagina'])->name('usuario.outra_pagina');
            Route::get('/create', [UserController::class, 'create'])->name('usuario.create');
            Route::get('/edit/{id}', [UserController::class, 'edit'])->name('usuario.edit');
            Route::get('/modal_ajax', [UserController::class, 'modalAjax'])->name('usuario.modal_ajax');
            Route::get('/modal_reload', [UserController::class, 'modalReload'])->name('usuario.modal_reload');
            Route::post('/store', [UserController::class, 'store'])->name('usuario.store');
            Route::post('/delete/{id}', [UserController::class, 'delete'])->name('usuario.delete');
    });
});

//Se nõa logado
Route::middleware(['guest'])->group(function () {
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});
