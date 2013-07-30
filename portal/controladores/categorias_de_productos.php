<?php
require_once $APPS_PATH.$_PETICION->modulo.'/modelos/categoria_producto_modelo.php';
class categorias_de_productos extends Controlador{
	var $modelo="categoria_producto";
	var $campos=array('id','nombre','imagen','descripcion','nombre_en','descripcion_en','orden');
	var $pk="id";
	var $nombre="categorias_de_productos";
	
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