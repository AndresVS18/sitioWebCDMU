<?php

class database {

    private $pdo;//variable para iniciar el pdo
    var $HOST = "localhost";//nombre del host que se ocupara
    var $BDNAME = "pagina_web";//nombre de la base de datos
    var $USUARIO = "root";//nombre del usuario
    var $PASSWORD = "";//la contraseña para acceder a la base

    public function __construct() {
        try {
            $this->pdo = new PDO('mysql:host=' . $this->HOST . ';dbname=' . $this->BDNAME, $this->USUARIO, $this->PASSWORD);//prepara la conexión
            $this->pdo->exec("set character set utf8");
        } catch (PDOException $e) {
            echo 'ERROR: ' . $e->getMessage();//mensaje por si surge un error
        }
    }

    function CerrarConexion() {
        $pdo = null;
    }

    function insertar(){

    $sql = $this->pdo->prepare("insert into bolsa_trabajo (Nombre_vacante, Descripcion) VALUES (:Nombre_vacante, :Descripcion)");
    $sql->bindParam(':Nombre_vacante', $nombre);
    $sql->bindParam(':Descripcion', $Descripcion);

    // insertar una fila
    $nombre = 'corte confeccion';
    $Descripcion = 'ashgkjdhilwjdislkjfdklfjksahdlaksjhjdhkjdfhkjsjfksbhljfahfliewhjksd';
    $sql->execute();
}

    function bolsa(){
      $sql = $this->pdo->prepare("select * from bolsa_trabajo");
        if ($sql->execute(array(1))) {
            return $sql->fetchAll(PDO::FETCH_ASSOC);
        }
        $this->CerrarConexion();
    }

    function cursos(){
      $sql = $this->pdo->prepare("select * from cursos");
        if ($sql->execute(array(1))) {
            return $sql->fetchAll(PDO::FETCH_ASSOC);
        }
        $this->CerrarConexion();
}

function curso(){
  $id=1;
  $sql = $this->pdo->prepare("select Tipo_curso from cursos where Id_curs=?");
    if ($sql->execute(array($id))) {
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }
    $this->CerrarConexion();
}
}
