<?php
require_once $APPS_PATH.$_PETICION->modulo.'/modelos/menu_modelo.php';
class menus extends Controlador{
	var $modelo="menu";
	var $campos=array('id','titulo','target','icono','thumb');
	var $pk="id";
	var $nombre="menus";
	
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