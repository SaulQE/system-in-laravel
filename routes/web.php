<?php

//imports

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

//ruta personalizada - productos
Route::get('/productos', [ProductoController::class,'index_GET']);
Route::get('/productos/create', [ProductoController::class,'create_GET']);
Route::get('/productos/{productoId}/{stock?}', [ProductoController::class,'show_GET']);

//ruta personalizada - usuarios
Route::get('/usuarios', [UsuarioController::class,'index_GET']);
Route::get('/usuarios/create', [UsuarioController::class,'create_GET']);
Route::get('/usuarios/{usuarioId}', [UsuarioController::class,'show_GET']);

