<?php
include_once('../modelos/TipoUsuario.php');

class TipoUsuarioController{

    private $objTipoUsuario;

    public function __construct(){
		$this->objTipoUsuario= new TipoUsuario();
	}

    public function addNewTipoUsuario($NombreTipo) {
        $this->objTipoUsuario->set("NombreTipo", $NombreTipo);
        $resultado= $this->objTipoUsuario->addNewTipoUsuario();
        return $resultado;
    }
    
    public function getListaTipoUsuario() {
        $resultado = $this->objTipoUsuario->getListaTipoUsuario();
        return $resultado;
    }
    }

?>