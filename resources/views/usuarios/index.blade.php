@extends('layouts.master')
@section('title','index')

@section('content')
    <div class="container p-5 my-5 bg-dark text-white">
        <h3>USUARIO - LISTAR</h3>
        <table>
            <tr>
                <td><b>ID</b></td>
                <td><b>NomCompleto</b></td>
                <td><b>Correo</b></td>
                <td><b>Contraseña</b></td>
                <td><b>Rol</b></td>
                <td><b>F.Creación</b></td>
                <td><b>Estado</b></td>
            </tr>
            @foreach ($usuariosDb as $usuario)
                <tr>
                    <td>{{ $usuario->usuario_id }}</td>
                    <td>{{ $usuario->nom_completo }}</td>
                    <td>{{ $usuario->correo }}</td>
                    <td>{{ $usuario->contraseña }}</td>
                    <td>{{ $usuario->rol }}</td>
                    <td>{{ $usuario->fcreacion }}</td>
                    <td>{{ $usuario->estado }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection