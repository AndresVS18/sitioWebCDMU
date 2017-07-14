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
  <link rel="stylesheet" href="newstyle.css">
  <title>CDMU</title>
</head>
<body  >

  <?php $fun->menu(); ?>



  <img src="Imagenes/anunciate2.jpg"    class="img-responsive" alt="Hola" width="1800px" >

</div>
  <!-- CUERPO -->
  <div class="container">


    <br>


      <div class="col-xs-12 col-sm-12 col-md-12" >
      <div id="carousel1" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carousel1" data-slide-to="0" class="active"></li>
          <li data-target="#carousel1" data-slide-to="1"></li>
          <li data-target="#carousel1" data-slide-to="2"></li>
          <li data-target="#carousel1" data-slide-to="3"></li>
        </ol>


        <div class="container ">
        <div class="carousel-inner" role="listbox" >
          <div class="item active" >
            <img src="Imagenes/empresas/coppel1.jpg"  style="width:800px; height:250px">

            </div>

            <div class="item " >
              <img src="Imagenes/empresas/suburbia1.jpg"  style="width:1600px; height:250px">
            </div>

              <div class="item">
                <img src="Imagenes/empresas/walmart1.png"  style="width:1600px; height:250px">

                </div>

                <div class="item">
                  <img src="Imagenes/empresas/woolworth1.jpg"  style="width:1600px; height:250px">

                  </div>
                  </div>
                  </div>



                  <div class="text" style="font-family: 'Varela Round', sans-serif;">
                <div class="col-xs-12 col-sm-6 col-md-4 ">
                  <h2>Servicios</h2>
                  <br><br>
                  <p >La Subprocuraduría de Servicios ofrece asesoría, recibe y gestiona las quejas en materia de consumo y las denuncias en materia de publicidad; también realiza el monitoreo de la publicidad en medios masivos de comunicación, lleva a cabo el registro de números telefónicos para evitar llamadas publicitarias no deseada (Repep); inicia procedimientos por infracciones a la Ley en materia de servicios ya sea de oficio o a través de una denuncia, supervisa los procedimientos de conciliación y el registro o la cancelación de contratos de adhesión de los proveedores y somos el área responsable de llevar a cabo el Registro Público de Casas de Empeño.</p>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4" >
                <h2>Cursos</h2>
                <br><br>
                <p  >Ofrecemos cursos par mejorar conocimientos, habilidades, y conductas de las personas en sus puestos de trabajo.  <br><br>

*Dentro de la HABILIDAD lo que buscaos es la facilidad para realizar una tarea con cierta eficiencia, empleando el mínimo de recursos y de tiempo. <br>

* En el CONOCIMIENTO queremos mejorar la experiencia de los usuarios, mediante ejercicios, actividades, etc. Esto ayudará no sólo a corto plazo sino a un plazo de determinado tiempo. <br>

* La CONDUCTA es la forma de actuar y de relacionarse con los demás; aquí no se evalúan las causas de las conductas. Se busca modificar conductas ante situaciones concretas.
</p>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-4">
                <h2>Oportunidades de trabajo</h2>
                <p >En esta página podrá encontrar información sobre oportunidades de empleo en CEPAL en Santiago y oficinas regionales.
                  Uno de los componentes clave en nuestra compañía son las personas, por lo que nos
  enfocamos en construir un clima organizacional adecuado para el correcto desarrollo
  profesional. ¡Únete a nuestro equipo!</p>
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
