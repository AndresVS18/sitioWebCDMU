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

      <div class="footer" style="background:#036449">
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

    public function bolsa_trabajo(){
      $bolsa = $this->bd->bolsa();
      $texto="";
      foreach ($bolsa as $a) {
        $texto.='<div class="col-lg-12">'.$a['Nombre_vacante'].'</div>';
      }
      return $texto;
    }

    public function cursos(){
      $curso = $this->bd->cursos();
      $texto="";
      foreach ($curso as $c) {
        $texto.='<button type="button" class="btn btn-primary btn-lg btn-block " value="'.$c['Id_curs'].'">'.$c['Nombre_curs'].'</button>';
      }
      return $texto;
    }

    public function curso(){
      $con = $this->bd->curso();
      $texto="";
      foreach ($con as $c) {
        $texto.='<div class="panel-footer">'.$c['Tipo_curso'].'</div>';
      }
      return $texto;
    }

}
