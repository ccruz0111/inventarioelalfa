<?php
if(isset($_SESSION['user'])){
   header('location: ?controller=index&method=logout');
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?=$title?></title>
  <!-- CDN material icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/node_modules/admin-lte/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="assets/node_modules/admin-lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/node_modules/admin-lte/dist/css/adminlte.min.css">

  <!--Datatables-->
  <link rel="shortcut icon" type="icon" href="assets/img/logooo.png"> 
    
</head>


<body>


<nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <div class="container-fluid">
  <a href="?controller=index&method=index" class="brand-link">
      <img src="assets/img/logooo.png" alt="Inventario El Alfa" class="brand-image img-square elevation-5" style="opacity: .8">
    <u><i>Inventario el Alfa</i></u>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-white d-flex" aria-current="page" href="?controller=index&method=index"tabindex="-1" aria-disabled="page"><i class="material-icons mx-2">house</i>Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="?controller=index&method=Nosotros"tabindex="-1" aria-disabled="page">Nosotros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="?controller=index&method=home"tabindex="-1" aria-disabled="page">Iniciar sesion</a>
        </li>
      </ul>
    </div>
  </div>
</nav>