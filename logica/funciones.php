<?php

include_once 'logica/database.php';

class funciones {

  private $bd;
//creacion de la conexion y consultas de la base
  function __construct(){
    $this->bd = new database();
  }
  //funcion para mostrar el mismo menu en todas las paginas
  public function menu() {
    $menu='<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
    <li><a href="index.php">INCIO</a></li>
    <li><a href="servicios.php">SERVICIOS</a></li>
    <li><a href="cursos.php">CURSOS</a></li>
    <li><a href="bolsa.php">Bolsa de trabajo</a></li>
    <li><a href="contact.php">Contact</a></li>
    <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Afiliarse<span class="caret"></span></a>
    <ul class="dropdown-menu">';
    // condicion de que exista una variable de secion
    if(isset($_SESSION['usuario'])){
      $menu.='<li><a href="oportunidad.php">Oportunidad de trabajo</a></li>
      <li><a href="#">Cerrar secion</a></li>';
    }else{
      $menu.='<li><a href="registrarse.php">Crear Usuario</a></li>
      <li><a href="iniciar.php">Iniciar Sesion</a></li>';
    }
    $menu.='</ul>
    </li>
    </ul>
    </div>';
    echo $menu;
  }
//muestra el mismo footer
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

  public function bolsa(){
    //se usa la caonsulta
    $con = $this->bd->bolsa();
    $texto='';
    //recorre los datos
    foreach ($con as $bolsa) {
      $texto.='<div class="col-sm-4 text-center">
      <h3>
      '.$bolsa['Nombre_vacante'].'
      </h3>
      <h4 class="text-justify">
      <small>'.$bolsa['Contenido'].'<br> Telefono:'.$bolsa['Telefono'].'<br> Dirección:'.$bolsa['Direccion'].'</small>
      </h4>
      <a href="#" class="btn btn-default btn-lg">Mandar Información</a>
      </div>';

    }
    return $texto;
  }

  public function servicios(){
    //realiza la consulta
    $con=$this->bd->servicio();
    $texto='';
    //recorre los datos
    foreach ($con as $serv) {
      $texto.='<div class="row">
      <div class="box">
      <div class="col-lg-12">
      <hr>
      <h2 class="intro-text text-center">'.$serv['Tipo_serv'].'
      </h2>
      <hr>
      </div>
      <div class="col-md-6">
      <img class="img-responsive img-border-left" src="img/'.$serv['imagen'].'" alt="">
      </div>
      <div>
      <p>'.$serv['Contenido'].'</p>
      </div>
      <div class="clearfix"></div>
      </div>
      </div>';
    }
    return $texto;
  }

  public function curso(){
    //ejecuta la consulta
    $con= $this->bd->cursos();
    $texto='';
    //recorre los datos
    foreach ($con as $cur) {
      $texto.='<div class="col-lg-12 text-center">
      <img class="img-responsive img-border img-full" src="img/'.$cur['imagen'].'" alt="">
      <h2>'.$cur['Nombre_curs'].'
      <br>
      <small>'.$cur['Fecha_curso'].'</small>
      </h2>
      '.$cur['Tipo_curso'].'
      <br>
      <a href="#" class="btn btn-default btn-lg">Registarse</a>
      <hr>
      </div>';
    }
    return $texto;
  }

  public function N_afiliado(){
  if (isset($_POST['agregar'])) {
      $nombre= $_POST['nombre'];
      $apellidos=$_POST['apellidos'];
      $email= $_POST['email'];
      $direccion= $_POST['direccion'];
      $telefono=$_POST['telefono'];
      $user= $_POST['user'];
      $contraseña=$_POST['contraseña'];
      $confirmar=$_POST['confirmar'];
      if ($confirmar == $contraseña) {
        $this->bd->N_afiliado($nombre, $apellidos, $email, $direccion, $telefono, $user, $contraseña);
        echo '<script type="text/javascript">alert("Usted ha sido afiliado con exito espere la orden de pago");</script>';
      }else{
        echo '<script type="text/javascript">alert("Verifique su contraseña");</script>';
      }
    }

  }

}
