@extends('shop.layout')

@section('contenido')
       
<div class="container-fluid p-0 m-0">     
  <div class="row justify-content-center m-3">
    <h1>Artículos para gatos</h1>
  </div> 
  <div>
    <nav class="navbar navbar-expand-lg navbar-light shadow-md d-flex justify-content-between height-auto">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="menuCategoria">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#">Categoría 1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Categoría 2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Categoría 3</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Categoría 4</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
  </div>

  <!--Empiezan tarjetas de productos-->
  <div class="row" style="height:60vh">
  @foreach ($articulosGatos as $articulo)
    <div class="col-3 m-0 p-0 h-100 mh-100">
      <div class="card w-100 h-100" style="width: 18rem;">
        <div style="height:40vh">
          <img class="card-img-top mh-100" src="{{ asset($articulo->urlImagen) }}" alt="articulo">
        </div>
        <div class="card-body" style="20vh">
          <h5 class="card-title">{{$articulo->nombre}}</h5>
          <p class="card-text">{{$articulo->precio_u}}</p>
          <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalVerMas">Ver más</a>
        </div>
      </div>
    </div>
  @endforeach
  </div>


</div>

<!-- Modal -->
<div class="modal fade" id="modalVerMas" tabindex="-1" role="dialog" aria-labelledby="modalVerMasTitulo" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalVerMasTitulo">Nombre del Artículo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <table class="table"> 
          <tr>
            <td class="form-group">
              <label for="articulo_marca" style="font-weight:bold" >Marca</label>
              <p id="articulo_marca" name="marca"></p>
            </td>
            <td class="form-group">
              <label for="articulo_cantidad" style="font-weight:bold" >Cantidad</label>
              <p id="articulo_cantidad" name="cantidad"></p>
            </td>
          </tr>  
          <tr>
            <td class="form-group">
              <label for="articulo_precio" style="font-weight:bold" >Precio</label>
              <p id="articulo_precio" name="precio"></p>
            </td>
            <td class="form-group">
              <label for="articulo_clinica" style="font-weight:bold" >Clinica
              </label>
              <p id="articulo_clinica" name="clinica"></p>
            </td>
          </tr>                      
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

@endsection