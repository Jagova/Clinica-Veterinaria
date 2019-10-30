@extends('shop.layout')

@section('contenido')
       
<div class="container-fluid p-0 m-0">     
  <div class="row justify-content-center m-3">
    <h1>Artículos para perros</h1>
  </div> 
  <div class="row">
    <div class="col-md-2">
      <ul class="list-group">
        <li class="list-group-item"><a href="">Categoría 1</a></li>
        <li class="list-group-item"><a href="">Categoría 2</a></li>
        <li class="list-group-item"><a href="">Categoría 3</a></li>
        <li class="list-group-item"><a href="">Categoría 4</a></li>
        <li class="list-group-item"><a href="">Categoría 5</a></li>
      </ul>
    </div>
    <div class="col">
      <div class="row">
        <div class="col-sm m-0 p-0">
            <div class="card w-100 h-100" style="width: 18rem;">
              <img class="card-img-top" src="{{ asset('images/Tienda/juguetes/juguete4.jpg') }}" alt="articulo">
              <div class="card-body">
                <h5 class="card-title">Artículo</h5>
                <p class="card-text">$10.00</p>
                <a href="#" class="btn btn-primary">Añadir al carrito</a>
              </div>
            </div>
        </div>

        <div class="col-sm m-0 p-0 w-100">
            <div class="card w-100 h-100" style="width: 18rem;">
              <img class="card-img-top" src="{{ asset('images/Tienda/juguetes/juguete2.jpg') }}" alt="articulo">
              <div class="card-body">
                <h5 class="card-title">Artículo</h5>
                <p class="card-text">$10.00</p>
                <a href="#" class="btn btn-primary">Añadir al carrito</a>
              </div>
            </div>
        </div>

        <div class="col-sm m-0 p-0 w-100">
            <div class="card w-100 h-100" style="width: 18rem;">
              <img class="card-img-top" src="{{ asset('images/Tienda/juguetes/juguete3.jpg') }}" alt="articulo">
              <div class="card-body">
                <h5 class="card-title">Artículo</h5>
                <p class="card-text">$10.00</p>
                <a href="#" class="btn btn-primary">Añadir al carrito</a>
              </div>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm m-0 p-0">
            <div class="card w-100 h-100" style="width: 18rem;">
              <img class="card-img-top" src="{{ asset('images/Tienda/juguetes/juguete4.jpg') }}" alt="articulo">
              <div class="card-body">
                <h5 class="card-title">Artículo</h5>
                <p class="card-text">$10.00</p>
                <a href="#" class="btn btn-primary">Añadir al carrito</a>
              </div>
            </div>
        </div>

        <div class="col-sm m-0 p-0 w-100">
            <div class="card w-100 h-100" style="width: 18rem;">
              <img class="card-img-top" src="{{ asset('images/Tienda/juguetes/juguete2.jpg') }}" alt="articulo">
              <div class="card-body">
                <h5 class="card-title">Artículo</h5>
                <p class="card-text">$10.00</p>
                <a href="#" class="btn btn-primary">Añadir al carrito</a>
              </div>
            </div>
        </div>

        <div class="col-sm m-0 p-0 w-100">
            <div class="card w-100 h-100" style="width: 18rem;">
              <img class="card-img-top" src="{{ asset('images/Tienda/juguetes/juguete3.jpg') }}" alt="articulo">
              <div class="card-body">
                <h5 class="card-title">Artículo</h5>
                <p class="card-text">$10.00</p>
                <a href="#" class="btn btn-primary">Añadir al carrito</a>
              </div>
            </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm m-0 p-0">
            <div class="card w-100 h-100" style="width: 18rem;">
              <img class="card-img-top" src="{{ asset('images/Tienda/juguetes/juguete4.jpg') }}" alt="articulo">
              <div class="card-body">
                <h5 class="card-title">Artículo</h5>
                <p class="card-text">$10.00</p>
                <a href="#" class="btn btn-primary">Añadir al carrito</a>
              </div>
            </div>
        </div>

        <div class="col-sm m-0 p-0 w-100">
            <div class="card w-100 h-100" style="width: 18rem;">
              <img class="card-img-top" src="{{ asset('images/Tienda/juguetes/juguete2.jpg') }}" alt="articulo">
              <div class="card-body">
                <h5 class="card-title">Artículo</h5>
                <p class="card-text">$10.00</p>
                <a href="#" class="btn btn-primary">Añadir al carrito</a>
              </div>
            </div>
        </div>

        <div class="col-sm m-0 p-0 w-100">
            <div class="card w-100 h-100" style="width: 18rem;">
              <img class="card-img-top" src="{{ asset('images/Tienda/juguetes/juguete3.jpg') }}" alt="articulo">
              <div class="card-body">
                <h5 class="card-title">Artículo</h5>
                <p class="card-text">$10.00</p>
                <a href="#" class="btn btn-primary">Añadir al carrito</a>
              </div>
            </div>
        </div>
      </div>
    </div> 


  </div>
 
</div>

@endsection