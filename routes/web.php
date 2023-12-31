<?php

use App\http\Controllers\RegistroController;
use App\http\Controllers\LoginController;
use App\http\Controllers\ClienteController;
use App\http\Controllers\CrearUsuarioController;
use App\http\Controllers\LogoutController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registro', [RegistroController::class, 'index'])->name('registre');
Route::post('/registro', [RegistroController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('loginIndex');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/vista', [ClienteController::class, 'index'])->name('vista');

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::resource('crud', ClienteController::class);

Route::get('/Crear', [CrearUsuarioController::class, 'index'])->name('Crear');




