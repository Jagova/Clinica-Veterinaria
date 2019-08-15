@extends('layout')

@section('contenido')

<h1>Clinicas</h1>


<table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Dirección</th>
             </tr>
        </thead>
        <tbody>
    @foreach($Clinicas as $clinica)
    <tr>
        <td>{{$clinica->id}}</td>
        <td>{{$clinica->nombre}}</td>   
        <td>{{$clinica->direccion}}</td>   
    </tr>  
    @endforeach
    </tbody>
</table>

<button> <a href="clinicas/create">Crear clínica</a></button>

@endsection