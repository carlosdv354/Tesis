<?php

use App\Http\Controllers\mainController;
use App\Http\Controllers\mailController;
use Illuminate\Support\Facades\Route;

//GET Routes
Route::get('/', [mainController::class, 'home'])->name('home');
Route::get('/servicios', [mainController::class, 'services'])->name('services');
Route::get('/nosotros', [mainController::class, 'aboutUs'])->name('aboutUs');
Route::get('/contactos', [mainController::class, 'contacts'])->name('contacts');

//POST Routes
Route::post('/contactos/enviar', [mailController::class, 'enviar'])->name('enviar');