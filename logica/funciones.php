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
    $menu='
    <div class="brand">C D D M U</div>
    <div class="address-bar">CENTRO DE DISEÑO Y DESARROLLO EN MODA URBANA A.C.</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
          <a class="navbar-brand" href="index.html">Business Casual</a>
        </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav" style="font-size:15px;">
        <li><a href="index.php">INICIO</a></li>
        <li><a href="servicios.php">SERVICIOS</a></li>
        <li><a href="cursos.php">CURSOS</a></li>
        <li><a href="bolsa.php">Bolsa de trabajo</a></li>
        <li><a href="contact.php">Contacto</a></li>
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Afiliarse<span class="caret"></span></a>
    <ul class="dropdown-menu">';
    // condicion de que exista una variable de secion
    if(isset($_SESSION['usuario'])){
      $menu.='<li><a href="oportunidad.php">Oportunidad de trabajo</a></li>
      <li><a href="#">Cerrar secion</a></li>';
    }else{
      $menu.='<li><a href="registrarse.php">Crear Usuario</a></li>
      <li><a href="#" data-toggle="modal" data-target="#modal-login">Iniciar Sesion</a></li>';
    }
    $menu.='</ul>
    </li>
    </ul>
    </div>
    <!-- /.navbar-collapse -->
    </div>
  <!-- /.container -->
    </nav>  ';
// agrega el modal de seccion
if(!isset($_SESSION['usuario'])){
  $menu.='<div class="modal fade" id="modal-login" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button class="close" data-dismiss="modal">&times;</button>
          <h3>Inicia secion</h3>
        </div>
        <div class="modal-body">
        <form class="login-form" id="login">
          <div class="form-group">
            <div class="input-group">
              <input type="text" id="focus-login" class="form-control" placeholder="Username">
              <span class="input-group-addon">
                <i class="glyphicon glyphicon-user"></i>
              </span>
            </div> <br>
          </div>
          <div class="form-group">
            <div class="input-group">
              <input type="password" class="form-control" placeholder="Type your password">
              <span class="input-group-addon">
                <i class="glyphicon glyphicon-lock"></i>
              </span>
            </div>
          </div>
        <div class="form-group sign-btn">
            <input type="submit" class="btn" value="Entrar"> <br><br>
            <p><strong>¿Eres nuevo?</strong><br><a href="registrarse.php" id="flip-btn" class="signup signup_link">Crea una cuenta ahora.</a></p>
          </div>
        </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>';
}
    echo $menu;
  }
//muestra el mismo footer
  public function footer() {
    echo'<footer>
      <div class="footer">
        <div class="container">
          <div class="row" style="color:white";>
            <br>
            <div class="col-xs-6 col-sm-4 col-md-4 ">
              <h4>C D D M U </h4>
              <ul class="footer-social">
                <li><a href=""><i class="fa fa-facebook social-icon facebook" style="font-size:50px" aria-hidden="true"></a></i></li>
                <li><i class="fa fa-twitter social-icon twitter" style="font-size:50px" aria-hidden="true"></i></li>

              </ul>
            </div>
            <div class="col-xs-6 col-sm-2 col-md-4 ">
              <h4>SECCIONES</h4>
              <ul class="list-unstyled">
                <li><a href="index.php">INICIO</a></li>
                <li><a href="servicios.php">SERVICIOS</a></li>
                <li><a href="cursos.php">CURSOS</a></li>
                <li><a href="bolsa.php">BOLSA DE TRABAJO</a></li>
                <li><a href="contact.php">CONTACTO</a></li>

              </ul>
            </div>
            <div class="clearfix visible-xs"></div>

            <div class="col-xs-12 col-sm-4 col-md-4 ">
              <h4>Contactanos</h4>
              <ul class="list-unstyled">
                <li><i class="glyphicon glyphicon-globe"></i> 27 Norte #115 Fracc.El rosario, Tehuacán Puebla.</li>
                <li><i class="glyphicon glyphicon-earphone"></i> (044) 238 123 4567</li>
                <li><i class="glyphicon glyphicon-envelope"></i><a href="#">   cddmu@contacto.com</a></li>
              </ul>
            </div>
          </div> <br>
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
      <a data-toggle="modal" data-target="#modal-contact-form" data-id="'.$bolsa['Id_bolsa'].'" class="btn btn-default btn-lg">Mandar Información</a>
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
      <a data-toggle="modal" data-target="#modal-curso-form" data-id="'.$cur['Id_curs'].'" class="btn btn-default btn-lg">Registarse</a>
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
