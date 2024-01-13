<?php
include_once('ConexionMysql.php');

class TipoActividad {
   private $TipoActividadId;
   private $Nombre;
   private $Observaciones;

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

   public function addNewTipoActividad(){		
    $sql = "INSERT INTO tipoactividad(Nombre, Observaciones) VALUES
        ('{$this->Nombre}', '{$this->Observaciones}')";
    $this->ObjectConnection->consultaSimple($sql);
    return true;
}

public function getListaTipoActividad(){
    $sql = "SELECT * FROM tipoactividad";
    $resultado = $this->ObjectConnection->consultaRetorno($sql);
    return $resultado;
}
}

?>
