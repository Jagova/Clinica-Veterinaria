@extends('shop.reportes.layout')

@section('contenido2')

<!--Empiezan tarjetas de reportes-->
  <div class="row m-5" style="height:60vh">
  @foreach ($reportesPerdidos as $reportes)

  @if( $reportes->estado =="Abierto")

    <div class="col-3 m-0 p-0 h-100 mh-100">
      <div class="card w-100 h-100" style="width: 18rem;">
        <h5 class="card-title" style="">{{$reportes->titulo}}</h5>
        <div style="height:40%">
          <img class="card-img-top mh-100" src="{{ asset($reportes->urlImagen) }}" alt="mascota">
        </div>

        <div class="card-body" style="">

          
          <strong><p class="card-text">{{$reportes->fecha}}</p></strong>
          <p class="card-text">{{$reportes->descripcion}}</p>

        </div>
      </div>
    </div>
    @endif
  @endforeach
  </div>

@endsection


