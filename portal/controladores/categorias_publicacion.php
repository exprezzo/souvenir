<?php
require_once $APPS_PATH.$_PETICION->modulo.'/modelos/categorias_publicacion_modelo.php';
class categorias_publicacion extends Controlador{
	var $modelo="categorias_publicacion";
	var $campos=array('id','nombre','imagen','descripcion','nombre_en','descripcion_en','orden');
	var $pk="id";
	var $nombre="categorias_publicacion";
	
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