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
<br>

<div class="row col-md-12">

  <img src="Imagenes/oportunidades.jpg" alt="" style="height: 300px" class="col-xs-12">
</br>
  <h4 style="text-align:center"> Si dese Publicar una Oportunidad de Negocio, favor de completar el siguiente formato</h4>
<hr>
</div>
<!------Aqui inicia el FOrmulario!---->
<div class="col-md-4">
  <div class="col-md-offset-1">
  <div class="form-group">
  <input type="text" class="form-control" placeholder="Datos De La Empresa" aria-describedby="basic-addon2" class="col-md-4" > </div>
  <div class="form-group"><input type="text" class="form-control" placeholder="Razón Social" aria-describedby="basic-addon2" class="col-md-4"></div>
  <div class="form-group"><input type="text" class="form-control" placeholder="Domicilio" aria-describedby="basic-addon2" class="col-md-4"></div>
  <div class="form-group"><input type="text" class="form-control" placeholder="Estado / Provincia / Región" aria-describedby="basic-addon2" class="col-md-4"></div>
  <div class="form-group"><input type="text" class="form-control" placeholder="País" aria-describedby="basic-addon2" class="col-md-4"></div>
  <div class="form-group"><input type="text" class="form-control" placeholder="Sitio Web" aria-describedby="basic-addon2" class="col-md-4"></div>
</div>
</div>


<div class="col-md-4">
  <div class="form-group"><input type="text" class="form-control" placeholder="Nombre"></div>
  <div class="form-group"><input type="text" class="form-control" placeholder="Apellido Parterno"></div>
  <div class="form-group"><input type="text" class="form-control" placeholder="Datos Del Afiliado" ></div>
  <div class="form-group"><input type="text" class="form-control" placeholder="Apellido Materno"></div>
  <div class="form-group"><input type="text" class="form-control" placeholder="Puesto"></div>
  <div class="form-group"><input type="text" class="form-control" placeholder="Telefono"></div>
</div>

<div class="col-md-offset-1">
<div class="col-md-4">
  <div class="form-group"><input type="text" class="form-control" placeholder="Datos De La Publicación" ></div>
  <div class="form-group"><input type="text" class="form-control" placeholder="Fecha De La Publicacion"></div>
  <div class="form-group"><input type="text" class="form-control" placeholder="Vigencia De La Publicación"></div>
  <div class="form-group"><input type="text" class="form-control" placeholder="Logo"></div>
  <div class="form-group"><input type="text" class="form-control" placeholder="País"></div>
  <div class="form-group"><input type="text" class="form-control" placeholder="Descripción"></div>
</div>
</div>

<div class="col-md-12">
<div class="col-xs-offset-6"> <button type="button" class="btn btn-primary "><h5>ENVIAR</h5></button>
</div> <br><br>
</div>
    <!---Aqui Termina el FOrmulario!---->

        <!---Aqui inician las conexiones!---->
        <?php $fun->carfo();?>
        <script src="bower_components/jquery/dist/jquery.js"></script>
        <script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
    </body>
    <?php $fun->footer(); ?>
        <!---Aqui Terminan las conexiones!---->
</html>
