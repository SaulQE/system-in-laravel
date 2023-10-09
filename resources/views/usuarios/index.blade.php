@extends('layouts.master')
@section('title','index')

@section('navbar-links')
    <li class="nav-item">
        <a class="nav-link" href="#">Link 1</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Link 2</a>
    </li>
@endsection

@section('content')
<div align="center">
    <h3 style="margin-top: 30px">USUARIO - LISTAR</h3>
    <button class="btn btn-dark">
        <a href="/usuarios/create" style="text-decoration: none;color: white;">Registrar</a>
    </button><br><br>
    
    <div class="container">

        <table class="table table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th><b>ID</b></th>
                    <th><b>NomCompleto</b></th>
                    <th><b>Correo</b></th>
                    <th><b>Contraseña</b></th>
                    <th><b>Rol</b></th>
                    <th><b>F.Creación</b></th>
                    <th><b>Estado</b></th>
                </tr>
            </thead>
            @foreach ($usuariosDb as $usuario)
                <tr>
                    <td>{{ $usuario->usuario_id }}</td>
                    <td>{{ $usuario->nom_completo }}</td>
                    <td>{{ $usuario->correo }}</td>
                    <td>{{ $usuario->contraseña }}</td>
                    <td>{{ $usuario->rol }}</td>
                    <td>{{ $usuario->fcreacion }}</td>
                    <td>{{ $usuario->estado == 1 ? 'Activo' : 'Inactivo' }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection