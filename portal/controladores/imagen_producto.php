<?php
require_once $APPS_PATH.$_PETICION->modulo.'/modelos/imagen_producto_modelo.php';
class imagen_producto extends Controlador{
	var $modelo="imagen_producto";
	var $campos=array('id','fk_producto','imagen');
	var $pk="id";
	var $nombre="imagen_producto";
	
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