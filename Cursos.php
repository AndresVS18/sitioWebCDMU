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
    <div class="col-md-12">
            <p style="text-align: center">Selecciona un Curso para más informacion</p>
        </div>


      <div class="col-md-4">
        <div class="input-group">
            <p>Cursos Disponibles</p>


            <button type="button" class="btn btn-primary btn-lg btn-block">Curso A</button>
            <button type="button" class="btn btn-primary btn-lg btn-block">Curso B</button>
            <button type="button" class="btn btn-primary btn-lg btn-block">Curso C</button>
            <button type="button" class="btn btn-primary btn-lg btn-block">Curso D</button>
            <button type="button" class="btn btn-primary btn-lg btn-block">Curso E</button>

      </div>
      </div>


          <div class="col-md-8">
          <div class="panel panel-default">
  <div class="panel-body">
    Texto Infotmativo
  </div>
  <div class="panel-footer">.......................................</div>

  </div>
  <div class="col-md-8"><br/></div>
  <button type="button" class="ntn btn-primay btn-lg btn-block">Llenar formulario</button>

          </div>
          <div class="col-md-8">

                <p>Ingresa los siguientes datos</p>
                <input type="text" class="form-group form-control col-md-4" placeholder="Ingresa tu Nombre" aria-describedby="basic-addon2" >
                <input type="text" class="form-group form-control col-md-4" placeholder="Ingresa tu Apellido" aria-describedby="basic-addon2">
                <div class="form-group"><input type="text" class="form-group form-control col-md-4" placeholder="Ingresa tu Correo" aria-describedby="basic-addon2" >
                    <input type="text" class="form-group form-control col-md-4" placeholder="Ingresa tu Numero" aria-describedby="basic-addon2" >
                    <input type="text" class="form-group form-control col-md-4" placeholder="Ingresa tu Contraseña" aria-describedby="basic-addon2" >
                </div>

                <div form-group>
                <button class="btn btn-primary pull-right" class="form-group">Enviar</button>
                </div>
            </div>
    </div>


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

                  <hr>
                  <div class="text-center">
                <div class="col-md-4">
                  <h4>servicios</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>

                <div class="col-md-4">
                <h4>cursos</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>

                <div class="col-md-4">
                <h4>oportunidades de trabajo</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
              </div>

              </div>



            </div>

          </div>
          <hr>
        </div>
  <?php $fun->carfo();?>
        <script src="bower_components/jquery/dist/jquery.js"></script>
  <script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
        </body>
        <?php $fun->footer(); ?>

        </html>
