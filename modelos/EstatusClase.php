<?php
include_once('ConexionMysql.php');

class EstatusClase {
    private $EstatusClaseId;
    private $NombreEstatus;
    private $Clave;
    private $Active;
    private $CreatedBy;

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

    public function getListaCarreras(){
        $sql = "SELECT * FROM EstatusClase";
        $resultado = $this->ObjectConnection->consultaRetorno($sql);
        return $resultado;
    }

    public function addNew(){		
        $sql = "INSERT INTO EstatusClase (NombreEstatus) VALUES
            ('{$this->NombreEstatus}')";
        $this->ObjectConnection->consultaSimple($sql);
        return true;
    }
}
?>