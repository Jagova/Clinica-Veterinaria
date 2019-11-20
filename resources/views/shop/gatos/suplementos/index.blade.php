@extends('shop.gatos.layout')

@section('contenido2')
  <!--Empiezan tarjetas de productos-->
  <div class="row m-5" style="height:60vh">
  @foreach ($articulosGatos as $articulo)
    <div class="col-3 m-0 p-0 h-100 mh-100">
      <div class="card w-100 h-100" style="width: 18rem;">
        <div style="height:40vh">
          <img class="card-img-top mh-100" src="{{ asset($articulo->urlImagen) }}" alt="articulo">
        </div>
        <div class="card-body" style="20vh">
          <h5 class="card-title">{{$articulo->nombre}}</h5>
          <p class="card-text">{{$articulo->precio_u}}</p>
          <a href="#" class="btn btn-primary abrirVerMas" data-toggle="modal" data-target="#modalVerMas"
            data-id="{{$articulo->id}}"
            data-nombre="{{$articulo->nombre}}"
            data-marca="{{$articulo->marca}}"
            data-stock="{{$articulo->stock}}"
            data-precio="{{$articulo->precio_u}}"
            >Ver más</a>
        </div>
      </div>
    </div>
  @endforeach
  </div>
@endsection


