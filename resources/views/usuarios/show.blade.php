@extends('layouts.master')
@section('title','show')

@section('content')
    <div class="container p-5 my-5 bg-dark text-white">
        <h3>SHOW - USUARIO</h3>
        <p>Su código de usuario es  {{ $usuarioId }} - Bienvenido!</p>

        <button class="btn btn-outline-primary"><a href="/usuarios">INDEX</a></button>
    </div>
@endsection