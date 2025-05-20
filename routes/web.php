<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EdadController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/edad', [EdadController::class, 'showForm'])->name('formulario.edad');
Route::post('/procesar-edad', [EdadController::class, 'procesarEdad'])->name('procesar.edad')
    ->middleware('clasificar.edad');

Route::view('/error', 'error_edad')->name('error.edad');

// // Rutas para cada grupo de edades
Route::get('/bebes', [App\Http\Controllers\BebesController::class, 'index']);
Route::get('/ninos', [App\Http\Controllers\NinosController::class, 'index']);
Route::get('/adolescentes', [App\Http\Controllers\AdolescentesController::class, 'index']);
Route::get('/jovenes', [App\Http\Controllers\JovenesController::class, 'index']);
Route::get('/adultos', [App\Http\Controllers\AdultosController::class, 'index']);
Route::get('/mayores', [App\Http\Controllers\MayoresController::class, 'index']);
Route::get('/longevos', [App\Http\Controllers\LongevosController::class, 'index']);