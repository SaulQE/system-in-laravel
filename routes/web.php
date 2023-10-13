<?php

//imports

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

//listar
Route::get('/usuarios', [UsuarioController::class,'index_GET'])->name('usuarios.index');

//registrar
Route::get('/usuarios/create', [UsuarioController::class,'create_GET']);
Route::post('/usuarios', [UsuarioController::class,'store_POST'])->name('usuarios.store');

//editar
Route::get('/usuarios/{usuario}/edit', [UsuarioController::class,'edit_GET'])->name('usuarios.edit');
Route::put('/usuarios/{usuario}', [UsuarioController::class,'update_PUT'])->name('usuarios.update');

//eliminar
Route::get('/usuarios/{usuario}/delete',[UsuarioController::class,'delete_GET'])->name('usuarios.delete');
Route::delete('/usuarios/{usuario}',[UsuarioController::class,'destroy_DELETE'])->name('usuarios.destroy');
