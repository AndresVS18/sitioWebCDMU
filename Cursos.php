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

  <br>
  <div class="container">
    <div class="col-md-12">
            <p style="text-align: center">Selecciona un Curso para más informacion</p>
        </div>


      <div class="col-md-4">
        <div class="input-group">
            <p>Cursos Disponibles</p>


            <?php echo $fun->Cursos(); ?>


      </div>
      </div>


          <div class="col-md-8">
          <div class="panel panel-default">
  <div class="panel-body">
    Texto Infotmativo
  </div>
    <?php echo $fun->Curso(); ?>

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


  <br><br>
  <?php $fun->carfo();?>
        <script src="bower_components/jquery/dist/jquery.js"></script>
  <script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
        </body>
        <?php $fun->footer(); ?>

        </html>
