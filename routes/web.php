<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\mainController;
use App\Http\Controllers\mailController;

#use Illuminate\Auth\Middleware\Authenticate;

use Illuminate\Support\Facades\Route;

//Match method
Route::match(['get', 'post'], '/calendario/rcv_calendar', [adminController::class, 'rcv_calendar'])->middleware('auth')->name('rcv_calendar');
Route::match(['get', 'post'], "/login", [adminController::class, 'login'])->name('login');


//GET Routes
Route::get('/', [mainController::class, 'home'])->name('home');
Route::get('/servicios', [mainController::class, 'services'])->name('services');
Route::get('/nosotros', [mainController::class, 'aboutUs'])->name('aboutUs');
Route::get('/contactos', [mainController::class, 'contacts'])->name('contacts');

Route::get('/calendario', [adminController::class, 'calendar'])->middleware("auth")->name('calendar');
Route::get('/add_admin_form', [adminController::class, 'add_admin_form'])->name('add_admin_form');

Route::get('/test_tiket', [adminController::class, 'test_tiket'])->name('test_tiket');


Route::get("/logout",[adminController::class,'logout'])->name('logout');
Route::get("/verTikets", [adminController::class, 'verTikets'])->name('verTikets');
//Route::get('/calendario/rcv_calendar', [adminController::class, 'rcv_calendar'])->name('rcv_calendar');

//POST Routes
Route::post('/contactos/enviar', [mailController::class, 'enviar'])->name('enviar');
Route::post('/add_admin', [adminController::class, 'add_admin'])->name('add_admin');
Route::post('/add_tiket',[adminController::class,'add_tiket'])->middleware("auth")->name('add_tiket');
Route::post('/rcv_form', [adminController::class, 'rcv_form'])->middleware("auth")->name('rcv_form');

