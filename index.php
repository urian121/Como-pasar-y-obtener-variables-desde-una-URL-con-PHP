<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta content="initial-scale=1, shrink-to-fit=no, width=device-width" name="viewport">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i|Roboto+Mono:300,400,700|Roboto+Slab:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="shortcut icon" href="logo-mywebsite-urian-viera.svg"/>

    <!-- Add Material CSS, replace Bootstrap CSS -->
    <link href="css/material.min.css" rel="stylesheet">
    <title>Como pasar y obtener variables desde una URL con PHP :: Webdeveloper Urian Viera </title>
  </head>
  <body>

<nav class="navbar navbar-light" style="background-color: #55468c !important;">
  <a class="navbar-brand" href="#">
   <strong style="color: #fff">WebDeveloper</strong>
  </a>
</nav>

<div class="container mt-5"> 

  
  <h3 class="text-center mb-5" style="font-weight: 800; font-size: 35px">
    Cómo pasar y obtener variables desde una URL con  <strong>PHP</strong> 
    <hr>
  </h3>



<form method="POST" action="data.php">
  <div class="form-group">
    <label for="nameFull">Nombre Completo</label>
    <input type="text" name="nameFull" class="form-control">
  </div>
  <div class="form-group">
    <label for="cedula">Cedula</label>
    <input type="number" name="cedula" class="form-control">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
  </div>
  <button type="submit" class="btn btn-primary btn-block">Enviar Registro</button>
</form>
 
  
  <div class="row text-center">
    <div class="col">
      <a href="data.php?canal=Webdeveloper">Enviar Variable</a>
    </div>
  </div>



</div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

    <script src="js/material.min.js"></script>

  </body>
</html>
