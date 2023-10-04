<?php

use App\Http\Controllers\RegistroController;
use App\Http\Controllers\welcomeController;
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

// rutas de navegacion (vistas)
Route::get('/', function () {
    return view('welcome');
});

Route::get('/registro', [welcomeController::class, 'goRegistro'])->name("registro");

Route::get('/login', [welcomeController::class, 'goLogin'])->name("login");

Route::get('/que_somos', [welcomeController::class, 'goQueSomos'])->name("que_somos");

//rutas de medotos

Route::get('/', [welcomeController::class, 'index'])->name("welcome.index");

Route::post('/create',[RegistroController::class, 'registrar'])->name('create');
