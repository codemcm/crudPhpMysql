<?php 
include_once("../modelos/EstatusClase.php");

class EstatusClaseController{
    private $EstatusClaseController;

    public function __construct(){
		$this->objCarrera= new Carrera();
	}

    public function getListaCarreras() {
        $resultado = $this->objCarrera->getListaCarreras();
        return $resultado;
    }

    public function addNew($NombreEstatus) {
        $this->objCarrera->set("NombreEstatus", $NombreEstatus);
     
        $resultado= $this->objCarrera->addNew();
        return $resultado;
    }

    public function getById($CarreraId) {
        $this->carrera->set("CarreraId", $CarreraId);
        $carreraFound = $this->carrera->getById();
        return $carreraFound;
    }
    public function updateCarrera($CarreraId, $NombreEstatus, $Active){
        $this->carrera->set('CarreraId', $CarreraId);
        $this->carrera->set('NombreEstatus', $NombreEstatus);
        $this->carrera->set('Active', $Active);
        $this->carrera->editar();
    }

}
?>