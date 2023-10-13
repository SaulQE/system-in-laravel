@extends('layouts.master')
@section('title','create')

@section('navbar-title','USUARIO - CREATE')

@section('navbar-links')
    <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
    </li>
@endsection

@section('content')
    <div class="container" style="margin-top: 50px">
        
        <form method="post" action="{{ route('usuarios.store') }}" class="mx-auto">
            
            {{-- Protección de ataques maliciosos --}}
            @csrf

            <div class="shadow p-4 mb-4 bg-white " style="width: 370px; margin: 20px auto; border-radius: 10px">
                <label>Nombre Completo:</label>
                <input type="text" class="form-control" name="nom_completo" value="{{ old('nom_completo') }}"/>
                <span class="error-message">
                    @error('nom_completo')
                        {{ $message }}
                    @enderror
                </span><br>

                <label>Correo:</label>
                <input type="text" class="form-control" name="correo" value="{{ old('correo') }}"/>
                <span class="error-message">
                    @error('correo')
                        {{ $message }}
                    @enderror
                </span><br>

                <label>Contraseña:</label>
                <input type="password" class="form-control" name="contraseña" value="{{ old('contraseña') }}"/>
                <span class="error-message">
                    @error('contraseña')
                        {{ $message }}
                    @enderror
                </span><br>

                <label>Rol:</label>
                <input type="text" class="form-control" name="rol" value="{{ old('rol') }}"/>
                <span class="error-message">
                    @error('rol')
                        {{ $message }}
                    @enderror
                </span><br>

                <label>F.Creación:</label>
                <input type="date" class="form-control" name="fcreacion" value="{{ old('fcreacion') }}"/>
                <span class="error-message">
                    @error('fcreacion')
                        {{ $message }}
                    @enderror
                </span><br>

                <label>Estado del Usuario:</label>
                <input type="checkbox" class="form-check-input" name="estado" checked/><br>
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