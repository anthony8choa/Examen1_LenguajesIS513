<?php

use App\Http\Controllers\directoriosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactosController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/directorio/crear',[directoriosController::class,'creardirectorio'])->name('directorio.crear');

Route::post('/directorio/guardar',[directoriosController::class,'guardar'])->name('directorios.guardar');

Route::get('/directorio/mostrar',[directoriosController:: class,'mostrardirectorio']);


Route::get('/directorio/eliminar/{id}',[directoriosController:: class,'eliminar'])->name('directorios.eliminar');

Route::get('/duenios/destroy/{id}',[directoriosController:: class,'destroy'])->name('directorios.destruir');


Route::get('/directorio/crearcontacto',[contactosController::class,'crearcontacto'])->name('contacto.crear');


Route::post('/directorio/guardarcontacto',[contactosController::class,'guardarcontacto'])->name('contacto.guardar');
