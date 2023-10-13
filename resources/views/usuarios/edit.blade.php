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
        
        <form method="post" action="{{ route('usuarios.update',$usuario) }}" class="mx-auto">
            
            {{-- Protección de ataques maliciosos --}}
            @csrf
            @method('put')

            <div class="shadow p-4 mb-4 bg-white " style="width: 370px; margin: 20px auto; border-radius: 10px">
                <label>Usuario ID:</label>
                <input type="number" class="form-control" name="usuario_id" value="{{ old('nombre',$usuario->usuario_id) }}"/><br>
                
                <label>Nombre Completo:</label>
                <input type="text" class="form-control" name="nom_completo" value="{{ old('nombre',$usuario->nom_completo) }}"/>
                <span class="error-message">
                    @error('nom_completo')
                        {{ $message }}
                    @enderror
                </span><br>

                <label>Correo:</label>
                <input type="text" class="form-control" name="correo" value="{{ old('correo',$usuario->correo) }}"/>
                <span class="error-message">
                    @error('correo')
                        {{ $message }}
                    @enderror
                </span><br>

                <label>Contraseña:</label>
                <input type="password" class="form-control" name="contraseña" value="{{ old('contraseña',$usuario->contraseña) }}"/>
                <span class="error-message">
                    @error('contraseña')
                        {{ $message }}
                    @enderror
                </span><br>

                <label>Rol:</label>
                <input type="text" class="form-control" name="rol" value="{{ old('rol',$usuario->rol) }}"/>
                <span class="error-message">
                    @error('rol')
                        {{ $message }}
                    @enderror
                </span><br>

                <label>F.Creación:</label>
                <input type="date" class="form-control" name="fcreacion" value="{{ old('fcreacion',$usuario->fcreacion) }}"/>
                <span class="error-message">
                    @error('fcreacion')
                        {{ $message }}
                    @enderror
                </span><br>

                <label>Estado del Usuario:</label>
                <input type="checkbox" class="form-check-input" name="estado" value="1" {{ $usuario->estado == 1 ? 'checked' : '' }} /><br>
                <span class="error-message">
                    @error('estado')
                        {{ $message }}
                    @enderror
                </span><br><br>
                
                <div align="center">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <button type="button" class="btn btn-secondary" onclick="location.href='{{ url('/usuarios') }}'">Cancelar</button>
                </div>
            </div>
        </form>
    </div>
@endsection