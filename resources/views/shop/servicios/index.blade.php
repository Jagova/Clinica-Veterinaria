@extends('shop.layout')

@section('contenido')
       
<div class="container-fluid">
    <div class="row justify-content-center m-3">
        <h1 class="mx-auto">Servicios</h1>
    </div>

    <div class="row shadow-lg mx-md-5 p-3">
        <table class="w-100 h-100">
            <tr>
                <th>#</th>
                <th>Servicio</th>
            </tr>
            <tr>
                <td>
                    <p id="num" name="num">1</p>
                </td>
                <td>
                    <p id="sercicio" name="fecha">Baño</p>
                </td>

            </tr>
            <tr>
                <td>
                    <p id="num" name="num">1</p>
                </td>
                <td>
                    <p id="sercicio" name="fecha">Vacunas</p>
                </td>

            </tr>
            <tr>
                <td>
                    <p id="num" name="num">1</p>
                </td>
                <td>
                    <p id="sercicio" name="fecha">Consultas</p>
                </td>

            </tr>
            <tr>
                <td>
                    <p id="num" name="num">1</p>
                </td>
                <td>
                    <p id="sercicio" name="fecha">Grooming y cepillado</p>
                </td>

            </tr>
        </table>
    </div>
</div>


{{--
  <div class="row">
        <div class="col-sm m-0 p-0">
            <div class="card w-100 h-100" style="width: 18rem;">
              <div class="h-100">
                <img class="card-img-top" src="{{ asset('images/Tienda/juguetes/juguete1.jpg') }}" alt="articulo">
              </div>
              <div class="card-body">
                <h5 class="card-title">Artículo</h5>
                <p class="card-text">$10.00</p>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalVerMas">Ver más</a>
              </div>
            </div>
        </div>

        <div class="col-sm m-0 p-0">
            <div class="card w-100 h-100" style="width: 18rem;">
              <div class="h-100">
                <img class="card-img-top" src="{{ asset('images/Tienda/juguetes/juguete4.jpg') }}" alt="articulo">
              </div>
              <div class="card-body">
                <h5 class="card-title">Artículo</h5>
                <p class="card-text">$10.00</p>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalVerMas">Ver más</a>
              </div>
            </div>
        </div>

        <div class="col-sm m-0 p-0 w-100">
            <div class="card w-100 h-100" style="width: 18rem;">
              <img class="card-img-top" src="{{ asset('images/Tienda/juguetes/juguete2.jpg') }}" alt="articulo">
              <div class="card-body">
                <h5 class="card-title">Artículo</h5>
                <p class="card-text">$10.00</p>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalVerMas">Ver más</a>
              </div>
            </div>
        </div>

        <div class="col-sm m-0 p-0 w-100">
            <div class="card w-100 h-100" style="width: 18rem;">
              <img class="card-img-top" src="{{ asset('images/Tienda/juguetes/juguete3.jpg') }}" alt="articulo">
              <div class="card-body">
                <h5 class="card-title">Artículo</h5>
                <p class="card-text">$10.00</p>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalVerMas">Ver más</a>
              </div>
            </div>
        </div>
  </div>

  <div class="row">
        <div class="col-sm m-0 p-0">
            <div class="card w-100 h-100" style="width: 18rem;">
              <div class="h-100">
                <img class="card-img-top" src="{{ asset('images/Tienda/juguetes/juguete1.jpg') }}" alt="articulo">
              </div>
              <div class="card-body">
                <h5 class="card-title">Artículo</h5>
                <p class="card-text">$10.00</p>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalVerMas">Ver más</a>
              </div>
            </div>
        </div>

        <div class="col-sm m-0 p-0">
            <div class="card w-100 h-100" style="width: 18rem;">
              <div class="h-100">
                <img class="card-img-top" src="{{ asset('images/Tienda/juguetes/juguete4.jpg') }}" alt="articulo">
              </div>
              <div class="card-body">
                <h5 class="card-title">Artículo</h5>
                <p class="card-text">$10.00</p>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalVerMas">Ver más</a>
              </div>
            </div>
        </div>

        <div class="col-sm m-0 p-0 w-100">
            <div class="card w-100 h-100" style="width: 18rem;">
              <img class="card-img-top" src="{{ asset('images/Tienda/juguetes/juguete2.jpg') }}" alt="articulo">
              <div class="card-body">
                <h5 class="card-title">Artículo</h5>
                <p class="card-text">$10.00</p>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalVerMas">Ver más</a>
              </div>
            </div>
        </div>

        <div class="col-sm m-0 p-0 w-100">
            <div class="card w-100 h-100" style="width: 18rem;">
              <img class="card-img-top" src="{{ asset('images/Tienda/juguetes/juguete3.jpg') }}" alt="articulo">
              <div class="card-body">
                <h5 class="card-title">Artículo</h5>
                <p class="card-text">$10.00</p>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalVerMas">Ver más</a>
              </div>
            </div>
        </div>
  </div>

  <div class="row">
        <div class="col-sm m-0 p-0">
            <div class="card w-100 h-100" style="width: 18rem;">
              <div class="h-100">
                <img class="card-img-top" src="{{ asset('images/Tienda/juguetes/juguete1.jpg') }}" alt="articulo">
              </div>
              <div class="card-body">
                <h5 class="card-title">Artículo</h5>
                <p class="card-text">$10.00</p>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalVerMas">Ver más</a>
              </div>
            </div>
        </div>

        <div class="col-sm m-0 p-0">
            <div class="card w-100 h-100" style="width: 18rem;">
              <div class="h-100">
                <img class="card-img-top" src="{{ asset('images/Tienda/juguetes/juguete4.jpg') }}" alt="articulo">
              </div>
              <div class="card-body">
                <h5 class="card-title">Artículo</h5>
                <p class="card-text">$10.00</p>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalVerMas">Ver más</a>
              </div>
            </div>
        </div>

        <div class="col-sm m-0 p-0 w-100">
            <div class="card w-100 h-100" style="width: 18rem;">
              <img class="card-img-top" src="{{ asset('images/Tienda/juguetes/juguete2.jpg') }}" alt="articulo">
              <div class="card-body">
                <h5 class="card-title">Artículo</h5>
                <p class="card-text">$10.00</p>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalVerMas">Ver más</a>
              </div>
            </div>
        </div>

        <div class="col-sm m-0 p-0 w-100">
            <div class="card w-100 h-100" style="width: 18rem;">
              <img class="card-img-top" src="{{ asset('images/Tienda/juguetes/juguete3.jpg') }}" alt="articulo">
              <div class="card-body">
                <h5 class="card-title">Artículo</h5>
                <p class="card-text">$10.00</p>
                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#modalVerMas">Ver más</a>
              </div>
            </div>
        </div>
  </div>
  --}}

</div>

<!-- Modal -->
<div class="modal fade" id="modalVerMas" tabindex="-1" role="dialog" aria-labelledby="modalVerMasTitulo" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-contene">&times;</span>
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