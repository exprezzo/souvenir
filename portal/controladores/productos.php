<?php
require_once $APPS_PATH.$_PETICION->modulo.'/modelos/producto_modelo.php';
require_once $APPS_PATH.$_PETICION->modulo.'/modelos/imagen_producto_modelo.php';

class productos extends Controlador{
	var $modelo="producto";
	var $campos=array('id','codigo','nombre','descripcion','precio','imagen','nombre_en','descripcion_en','orden');
	var $pk="id";
	var $nombre="productos";
	
	function nuevo(){		
		$campos=$this->campos;
		$vista=$this->getVista();	

		$vista->imagenes=array();
		
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
		$vista=$this->getVIsta();
		
		$mod = new imagen_productoModelo();
		
		$fk_producto=$_REQUEST['id'];
		$params=array(
			'filtros'=>array(
				array('dataKey'=>'fk_producto', 'filterOperator'=>'equals','filterValue'=>$fk_producto)
			)
		);
		$imagenes = $mod->buscar($params);		
		// print_r( $imagenes['datos']);
		$vista->imagenes=$imagenes['datos'];
		
		return parent::editar();
	}
	function buscar(){
		return parent::buscar();
	}
}
?>