<?php

class funciones {

    public function menu() {
        echo '<nav class="navbar navbar-inverse navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="index.php">CDMU</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php">Inicio</a></li>
              <li><a href="afiliacion.php">Afiliacion</a></li>
              <li><a href="Servicios.php">Servicios</a></li>
              <li><a href="#">Cursos</a></li>
              <li><a href="Oportunidad.php">Oportunidades de Negocio</a></li>
              <li><a href="bolsa.php">Bolsa de Trabajo</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registrate<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="registrarse.php">Crear Usuario</a></li>
                  <li><a href="#">Iniciar Sesion</a></li>
                </ul>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
      <div class="row">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img src="Imagenes/logo.jpg" style="width:100%" height: class="img-responsive" alt="Hola">
          <div class="carousel-caption">
            <h3>Texto</h3>

            <p>Bienvenido</p>
          </div>
        </div>
      </div>
    </div>
  </div>';
    }

    public function footer() {
        echo'<footer>
      <div class="footer">
        <div class="container">
          <div class="row">
            <div class="col-xs-6 col-sm-4 col-md-4 ">
              Tel. Celular: (238) 0000- 111
            </div>
            <div class="col-xs-6 col-sm-2 col-md-4 ">
              E-mail: CDMU@gmail.com
            </div>
            <div class="col-xs-6 col-sm-2 col-md-4 ">
              <ul class="list-unstyled text-center list-inline" style=font-size:30px;>

                <li class="icono"><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                <li class="icono"><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                <li class="icono"><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
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
        echo'<div class="row">
            <div id="carousel-products" class="carousel slide" data-ride="carousel">
                <!-- indicatodors -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-products" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-products" data-slide-to="1"></li>
                    <li data-target="#carousel-products" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="img/afiliarse.jpg" alt="" style="width:1800px; height:300px">
                        <div class="carousel-caption"> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, repudiandae.</p></div>
                    </div>
                    <div class="item">
                        <img src="img/bolsa de trabajo.png" alt="" style="width:1800px; height:300px">
                        <div class="carousel-caption"> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, repudiandae.</p></div>
                    </div>
                    <div class="item">
                        <img src="img/cursos.jpg" alt="" style="width:1800px; height:300px">
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
            </div>
        </div>';
    }

}
