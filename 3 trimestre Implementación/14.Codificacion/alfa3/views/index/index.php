<div class="container">
  <div class="my-5">
  <!--Parte superior bienvenida-->
  <div class="row">
    <div class="col-4 mt-5"><h4>¡Bienvenido!...</h4></div>
    <div class="col-4"></div>
    <div class="col-4 mt-3"><h6>Inventario Almacen El Alfa</h6></div>
  </div>
  </div>

  <!--Formulario de registro-->
  <div class="row">
    <div class="col-12">
     <center>
     <form action="?controller=index&method=login" method="post" class="card col-8">
      <div class="row">
        <div class="col-2 mx-5 my-3">
        </div>
        <div class="col-10 my-3 d-flex justify-content-center align-items-center">
        <i class="material-icons ml-5">email</i>
        <div class="mx-3">Email:</div>
        <input type="email" placeholder="avila@example.com" class="form-control col-10 ml-2" name="email">
        </div>
      </div>
      <div class="row">
        <div class="col-2 mx-5">
        </div>
        <div class="col-10 my-3 d-flex justify-content-center align-items-center">
        <i class="material-icons ml-5">lock</i>
        <div class="">Contraseña:</div>
        <input type="password" placeholder="*************" class="form-control col-10 ml-2" name="password">
        </div>
      </div>
      <div class="d-flex justify-content-center">
      <!--<a type="button" class="btn btn-outline-dark">Registrarse</a>-->
      <button type="submit" class="btn btn-outline-dark mx-2">Ingresar</button>
      </div>
      <div class="div my-3">
      <a href="?controller=index&method=recuperar_cuenta">¿Olvido su contraseña?</a>
      </div>
     </form>
     </center>
    </div>
  </div>
</div>