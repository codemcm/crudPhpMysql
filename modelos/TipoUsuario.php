<?php
include_once('ConexionMysql.php');

class TipoUsuario{
    private $TipoUsuarioId;
    private $NombreTipo;
    private $FechaRegistro;

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

    public function addNewTipoUsuario(){		
        $sql = "INSERT INTO tipoUsuario (NombreTipo) VALUES
            ('{$this->NombreTipo}')";
        $this->ObjectConnection->consultaSimple($sql);
        return true;
    }

}

?>
