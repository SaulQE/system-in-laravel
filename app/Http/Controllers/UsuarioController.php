<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index_GET(){
        $usuariosDb = Usuario::all();

        return view('usuarios.index',compact('usuariosDb'));
    }
    public function create_GET(){
        return view('usuarios.create');
    }
    public function show_GET($usuarioId){
        return view('usuarios.show',compact("usuarioId"));
    }
}
