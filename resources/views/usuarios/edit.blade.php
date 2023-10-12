@extends('layouts.master')
@section('title','edit')

@section('navbar-title','USUARIO - EDIT')

@section('navbar-links')
    <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
    </li>
@endsection

@section('content')
    <div class="container" style="margin-top: 50px">
        
        <form method="post" {{-- action="{{ route('usuarios.store') }}" --}} class="mx-auto">
            
            {{-- Protección de ataques maliciosos --}}
            @csrf

            <div class="shadow p-4 mb-4 bg-white " style="width: 370px; margin: 20px auto; border-radius: 10px">
                <label>Usuario ID:</label>
                <input type="number" class="form-control" name="usuario_id" value="{{ $usuario->usuario_id }}"/><br>
                
                <label>Nombre Completo:</label>
                <input type="text" class="form-control" name="nom_completo" value="{{ $usuario->nom_completo }}"/><br>

                <label>Correo:</label>
                <input type="text" class="form-control" name="correo" value="{{ $usuario->correo }}"/><br>

                <label>Contraseña:</label>
                <input type="password" class="form-control" name="contraseña" value="{{ $usuario->contraseña }}"/><br>

                <label>Rol:</label>
                <input type="text" class="form-control" name="rol" value="{{ $usuario->rol }}"/><br>

                <label>F.Creación:</label>
                <input type="date" class="form-control" name="fcreacion" value="{{ $usuario->fcreacion }}"/><br>

                <label>Estado del Usuario:</label>
                <input type="checkbox" class="form-check-input" name="estado" value="{{ $usuario->estado }}"/><br><br>
                
                <div align="center">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <button type="button" class="btn btn-secondary" onclick="location.href='{{ url('/usuarios') }}'">Cancelar</button>
                </div>
            </div>
        </form>
    </div>
@endsection