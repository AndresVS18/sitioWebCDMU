<?php
include_once 'logica/funciones.php';
$fun = new funciones();
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Contact - Business Casual - Start Bootstrap Theme</title>

  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/business-casual.css" rel="stylesheet">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body>

  <div class="brand">Business Casual</div>
  <div class="address-bar">3481 Melrose Place | Beverly Hills, CA 90210 | 123.456.7890</div>

  <!-- Navigation -->
  <nav class="navbar navbar-default" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
        <a class="navbar-brand" href="index.html">Business Casual</a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <?php $fun->menu();  ?>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>

  <!--/Formulario--->
  <div class="row">
    <div class="box">
      <div class="col-lg-12">
        <hr>
        <h2 class="intro-text text-center">Bolsa de Trabajo</h2>
        <hr>
        <h3 class="text-center">Ingresa la informacion para las vacantes</h3>
      </br>
      <form role="form" method="post">
        <div class="row">
          <div class="form-group col-lg-4">
            <label>Nombre</label>
            <input name"nombre" type="text" class="form-control input-sm" placeholder="Nombre de la vacante">
          </div>
          <div class="form-group col-lg-4">
            <label>Contenido</label>
            <input name="contenido" type="text" class="form-control input-sm" placeholder="Contenido">
          </div>
          <div class="form-group col-lg-4">
            <label>Telefono </label>
            <input name="telefono" type="text" class="form-control input-sm" placeholder="Telefono">
          </div>
          <div class="form-group col-lg-4">
            <label>Direccion</label>
            <input  name="direccion" type="text" class="form-control input-sm" placeholder="Direccion">
          </div>
          <div class="form-group col-lg-4">
            <label>Fecha limite</label>
            <input name="fecha_limite" type="tel" class="form-control input-sm" placeholder="AAAA\MM\DD">
          </div>
        </div>
      <div class="clearfix"></div>

      <div class="form-group col-lg-12">
        <?php $fun->N_bolsa();?>
        <input type="hidden" name="agregar" value="contact">
        <button name="agregar" type="submit" class="btn btn-default">Enviar</button>
      </div>
    </div>
  </form>
</div>
</div>
</div>

</div>
<!--/Formulario--->
<footer style="background-color: #282c34">

  <div class="container">
    <h1 style=" color: #e94c3d">CONTACT</h1> <br>
    <div class="col-xs-12 col-sm-12 col-md-8" style="color: #e9e2d8">
      <div class="glyphicon glyphicon-earphone" style="font-size:30px"> 238.123.4567 </div>
      <br><br>
      <div class="glyphicon glyphicon-envelope" style="font-size:30px"> CDMU@example.com </div>
      <br><br>
      <div class="glyphicon glyphicon-map-marker" style="font-size:30px"> 3481 Melrose Place Beverly Hills, CA 90210
      </div>
    </div>

    <div class="col-xs-12 col-sm-12  col-md-4"   >
      <h1 style=" color: #e94c3d; ">FOLLOW US</h1>
      <ul class="list-unstyled  list-inline" style= "font-size:80px" >
        <li class="icono"><a href="#"><i class="fa fa-facebook-square" style="color: white"></i></a></li>
        <li class="icono"><a href="#"><i class="fa fa-twitter-square" style="color: white"></i></a></li>
        <li class="icono"><a href="#"><i class="fa fa-instagram" style="color: white"></i></a></li>
      </ul>
    </div>
  </div>
  <?php $fun->footer(); ?>
<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="js/modals.js"></script>

</body>

</html>
