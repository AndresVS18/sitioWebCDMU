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

<div class="col-xs-12 col-sm-12 col-md-12">

 <img src="Imagenes/usuario/Join-Us.png" style="height: 300px">

</div>

<div class="formulario">
  <form class="form-horizontal">
    <div class="col-md-offset-5"><h2 style="font-family: 'Playfair Display', serif;"> Ingresa los datos</h2></div>
  <div class="form-group form-group-lg">
    <label class="col-sm-3 control-label" for="formGroupInputLarge">Nombre: </label>
    <div class="col-md-offset-1 col-sm-7">
      <input class="form-control" type="text" id="formGroupInputLarge" placeholder="Nombre de usuario">
    </div>
  </div>
  <form class="form-horizontal">
  <div class="form-group form-group-lg">
    <label class="col-sm-3 control-label" for="formGroupInputLarge">Apellido:</label>
    <div class="col-md-offset-1 col-sm-7">
      <input class="form-control" type="text" id="formGroupInputLarge" placeholder="Apellido">
    </div>
  </div>
  <form class="form-horizontal">
  <div class="form-group form-group-lg">
    <label class="col-sm-3 control-label" for="formGroupInputLarge">Email:</label>
    <div class="col-md-offset-1 col-sm-7">
      <input class="form-control" type="text" id="formGroupInputLarge" placeholder="@email">
    </div>
  </div>
  <form class="form-horizontal">
  <div class="form-group form-group-lg">
    <label class="col-sm-3 control-label" for="formGroupInputLarge">Contraseña:</label>
    <div class="col-md-offset-1 col-sm-7">
      <input class="form-control" type="password" id="formGroupInputLarge" placeholder="Nueva Contraseña">
    </div>
  </div>
  <form class="form-horizontal">
  <div class="form-group form-group-lg">
    <label class="col-sm-3 control-label" for="formGroupInputLarge">Confirmar contraseña:</label>
    <div class="col-md-offset-1 col-sm-7">
      <input class="form-control" type="password" id="formGroupInputLarge" placeholder="Confirmar contraseña">
    </div>
  </div>
  <button type="button" class="col-xs-offset-6 btn btn-primary btn-lg active">Enviar</button>

</div>
<hr>
        <?php $fun->carfo();?>
        <script src="bower_components/jquery/dist/jquery.js"></script>
        <script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>
    </body>
    <?php $fun->footer(); ?>
</html>
