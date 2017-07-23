<?php
include_once 'logica/funciones.php';
$fun = new funciones();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Inconsolata|Varela+Round" rel="stylesheet">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/style.css">
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="Style.css">
  <title>CDMU</title>
</head>

<body>
  <?php $fun->menu(); ?>
  <img src="Imagenes/anunciate2.jpg" class="img-responsive" width="1800px" >

  <!-- CUERPO -->
  <div class="container">
    <hr>
      <div class="container-fluid" >

      <div id="carousel1" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
          <li data-target="#carousel1" data-slide-to="0" class="active"></li>
          <li data-target="#carousel1" data-slide-to="1"></li>
          <li data-target="#carousel1" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="item active" >
              <img src="Imagenes/empresas/suburbia1.jpg"  style="width:600px; height:150px">
            </div>

              <div class="item">
                <img src="Imagenes/empresas/walmart1.png"  style="width:600px; height:150px">
              </div>

              <div class="item">
                <img src="Imagenes/empresas/woolworth1.jpg"  style="width:600px; height:150px">
              </div>
              </div>
              </div>
              </div>

              <hr>

                <div class="container">
                  <div class="row featurette">
                    <div class="col-md-7">
                      <h2 class="featurette-heading">Servicios</h2>
                      <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                    </div>

                    <div class="col-md-5">
                      <img src="img/serv1.jpg" style="width:350px; height:250px">
                    </div>
                  </div>

                  <hr>

                  <div class="row featurette">
                    <div class="col-md-7 col-md-push-5">
                      <h2 class="featurette-heading">Cursos</h2>
                      <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                    </div>
                    <div class="col-md-5 col-md-pull-7">
                      <img src="img/curs1.jpg" style="width:350px; height:250px">
                    </div>
                  </div>

                  <hr>

                  <div class="row featurette">
                    <div class="col-md-7">
                      <h2 class="featurette-heading">Oportunidades de trabajo</h2>
                      <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                    </div>
                    <div class="col-md-5">
                      <img src="img/cursos.jpg" style="width:350px; height:250px">
                    </div>
                  </div>  
                  </div>
        </div>
        <hr>
  <?php $fun->carfo();?>
        <script src="bower_components/jquery/dist/jquery.js"></script>
  <script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
        </body>
        <?php $fun->footer(); ?>

        </html>
