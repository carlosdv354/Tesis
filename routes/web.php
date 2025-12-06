<?php

use App\Http\Controllers\mainController;
use App\Http\Controllers\mailController;
use Illuminate\Support\Facades\Route;

//GET Routes
Route::get('/', [mainController::class, 'home'])->name('home');
Route::get('/contactos', [mainController::class, 'contacts'])->name('contactos');

//POST Routes
Route::post('/contactos/enviar', [mailController::class, 'enviar'])->name('enviar');