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

    <title>CDDMU</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">
    <link href="css/Style.css" rel="stylesheet">

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
            <!-- Collect the nav links, forms, and other content for toggling -->
            <?php $fun->menu();  ?>
            <!-- /.navbar-collapse -->
<div class="container">
<div class="box">
<hr>
<h2 class="intro-text text-center">Datos personales</h2>
<hr>

<nav class="navbar navbar-inverse">
  <div class="container-fluid" style="color:white">
    <div class="col-lg-2">
      Nombre(s)
    </div>
    <div class="col-lg-2">
      Apellidos
    </div>
    <div class="col-lg-2">
      Email@
    </div>
    <div class="col-lg-2">
      Telefono
    </div>
    <div class="col-lg-2">
      Nombre de usuario
    </div>
    <div class="col-lg-2">
      Contraseña
    </div>
  </div>
</nav>
<br>
<br>
<br>
<br>

<nav class="navbar navbar-inverse">
  <div class="container-fluid" style="color:white">
<div class="col-lg-2">
  Nombre de la maquila
</div>
<div class="col-lg-2">
  Dirección de la maquila
</div>
<div class="col-lg-2">
  Telefono
</div>
<div class="col-lg-2">
  Email@
</div>

<div class="col-lg-4">
  Descripción
</div>
</div>
</nav>
<br>
<br>
<br>
<br>
</div>
</div>
    <!-- /.container -->

        <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/modals.js"></script>

</body>
<?php $fun->footer();  ?>
</html>
