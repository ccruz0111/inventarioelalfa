
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper bg-white my-5">
    <!-- Contenido-->
  <div class="container">
    <div class="container">
      <div class="my-1 mx-5">

      <div class="row">
          <div class="col-6">
          <a class="btn btn-dark" href="?controller=admin&method=tipomovimientos">Regresar</a>
        </div>
      </div>
        
      <div class="container">
  <div class="my-5">
  <!--Parte superior bienvenida-->
  <div class="row">
    <div class="col-4 mt-5"><h4>¡Registro de tipo de movimientos!</h4></div>
    <div class="col-4"></div>
    <div class="col-4 mt-3"><h6>Inventario Almacen el Alfa</h6></div>
  </div>
  </div>

  <!--Formulario de registro-->
  <div class="row">
    <div class="col-12">
     <center>
     <form action="?controller=admin&method=crear_tipomovimiento" method="post" class="card col-12">
     <div class="row">
        <div class="col-2 mx-5 my-3">
        </div>
        <div class="col-10 my-3 d-flex justify-content-center align-items-center">
        <div class="ml-5 mr-2">Tipo de movimiento:</div>
        <input type="text" placeholder="Nombre del tipo de movimiento" class="form-control col-10" name="TipoMoviDescripcion" required>
        </div>
      </div>
      <div class="d-flex justify-content-center mb-3">
      <button class="btn btn-outline-dark mx-2" type="submit">Enviar</button>
      </div>
     </form>
     </center>
    </div>
  </div>
</div>

      </div>
    </div>
  </div>
  </div>
  <br>
  <br>
  <!-- /.content-wrapper -->