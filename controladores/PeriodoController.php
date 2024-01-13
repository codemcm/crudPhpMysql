<?php
include_once('../modelos/Periodo.php');

class PeriodoController{

    private $objPeriodo;

    public function __construct(){
		$this->objPeriodo= new Periodo();
	}

    public function addNewPeriodo($NombrePeriodo) {
        $this->objPeriodo->set("NombrePeriodo", $NombrePeriodo);
        $resultado= $this->objPeriodo->addNewPeriodo();
        return $resultado;
    }
    
    public function getListaPeriodo() {
        $resultado = $this->objPeriodo->getListaPeriodo();
        return $resultado;
    }
    }

?>