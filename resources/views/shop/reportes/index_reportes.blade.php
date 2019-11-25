@extends('shop.reportes.layout')

@section('contenido2')

<!--Empiezan tarjetas de reportes-->
  <div class="row m-5" style="height:60vh">
  @foreach ($reportesPerdidos as $reportes)
    <div class="col-3 m-0 p-0 h-100 mh-100">
      <div class="card w-100 h-100" style="width: 18rem;">
        <div style="height:40vh">
          <img class="card-img-top mh-100" src="{{ asset($reportes->urlImagen) }}" alt="mascota">
        </div>
        <div class="card-body" style=" 20hv;">
          <h5 class="card-title">{{$reportes->titulo}}</h5>

          <p class="card-text">{{$reportes->fecha}}</p>
          <p class="card-text">{{$reportes->descripcion}}</p>

          <p class="card-text">{{$reportes->estado}}</p>

        </div>
      </div>
    </div>
  @endforeach
  </div>

@endsection


