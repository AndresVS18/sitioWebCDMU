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
        echo'

    <footer id="myFooter">

<div class="container">
<ul>
<li><a href="#">Company Information</a></li>
<li><a href="#">Contact us</a></li>
<li><a href="#">Reviews</a></li>
<li><a href="#">Terms of service</a></li>
</ul>
<p class="footer-copyright">© 2016 Copyright Text</p>
</div>
<div class="footer-social">
<a href="#" class="social-icons"><i class="fa fa-facebook"></i></a>
<a href="#" class="social-icons"><i class="fa fa-google-plus"></i></a>
<a href="#" class="social-icons"><i class="fa fa-twitter"></i></a>
</div>
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
        $texto.='<div>' .$prueba['Contenido'].'</div>';
      }
      return $texto;
    }

    public function consulta2(){
      $con = $this->bd->consulta2();
      $texto="";
      foreach ($con as $prueba2) {
        $texto.='<div>' .$prueba2['Contenido'].'</div>';
      }
      return $texto;
    }

    public function consulta3(){
      $con = $this->bd->consulta3();
      $texto="";
      foreach ($con as $prueba3) {
        $texto.='<div>' .$prueba3['Contenido'].'</div>';
      }
      return $texto;
    }

    public function consulta4(){
      $con = $this->bd->consulta4();
      $texto="";
      foreach ($con as $prueba4) {
        $texto.='<p>' .$prueba4['Tipo_curso'].'</p>';
      }
      return $texto;
    }
    public function consulta5(){
      $con = $this->bd->consulta5();
      $texto="";
      foreach ($con as $prueba5) {
        $texto.='<p>' .$prueba5['Tipo_curso'].'</p>';
      }
      return $texto;
    }
    public function bolsa(){
      $con = $this->bd->bolsa();
      $texto='';
      foreach ($con as $bolsa) {
        $texto.='<div class="col-sm-4 text-center">
            <img class="img-responsive" src="http://placehold.it/750x450" alt="">
            <h3>
            ENCARGADO
            </h3>
            <h4 class="text-justify">
              <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis repudiandae obcaecati temporibus est officiis magnam vel adipisci cumque dicta assumenda!</small>
            </h4>
            <a href="#" class="btn btn-default btn-lg">Read More</a>
        </div>';

      }
      return $texto;
    }
}
