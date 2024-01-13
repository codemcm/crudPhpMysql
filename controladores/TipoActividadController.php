<?php 
include_once("../modelos/TipoActividad.php");

class TipoActividadController{
    private $objTipoActividad;

    public function __construct(){
		$this->objTipoActividad= new TipoActividad();
	}

    public function getListaTipoActividad() {
        $resultado = $this->objTipoActividad->getListaTipoActividad();
        return $resultado;
    }

    public function addNewTipoActividad($Nombre, $Observaciones) {
        $this->objTipoActividad->set("Nombre", $Nombre);
        $this->objTipoActividad->set("Observaciones", $Observaciones);
        $resultado= $this->objTipoActividad->addNewTipoActividad();
        return $resultado;
    }

    public function getById($TipoActividadId) {
        $this->tipoactividad->set("TipoActividadId", $TipoActividadId);
        $tipoactividadFound = $this->tipoactividad->getById();
        return $tipoactividadFound;
    }
    public function updateTipoActividad($TipoActividadId, $Nombre, $Observaciones){
        $this->tipoactividad->set('TipoActividadId', $TipoActividadId);
        $this->tipoactividad->set('Nombre', $Observaciones);
        $this->tipoactividad->editar();
    }

}
?>