<?php
require_once $APPS_PATH.$_PETICION->modulo.'/modelos/imagen_publicacion_modelo.php';
class imagen_publicacion extends Controlador{
	var $modelo="imagen_publicacion";
	var $campos=array('id','fk_publicacion','imagen');
	var $pk="id";
	var $nombre="imagen_publicacion";
	
	function nuevo(){		
		$campos=$this->campos;
		$vista=$this->getVista();				
		for($i=0; $i<sizeof($campos); $i++){
			$obj[$campos[$i]]='';
		}
		$vista->datos=$obj;		
		
		global $_PETICION;
		$vista->mostrar('/'.$_PETICION->controlador.'/edicion');
		
		
	}
	
	function guardar(){
		return parent::guardar();
	}
	function borrar(){
		return parent::borrar();
	}
	function editar(){
		return parent::editar();
	}
	function buscar(){
		return parent::buscar();
	}
}
?>