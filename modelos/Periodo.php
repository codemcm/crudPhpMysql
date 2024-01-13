<?php
include_once('ConexionMysql.php');

class Periodo {
   private $PeriodoId;
   private $NombrePeriodo;

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

   public function addNewPeriodo(){		
    $sql = "INSERT INTO periodo (NombrePeriodo) VALUES
        ('{$this->NombrePeriodo}')";
    $this->ObjectConnection->consultaSimple($sql);
    return true;
}

public function getListaPeriodo(){
    $sql = "SELECT * FROM periodo";
    $resultado = $this->ObjectConnection->consultaRetorno($sql);
    return $resultado;
}
}

?>
