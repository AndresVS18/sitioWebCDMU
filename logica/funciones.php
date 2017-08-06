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
    <div class="container">
    <div class="col-md-4 col-md-offset-2 footer-col " style="text-align:20px">
    <h2 style="color: #41a394 ">CONTACTANOS</h2> <hr>
    <li ><i class="icon fa fa-envelope" style="font-size: 20px; color: white" aria-hidden="true" >  E-mail : info@prabuuideveloper.com</i></li><br>
    <li ><i  class="icon fa fa-phone" style="font-size:  20px; color: white" aria-hidden="true" > Phone (India) : +91 9999 999 999,</i></li><br>
    <li ><i  class="icon fa fa-street-view" style="font-size: 20px; color: white" aria-hidden="true" > 3481 Melrose Place
    Beverly Hills, CA 90210 </i></li>
    </div>
    <div class="col-md-3 col-md-offset-1 footer-col">
    <h2 style="color: #41a394 ">SIGUENOS</h2> <hr>
    <ul class="footer-social">
    <li><i class="fa fa-facebook social-icon facebook" style="font-size:50px" aria-hidden="true"></i></li>
    <li><i class="fa fa-twitter social-icon twitter" style="font-size:50px" aria-hidden="true"></i></li>
    <li><i class="fa fa-instagram social-icon instagram" style="font-size:50px" aria-hidden="true"></i></li>
    </ul>
    </div>
    </div>
    </div><br><hr>
    </div>
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
