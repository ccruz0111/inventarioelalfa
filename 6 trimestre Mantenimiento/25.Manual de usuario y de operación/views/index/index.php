
<div class="container">
  <div class="my-5">
  <!--Parte superior bienvenida-->
  <div class="row">
    <div class="col-4 mt-5"><h4>¡Bienvenido!...</h4></div>
    <div class="col-4"></div>
    <div class="col-4 mt-3"><h6>Inventario Almacen el Alfa</h6></div>
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
        <input type="email" placeholder="avila@example.com" required class="form-control col-10 ml-2" name="email">
        </div>
      </div>
      <div class="row">
        <div class="col-2 mx-5">
        </div>
        <div class="col-10 my-3 d-flex justify-content-center align-items-center">
        <i class="material-icons ml-5">lock</i>
        <div class="">Contraseña:</div>
        <input type="password" placeholder="*************" required class="form-control col-10 ml-2" name="password">
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
<br><br><br> <br><br>
<!-- Footer -->
<footer class="bg-dark text-center text-white page-footer font-small mdb-color pt-4">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Footer links -->
    <div class="row text-center text-md-left mt-3 pb-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">El alfa</h6>
        <p>El Alfa tiene el deseo de llegar a ser en el 2024 una
          empresa reconocida por la venta de prendas de vestir de óptima calidad para los
         usuarios, buen servicio y posicionamiento en la industria un buen capital monetario y
         personal calificado para la atención al cliente.</p>
      </div>
      
      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Contactos</h6>
        <p>
          <i class="fas fa-home mr-3"></i> Bogotá,Calle 63 b sur # 18 i21</p>
        <p>
          <i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i> + 57 320 426 25 50</p>
        <p>
          <i class="fas fa-user mr-3"></i>Gerente: Dylan Fajardo</p>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Footer links -->

    <hr>

    <!-- Grid row -->
    <div class="row d-flex align-items-center">

      <!-- Grid column -->
      <div class="col-md-7 col-lg-8">

        <!--Copyright-->
        <p class="text-center text-md-left">Inventario alfa: © 2021 Copyright:
          <a href="https://getbootstrap.com/" target="_blank">
            <strong>Bootstrap</strong>
          </a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-5 col-lg-4 ml-lg-0">

        <!-- Social buttons -->
        <div class="text-center text-md-right">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <a href="https://www.facebook.com/El-Alfa-109112494901769" target="_blank"><i class="fab fa-facebook-f"></i></a>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <a href="https://twitter.com/iniciarsesion?lang=es" target="_blank"><i class="fab fa-twitter"></i></a>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
              </a>
            </li>
          </ul>
        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

</footer>
<!-- Footer -->
