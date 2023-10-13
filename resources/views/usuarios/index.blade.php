@extends('layouts.master')
@section('title','index')

@section('navbar-title','USUARIO - INDEX')

@section('navbar-links')
    <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/usuarios/create">Registrar</a>
    </li>
@endsection

@section('content')
<div align="center">
    
    <div class="container" style="margin-top: 50px">
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
                    <th><b>Acción</b></th>
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
                    <td>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-warning">
                                <a href="{{ route('usuarios.edit',$usuario) }}">
                                    <img src="{{ asset('icons/gear-fill.svg') }}" alt="">Editar</a>
                            </button>
                            <button type="button" class="btn btn-danger">
                                <a href="{{ route('usuarios.delete',$usuario) }}">
                                    <img src="{{ asset('icons/x-circle-fill.svg') }}" alt="">Eliminar</a>
                            </button>
                          </div>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection