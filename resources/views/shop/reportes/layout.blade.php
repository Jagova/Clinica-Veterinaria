@extends('shop.layout')

@section('contenido')


<script>
    $(document).on("click", ".abrirEliminaModal", function (event) {

        var reporteId = $(this).data('id');
        var reporteDescripcion = $(this).data('descripcion');
        var reporteTitulo = $(this).data('titulo');
        var reporteEstado = $(this).data('estado');
        var reporteFecha = $(this).data('fecha');

        var imagenStore = $(this).data('imagenStore');

        console.log(reporteId);
        
        $("#eliminar-reporte-id").val(reporteId);
        document.getElementById('eliminar-reporte-titulo').innerHTML = reporteTitulo;
        document.getElementById('form-eliminar').action = "/shop/reportes/" + reporteId;
    });
</script>

<!--Script para editar un modal-->
<script>
    $(document).on("click", ".abrirEditaModal", function (event) {

        var reporteId = $(this).data('id');
        var reporteDescripcion = $(this).data('descripcion');
        var reporteTitulo = $(this).data('titulo');
        var reporteEstado = $(this).data('estado');
        var reporteFecha = $(this).data('fecha');

        var reporteUrlImagen = $(this).data('urlimagen');
        console.log(reporteUrlImagen);

        
        $("#editar-reporte-descripcion").val(reporteDescripcion);
        $("#editar-reporte-titulo").val(reporteTitulo);

        $("#editar-reporte-estado").val(reporteEstado);
        $("#editar-reporte-fecha").val(reporteFecha);


        
        document.getElementById('form-editar').action = "/shop/reportes/" + reporteId;
    });
    </script>

       



<!--Script para abrir el modal consultar-->
<script>
    $(document).on("click", ".abrirConsultaModal", function (event) {
        var reporteId = $(this).data('id');
        var reporteDescripcion = $(this).data('descripcion');
        var reporteTitulo = $(this).data('titulo');
        var reporteEstado = $(this).data('estado');
        var reporteFecha = $(this).data('fecha');

        var reporteUrlImagen = $(this).data('urlimagen');

        document.getElementById("consultar-reporte-descripcion").innerHTML = reporteDescripcion;
        document.getElementById("consultar-reporte-titulo").innerHTML = reporteTitulo;

        document.getElementById("consultar-reporte-fecha").innerHTML = reporteFecha;
        document.getElementById("consultar-reporte-estado").innerHTML = reporteEstado;

        document.getElementById("imagenConsulta").src = reporteUrlImagen;

        

    });
</script>
       
<div class="container-fluid p-0 m-0">     
  <div class="row justify-content-center m-3">
    <h1>Reporte Mascotas perdidas</h1>
  </div> 
  <div>
    <nav class="navbar navbar-expand-lg navbar-light shadow-md d-flex justify-content-between height-auto">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="menuCategoria">
        
        <form class="form-inline my-2 my-lg-0">
          
        </form>
      </div>
    </nav>
  </div>

  @yield('contenido2')

</div>



@endsection