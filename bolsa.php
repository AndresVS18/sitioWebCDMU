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


<div class="col-xs-12 col-sm-12 col-md-12">
  <div class="container">
 <img src="Imagenes/Bolsa/bolsaheader1.jpg" alt="" style="height: 300px">
</div>
</div>

<br>

        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="container">
          <h1 style="text-align:center">BIEVENIDO</h1>
          <h3 style="text-align:center">En estas secciones encontraras oportunidades de trabajo. Selecciona una para ver las bacantes disponibles.</h3>
          <br>
</div>
</div>


          <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="container">
          <ul class="nav nav-tabs">
          <li class="active"><a  data-toggle="tab" href="#Diseñador">Diseño Gráfico</a>
          <li><a data-toggle="tab" href="#Bordadora">Bordadora </a></li>
          <li><a data-toggle="tab" href="#Costurera">Costurera </a></li>
          <li><a data-toggle="tab" href="#Auxiliar">Auxiliar </a></li>
          <li><a data-toggle="tab" href="#Muestrista">Muestrista </a></li>
          <li><a data-toggle="tab" href="#Pais">Pais </a></li>
          <li><a data-toggle="tab" href="#Sitio">Sitio Web </a></li>
        </ul>
      </div>

      <div class="container">
    <div class="tab-content" style="text-align:justify">
      <div id="Diseñador" class="tab-pane fade in active">
      <div class="col-md-12">
        <div class="col-md-4">
        <h3>ALFOMBRA ROJA</h3>
        <img src="Imagenes/Bolsa/alfombra.png" alt="">
        </div>
        <div class="col-md-8">
          <br>
          <br>
          <br>
        <H3>SOLICITAMOS UN "DIRECTOR CREATIVO".</H3>
        <p>QUE TENGA UNA BUENA HABILIDAD PARA DISTINGUIR LOS COLORES
           <br>QUE TENGA GUSTO POR EL DIBUJO Y TENGA CREATIVIDAD</p>
      </div>

    </div>

      <div class="col-md-12">
      <div class="col-md-4">
      <h3>ALFOMBRA ROJA</h3>
      <img src="Imagenes/Bolsa/boutique2.jpg" alt="">
      </div>
      <div class="col-md-8">
        <br>
        <br>
        <br>
      <H3>SOLICITAMOS UN "DIRECTOR CREATIVO".</H3>
      <p>QUE TENGA UNA BUENA HABILIDAD PARA DISTINGUIR LOS COLORES
         <br>QUE TENGA GUSTO POR EL DIBUJO Y TENGA CREATIVIDAD</p>
    </div>
  </div>
  <ul class="pagination pagination-lg">
    <li><a href="#">1</a></li>
    <li><a href="#">2</a></li>
  </ul>

      </div>
      <div id="Bordadora" class="tab-pane fade">
        <h3>Bordadora</h3>
        <p>ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
      </div>
      <div id="Costurera" class="tab-pane fade">
        <h3>Costurera</h3>
        <p>BBBBBBBBBBBBBBBEaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
      </div>
      <div id="Auxiliar" class="tab-pane fade">
        <h3>Auxiliar</h3>
        <p>GGGGGGGGGGGGGGGGGEaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
      </div>
      <div id="Muestrista" class="tab-pane fade">
        <h3>Muestrista</h3>
        <p>RRRRRRRRRRRRRRRRRREaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
      </div>
      <div id="Pais" class="tab-pane fade">
        <h3>Pais</h3>
        <p>EEEEEEEEEEEEEEEEEEEEEEaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
      </div>
      <div id="Sitio" class="tab-pane fade">
        <h3>Sitio Web</h3>
        <p>AAAAAAAAAAAAAEaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>

      </div>
    </div>
  </div>
  <br>
  <br>
  <br>
  <br>
</div>



<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    </body>



    </div>
     <hr>
        <?php $fun->carfo();?>
        <script src="bower_components/jquery/dist/jquery.js"></script>
        <script src="bower_components/bootstrap/dist/js/bootstrap.js"></script>



</html>
