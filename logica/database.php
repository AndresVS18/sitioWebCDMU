<?php

class database {

  private $pdo;//variable para iniciar el pdo
  var $HOST = "localhost";//nombre del host que se ocupara
  var $BDNAME = "pagina_web";//nombre de la base de datos
  var $USUARIO = "root";//nombre del usuario
  var $PASSWORD = "";//la contraseña para acceder a la base

  public function __construct() {
    try {
      //se conecta a la base
      $this->pdo = new PDO('mysql:host=' . $this->HOST . ';dbname=' . $this->BDNAME, $this->USUARIO, $this->PASSWORD);//prepara la conexión
      $this->pdo->exec("set character set utf8");
    } catch (PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();//mensaje por si surge un error
    }
  }
//cierra la conexion
  function CerrarConexion() {
    $this->pdo = null;
  }

  function servicio(){
    //prepara la consulta de servicios
    $sql = $this->pdo->prepare("select * from servicios");
    if ($sql->execute(array(1))) {
      //retorna los datos obtenidos de la base
      return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    $this->CerrarConexion();
  }

  function bolsa(){
    //prepara la consulta de bolsa de trabajo
    $sql = $this->pdo->prepare("select * from bolsa_trabajo");
    if ($sql->execute(array(1))) {
      //retorna los datos obtenidos de la base
      return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    $this->CerrarConexion();
  }

  function cursos(){
    //prepara la consulta de cursos
    $sql = $this->pdo->prepare("select * from cursos");
    if ($sql->execute(array(1))) {
      //retorna los datos obtenidos de la base
      return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    $this->CerrarConexion();
  }

  function N_afiliado($nombre, $apellidos, $email, $direccion, $telefono, $user, $contraseña){
    //inserta una nueva afiliacion
    $sql = $this->pdo->prepare("INSERT INTO afiliados(`Nombre`, `Apellidos`, `Email`, `Direccion`, `Telefono`, `Nombre_usuario`, `Contraseña`) VALUES ('{$_POST['nombre']}','{$_POST['apellidos']}','{$_POST['email']}','''{$_POST['direccion']}
      ','{$_POST['telefono']}','{$_POST['user']}','{$_POST['contraseña']}')");
    $sql->execute(array($nombre, $apellidos, $email, $direccion, $telefono, $user, $contraseña));
    $this->CerrarConexion();
  }

  function N_aspirante($id, $nombre, $apellidos, $telefono, $direccion, $email){
    //inserta una nueva afiliacion
    $sql = $this->pdo->prepare("INSERT INTO aspirantes(`Id_curs`,`Nombre_aspi`, `Apellidos`, `Telefono`, `Direccion`, `Email`) VALUES ('{$_POST['id']}','{$_POST['nombre']}','{$_POST['apellidos']}','{$_POST['telefono']}
      ','{$_POST['direccion']}','{$_POST['email']}')");
    $sql->execute(array( $nombre, $apellidos, $telefono, $direccion, $email,$id));
    $this->CerrarConexion();
  }
}
