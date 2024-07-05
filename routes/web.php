<?php

use App\Http\Controllers\directoriosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/directorio/crear',[directoriosController::class,'creardirectorio'])->name('directorio.crear');

Route::post('/directorio/guardar',[directoriosController::class,'guardar'])->name('directorios.guardar');

Route::get('/directorio/mostrar',[directoriosController:: class,'mostrardirectorio']);


Route::get('/directorio/eliminar/{id}',[directoriosController:: class,'eliminar'])->name('directorios.eliminar');

Route::get('/duenios/destroy/{id}',[directoriosController:: class,'destroy'])->name('directorios.destruir');
