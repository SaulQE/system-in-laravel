@extends('layouts.master')
@section('title','create')

@section('content')
    <div class="container">
        <h3 style="margin-top: 20px" align="center">CREATE - USUARIO</h3>
        
        <form method="post" action="{{ route('usuarios.store') }}" class="mx-auto">
            
            {{-- Protección de ataques maliciosos --}}
            @csrf

            <div class="shadow-lg p-4 mb-4 bg-white border border-2" style="width: 370px; margin: 20px auto; border-radius: 10px">
                <label>Nombre Completo:</label>
                <input type="text" class="form-control" name="nom_completo" /><br>

                <label>Correo:</label>
                <input type="text" class="form-control" name="correo" /><br>

                <label>Contraseña:</label>
                <input type="password" class="form-control" name="contraseña" /><br>

                <label>Rol:</label>
                <input type="text" class="form-control" name="rol" /><br>

                <label>F.Creación:</label>
                <input type="date" class="form-control" name="fcreacion" /><br>

                <label>Estado del Usuario:</label>
                <input type="checkbox" class="form-check-input" name="estado" checked/><br><br>
                
                <div align="center">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <button type="button" class="btn btn-secondary" onclick="location.href='{{ url('/usuarios') }}'">Cancelar</button>
                </div>
            </div>
        </form>
    </div>
@endsection