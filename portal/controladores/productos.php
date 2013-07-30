<?php
require_once $APPS_PATH.$_PETICION->modulo.'/modelos/producto_modelo.php';
class productos extends Controlador{
	var $modelo="producto";
	var $campos=array('id','codigo','nombre','descripcion','precio','imagen','nombre_en','descripcion_en','orden');
	var $pk="id";
	var $nombre="productos";
	
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