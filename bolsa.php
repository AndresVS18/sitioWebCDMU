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
        <div class="col-xs-12 col-sm-12 col-md-12">
            <h2 style="text-align: center">Bolsa de trabajo</h2>
        </div>

<br>

        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="container">
          <h3 style="text-align:center">BIEVENIDO</h3>
          <p style="text-align:justify">En estas secciones encontraras oportunidades de trabajo. Selecciona una para ver las bacantes disponibles.</p>
          <br>
</div>
</div>


          <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="container">
          <ul class="nav nav-tabs">
          <li class="active"><a  data-toggle="tab" href="#Diseñador">Diseñador</a>
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
        <h3>Diseñador</h3>
        <p>aaaaaaLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
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

<?php $fun->footer(); ?>

</html>
