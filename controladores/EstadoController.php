<?php 
include_once("../modelos/Estado.php");

class EstadoController{
    private $objEstado;

    public function __construct(){
		$this->objEstado= new Estado();
	}

    public function getListaEstado() {
        $resultado = $this->objEstado->getListaEstado();
        return $resultado;
    }

    public function addNewEstado($Clave, $Nombre) {
        $this->objEstado->set("Clave", $Clave);
        $this->objEstado->set("Nombre", $Nombre);
        $resultado= $this->objEstado->addNewEstado();
        return $resultado;
    }

    public function getById($EstadoId) {
        $this->estado->set("EstadoId", $EstadoId);
        $estadoFound = $this->estado->getById();
        return $estadoFound;
    }
    public function updateEstado($EstadoId, $Clave, $Nombre){
        $this->estado->set('EstadoId', $EstadoId);
        $this->estado->set('Nombre', $Clave);
        $this->estado->editar();
    }

}
?>