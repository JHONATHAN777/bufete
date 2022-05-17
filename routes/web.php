<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbogadoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\CasoController;

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

Auth::routes();

Route::resource('categorias', App\Http\Controllers\CategoriaController::class);
Route::resource('abogados', App\Http\Controllers\AbogadoController::class);
Route::resource('estados', App\Http\Controllers\EstadoController::class);
Route::resource('casos', App\Http\Controllers\CasoController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
