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
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/style.css">
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="Estilo.css">
  <title>CDMU</title>
</head>
<body>
  <!-- HEADER -->
  <?php $fun->menu(); ?>
  <!-- CUERPO -->
  <div class="container">


    <hr>

    <div class="row">

      <div class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel1" data-slide-to="0" class="active"></li>
          <li data-target="#carousel1" data-slide-to="1"></li>
          <li data-target="#carousel1" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner" role="listbox" id="carorusel1">
          <div class="item active" >
            <img src="img/logo2.jpg "alt="Imagen1">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<br>
              Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
              Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
            </div>

            <div class="item " >
              <img src="img/logo3.jpg" alt="Imagen 2">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<br>
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
              </div>

              <div class="item">
                <img src="img/logo5.jpg" alt="Imagen 3">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
                  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<br>
                  Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
                </div>
              </hr>
              </div>
            </div>
          </div>
              <div class="form-group form-vertical">


                <div class="row col-md-4">
            <div>
              <div class="thumbnail">
                <img src="..." alt="...">
                <div class="caption">
                  <h3>Servicio 1</h3>
                  <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                </div>
              </div>
            </div>
          </div>
          <div class="row col-md-4">
    <div>
      <div class="thumbnail">
        <img src="..." alt="...">
        <div class="caption">
          <h3>Servicio 2</h3>
          <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

        </div>
      </div>
    </div>
  </div>
  <div class="row col-md-4">
    <div>
      <div class="thumbnail">
        <img src="..." alt="...">
        <div class="caption">
          <h3>Servicio 3</h3>
          <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

        </div>
      </div>
    </div>
  </div>
  <div class="row col-md-4">
    <div>
      <div class="thumbnail">
        <img src="..." alt="...">
        <div class="caption">
          <h3>Servicio 4</h3>
          <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

        </div>
      </div>
    </div>
  </div>
  <div class="row col-md-4">
    <div>
      <div class="thumbnail">
        <img src="..." alt="...">
        <div class="caption">
          <h3>Servicio 5</h3>
          <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

        </div>
      </div>
    </div>
  </div>
  <div class="row col-md-4">
    <div>
      <div class="thumbnail">
        <img src="..." alt="...">
        <div class="caption">
          <h3>Servicio 6</h3>
          <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

        </div>
      </div>
    </div>
  </div>
</div>

          </div>
  <?php $fun->carfo();?>
        <script src="bower_components/jquery/dist/jquery.js"></script>
  <script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
        </body>
        <?php $fun->footer(); ?>

        </html>
