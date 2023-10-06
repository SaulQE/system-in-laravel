<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index_GET(){
        return view('usuarios.index');
    }
    public function create_GET(){
        return view('usuarios.create');
    }
    public function show_GET($usuarioId){
        return view('usuarios.show',compact("usuarioId"));
    }
}
