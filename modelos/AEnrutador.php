<?php

	class Enrutador{

		public function cargarVista($vista){

			switch($vista):
                case 'RecuperarAlumnoA':
                    include_once('../vistas/'.$vista.'.php');
                break;
                case 'VerDetallesActividadCoord':
                    include_once('../vistas/'.$vista.'.php');
                break;
                default:
                    include_once('../vistas/error.php');
                break;
            endswitch;
		}

		public function validarGET($variable){
            if(empty($variable)){
                echo "<script> window.history.back();</script>";
            } else{
                return true;
            }
        }


	}

 ?>
