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
<?php $fun->menu();?>
    <div class="row">

<br><br>
        <div class="col-md-12">
            <h3 style="text-align: center">Bolsa de trabajo</h3>
        </div>

<div class="col-md-offset-1">
      <div class="col-md-3">
        <div class="input-group">
            <h3>Seleccione oferta</h3>


            <button type="button" class="btn btn-primary btn-lg btn-block">Diseñador</button>
            <button type="button" class="btn btn-primary btn-lg btn-block">Bordadora</button>
            <button type="button" class="btn btn-primary btn-lg btn-block">Costurera</button>
            <button type="button" class="btn btn-primary btn-lg btn-block">Auxiliar</button>
            <button type="button" class="btn btn-primary btn-lg btn-block">Muestrista</button>
            <button type="button" class="btn btn-primary btn-lg btn-block">Pais</button>
            <button type="button" class="btn btn-primary btn-lg btn-block">Sitio Web</button>

      </div>
      </div>
    </div>


          <div class="col-md-8">
          <div class="panel panel-default">
  <div class="panel-body">
    Texto Infotmativo
  </div>
  <div class="panel-footer">.......................................</div>

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
