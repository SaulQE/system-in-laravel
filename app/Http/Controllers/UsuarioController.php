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

    public function store_POST(Request $request){

        $usuario = new Usuario();

        $usuario->nom_completo=$request->nom_completo;
        $usuario->correo=$request->correo;
        $usuario->contraseña=$request->contraseña;
        $usuario->rol=$request->rol;
        $usuario->fcreacion=$request->fcreacion;
        $usuario->estado=$request->has('estado') ? 1 : 0;

        $usuario->save();

        return redirect('/usuarios');
    }

    public function edit_GET(Usuario $usuario){

        /* $usuario = Usuario::find($usuarioId); */
        return view('usuarios.edit', compact('usuario'));
    }

}
