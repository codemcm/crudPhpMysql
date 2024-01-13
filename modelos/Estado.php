<?php
include_once('ConexionMysql.php');

class Estado {
   private $EstadoId;
   private $Clave;
   private $Nombre;

   private $ObjectConnection;

   public function __construct(){
       $this->ObjectConnection= new ConexionMysql();
   }

   public function set($atributo, $contenido){
       $this->$atributo = $contenido;
   }

   public function get($atributo){
       return $this->$atributo;
   }

   public function addNewEstado(){		
    $sql = "INSERT INTO estado (Clave, Nombre) VALUES
        ('{$this->Clave}', '{$this->Nombre}')";
    $this->ObjectConnection->consultaSimple($sql);
    return true;
}

public function getListaEstado(){
    $sql = "SELECT * FROM estado";
    $resultado = $this->ObjectConnection->consultaRetorno($sql);
    return $resultado;
}
}

?>
