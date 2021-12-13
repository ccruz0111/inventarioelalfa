
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper bg-white my-5">
    <!-- Contenido-->
  <div class="container">
    <div class="container">
      <div class="my-1 mx-5">

      <div class="row">
          <div class="col-6">
          <a class="btn btn-dark" href="?controller=admin&method=usuarios">Regresar</a>
        </div>
      </div>
        
      <div class="container">
  <div class="my-5">
  <!--Parte superior bienvenida-->
  <div class="row">
    <div class="col-4 mt-5"><h4>¡Registro de usuarios!</h4></div>
    <div class="col-4"></div>
    <div class="col-4 mt-3"><h6>Inventario Almacen el Alfa</h6></div>
  </div>
  </div>

  <!--Formulario de registro-->
  <div class="row">
    <div class="col-12">
     <center>
     <form action="?controller=admin&method=crear_usuario" method="post" class="card col-10">
     <div class="row">
        <div class="col-2 mx-5 my-3">
        </div>
        <div class="col-10 my-3 d-flex justify-content-center align-items-center">
        <i class="material-icons ml-5">account_circle</i>
        <div class="mx-1">*Nombres:</div>
        <input type="text" placeholder="names lastnames" required class="form-control col-10" name="nombre">
        </div>
      </div>
     <div class="row">
        <div class="col-2 mx-5">
        </div>
        <div class="col-10 my-3 d-flex justify-content-center align-items-center">
        <i class="material-icons ml-5">email</i>
        <div class="mx-3">*Email:</div>
        <input type="email" placeholder="avila@example.com" required class="form-control col-10" name="email">
        </div>
      </div>
      <div class="row">
        <div class="col-2 mx-5">
        </div>
        <div class="col-10 my-3 d-flex justify-content-center align-items-center">
        <i class="material-icons ml-5">lock</i>
        <div class="mx-1">*Contraseña:</div>
        <input type="password" placeholder="*************"  required class="form-control col-10" name="password">
        </div>
      </div>
      <div class="row">
        <div class="col-2 mx-5">
        </div>
        <div class="col-10 my-3 d-flex justify-content-center align-items-center">
        <i class="material-icons ml-5">accessibility</i>
        <div class="mx-3">*Cargo:</div>
       <select name="cargo" id="" class="form-control col-10">
        <option selected disabled>Seleccione aquí el cargo</option>
        <?php  foreach(parent::cargos() as $cargo):?>
        <option value="<?=$cargo->CodiCargo?>"><?=$cargo->CarDescripcion?></option>
        <?php endforeach; ?>
       </select> 
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