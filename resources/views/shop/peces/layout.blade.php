@extends('shop.layout')

@section('contenido')

<!--Script para abrir el modal-->
<script>
    $(document).on("click", ".abrirVerMas", function (event) {
        var articuloId = $(this).data('id');
        var articuloNombre = $(this).data('nombre');
        var articuloMarca = $(this).data('marca');
        var articuloStock = $(this).data('stock');
        var articuloPrecio = $(this).data('precio');
        


            document.getElementById("articulo_nombre").innerHTML = articuloNombre;
            document.getElementById("articulo_marca").innerHTML = articuloMarca;
            document.getElementById("articulo_cantidad").innerHTML = articuloStock;
            document.getElementById("articulo_precio").innerHTML = articuloPrecio;
    });
</script>
       
<div class="container-fluid p-0 m-0">     
  <div class="row justify-content-center m-3">
    <h1>Artículos para peces</h1>
  </div> 
  <div>
    <nav class="navbar navbar-expand-lg navbar-light shadow-md d-flex justify-content-between height-auto">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="menuCategoria">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/shop/peces/alimento">Alimento</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/shop/peces/acuarios">Acuarios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/shop/peces/pecera">Accesorios pecera</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
  </div>


  @yield('contenido2')

</div>

<!-- Modal -->
<div class="modal fade" id="modalVerMas" tabindex="-1" role="dialog" aria-labelledby="modalVerMasTitulo" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="articulo_nombre">Nombre del Artículo</h5>
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