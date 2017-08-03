<?php

include_once 'logica/database.php';

class funciones {

private $bd;

function __construct(){
  $this->bd = new database();
}

    public function menu() {
        echo '<nav class="navbar navbar-default navbar-custom navbar-fixed-top" style="background-color: #02022b" >
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" style="color: white">
              <span class="sr-only">Toggle navigation</span>
              Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="index.php" style="color:white">CDMU</a>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php">Inicio</a></li>
              <li><a href="Servicios.php">Servicios</a></li>
              <li><a href="Cursos.php">Cursos</a></li>
              <li><a href="Oportunidad.php">Oportunidades de Negocio</a></li>
              <li><a href="bolsa.php">Bolsa de Trabajo</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Afiliarse<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="registrarse.php">Crear Usuario</a></li>
                  <li><a href="iniciar.php">Iniciar Sesion</a></li>
                </ul>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

<hr/>
          </div>
        </div>
      </div>
    </div>
  </div>';
    }

    public function footer() {
        echo'<footer>

      <div class="footer" style="background-color: black; ">
        <div class="container">
          <div class="row">
          <br>
            <div class="text-center col-xs-6 col-sm-6 col-md-4 "  style="color:white">
              Tel. Celular: (238) 0000- 111
            </div>
            <div class="text-center col-xs-6 col-sm-6 col-md-4 " style="color:white">
              E-mail: CDMU@gmail.com
            </div>
            <div class="text-center col-xs-12 col-sm-12 col-md-4 " style="color:white" >
              <ul class="list-unstyled text-center list-inline" style= "font-size:30px; >
                <li class="icono"><a href="#"><i class="fa fa-facebook-square" style="color: white"></i></a></li>
                <li class="icono"><a href="#"><i class="fa fa-twitter-square" style="color: white"></i></a></li>
                <li class="icono"><a href="#"><i class="fa fa-linkedin-square" style="color: white"></i></a></li>
              </ul>
            </div >
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /.footer -->
    </footer>';
    }

    public function carfo(){
        echo'<div class="container">

            <div id="carousel-products" class="carousel slide" data-ride="carousel">
                <!-- indicatodors -->

                <ol class="carousel-indicators">
                    <li data-target="#carousel-products" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-products" data-slide-to="1"></li>
                    <li data-target="#carousel-products" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="item active">
                        <img src="img/afiliarse.jpg" alt="" style="width:1000px; height:250px">
                        <div class="carousel-caption"> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, repudiandae.</p></div>
                    </div>
                    <div class="item">
                        <img src="img/bolsa de trabajo.png" alt="" style="width:1000px; height:250px">
                        <div class="carousel-caption"> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, repudiandae.</p></div>
                    </div>
                    <div class="item">
                        <img src="img/cursos.jpg" alt="" style="width:1000px; height:250px">
                        <div class="carousel-caption"> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, repudiandae.</p></div>
                    </div>

                <!-- controls -->
                <a href="#carousel-products" class="left carousel-control" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a href="#carousel-products" class="right carousel-control" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
                </div>
<br>
            </div>
        </div>';
    }

    public function consulta1(){
      $con = $this->bd->consulta1();
      $texto="";
      foreach ($con as $prueba) {
        $texto.='<div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">'.$prueba['Tipo_serv'].'
                    </h2>
                    <hr>
                </div>
                <div class="col-md-6">
                    <img class="img-responsive img-border-left" src="img/'.$prueba['imagen'].'" alt="">
                </div>
                <div>
                  <div>' .$prueba['Contenido'].'</div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>';
      }
      return $texto;
    }

    public function consulta4(){
      $con = $this->bd->consulta4();
      $texto="";
      foreach ($con as $prueba4) {
        $texto.='<div class="col-lg-12 text-center">
            <img class="img-responsive img-border img-full" src="img/'.$prueba4['imagen'].'" alt="">
            <h2>'.$prueba4['Nombre_curs'].'
                <br>
                <small>'.$prueba4['Fecha_curso'].'</small>
            </h2>
            <p>' .$prueba4['Tipo_curso'].'</p>
            <a href="#" class="btn btn-default btn-lg">Read More</a>
            <hr>
        </div>';
      }
      return $texto;
    }
    public function consulta6(){
      $con = $this->bd->consulta6();
      $texto="";
      foreach ($con as $prueba4) {
        $texto.='<div class="col-sm-4 text-center">
            <h3>
            ' .$prueba4['Nombre_vacante'].'
            </h3>
            <h4 class="text-justify">
              <small>' .$prueba4['Contenido'].'<br> Telefono:'.$prueba4['Telefono'].'<br> Direccion:'.$prueba4['Direccion'].'</small>
            </h4>
            <a href="#" class="btn btn-default btn-lg">Enviar datos</a>
        </div>';
      }
      return $texto;
    }

}
