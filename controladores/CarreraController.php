<?php 
include_once("../modelos/Carrera.php");

class CarreraController{
    private $objCarrera;

    public function __construct(){
		$this->objCarrera= new Carrera();
	}

    public function getListaCarreras() {
        $resultado = $this->objCarrera->listar();
        return $resultado;
    }

    public function addNew($Clave, $Nombre, $CreatedBy) {
        $this->objCarrera->set("Nombre", $Nombre);
        $this->objCarrera->set("Clave", $Clave);
        $this->objCarrera->set("CreatedBy", $CreatedBy); 
        $resultado= $this->objCarrera->addNew();
        return $resultado;
    }

    public function getById($CarreraId) {
        $this->carrera->set("CarreraId", $CarreraId);
        $carreraFound = $this->carrera->getById();
        return $carreraFound;
    }
    public function updateCarrera($CarreraId, $Nombre, $Active){
        $this->carrera->set('CarreraId', $CarreraId);
        $this->carrera->set('Nombre', $Nombre);
        $this->carrera->set('Active', $Active);
        $this->carrera->editar();
    }

}
?>