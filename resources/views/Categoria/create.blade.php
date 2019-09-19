@extends('layout')

@section('contenido')

<h2>Crear clinica</h2>
<form action="/clinicas" method="POST">
    @csrf
    @method('POST')
    <label for="">Nombre</label>
    <input type="text" name="nombre" id="">
    <label for="">Dirección</label>
    <input type="text" name="direccion" id="">
    <button type="submit">Crear</button>
</form>

@endsection