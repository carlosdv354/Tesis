<?php

use App\Http\Controllers\mainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [mainController::class, 'home']);
Route::get('/contacto', [mainController::class, 'contact']);