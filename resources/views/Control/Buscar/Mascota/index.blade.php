@extends('control.buscar.layout')

@section('contenido2')
<div class="container-fluid">
    <div class="row justify-content-center">
        <nav class="navbar navbar-light bg-light">
        <form action="/buscarmascota" method="POST" class="form-inline">
            @csrf
            @method('POST')
            <input class="form-control mr-sm-2" type="search" name="filtro" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar mascota</button>
        </form>
        </nav>
    </div>

</div>
@endsection