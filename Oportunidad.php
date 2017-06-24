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
<div class="row col-md-12">
  <h4 style="text-align:center"> Si dese Publicar una Oportunidad de Negocio, favor de completar el siguiente formato</h4>
<hr>
</div>

<div class="col-md-4">
  <div class="form-group">
  <input type="text" class="form-control" placeholder="Datos De La Empresa" > </div>
  <div class="form-group"><input type="text" class="form-control" placeholder="Razón Social"></div>
  <div class="form-group"><input type="text" class="form-control" placeholder="Domicilio"></div>
  <div class="form-group"><input type="text" class="form-control" placeholder="Estado / Provincia / Región"></div>
  <div class="form-group"><input type="text" class="form-control" placeholder="País"></div>
  <div class="form-group"><input type="text" class="form-control" placeholder="Sitio Web"></div>
</div>



<div class="col-md-4">
  <div class="form-group"><input type="text" class="form-control" placeholder="Nombre"></div>
  <div class="form-group"><input type="text" class="form-control" placeholder="Apellido Parterno"></div>
  <div class="form-group"><input type="text" class="form-control" placeholder="Datos Del Afiliado" ></div>
  <div class="form-group"><input type="text" class="form-control" placeholder="Apellido Materno"></div>
  <div class="form-group"><input type="text" class="form-control" placeholder="Puesto"></div>
  <div class="form-group"><input type="text" class="form-control" placeholder="Telefono"></div>
</div>


<div class="col-md-4">
  <div class="form-group"><input type="text" class="form-control" placeholder="Datos De La Publicación" ></div>
  <div class="form-group"><input type="text" class="form-control" placeholder="Fecha De La Publicacion"></div>
  <div class="form-group"><input type="text" class="form-control" placeholder="Vigencia De La Publicación"></div>
  <div class="form-group"><input type="text" class="form-control" placeholder="Logo"></div>
  <div class="form-group"><input type="text" class="form-control" placeholder="País"></div>
  <div class="form-group"><input type="text" class="form-control" placeholder="Descripción"></div>
</div>

<div class="col-md-offset-6"> <button type="button" class="btn btn-primary "><h5>ENVIAR</h5></button> </div>
</div>
<hr>
        <?php $fun->carfo();?>
        <script src="bower_components/jquery/dist/jquery.js"></script>
        <script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
    </body>
    <?php $fun->footer(); ?>
</html>
