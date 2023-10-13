@extends('layouts.master')
@section('title','delete')

@section('navbar-title','USUARIO - DELETE')

@section('navbar-links')
    <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
    </li>
@endsection

@section('content')
    <div class="container" style="margin-top: 50px">
        
        <form method="post" action="{{ route('usuarios.destroy',$usuario) }}" class="mx-auto">
            
            {{-- Protección de ataques maliciosos --}}
            @csrf
            @method('delete')

            <div class="shadow p-4 mb-4 bg-white " style="width: 370px; margin: 20px auto; border-radius: 10px">
                <label>Usuario ID:</label>
                <input type="number" class="form-control" name="usuario_id" value="{{ $usuario->usuario_id }}" readonly="true"/><br>
                
                <label>Nombre Completo:</label>
                <input type="text" class="form-control" name="nom_completo" value="{{ $usuario->nom_completo }}" readonly="true"/><br><br>
                
                <p style="text-align: center">¿Está seguro de borrar?</p> <br>

                <div align="center">
                    <button type="submit" class="btn btn-primary">Eliminar</button>
                    <button type="button" class="btn btn-secondary" onclick="location.href='{{ url('/usuarios') }}'">Cancelar</button>
                </div>
            </div>
        </form>
    </div>
@endsection