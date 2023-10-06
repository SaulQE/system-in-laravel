<?php

//imports

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

//ruta personalizada - usuarios
Route::get('/usuarios', [UsuarioController::class,'index_GET']);
Route::get('/usuarios/create', [UsuarioController::class,'create_GET']);
Route::get('/usuarios/{usuarioId}', [UsuarioController::class,'show_GET']);

