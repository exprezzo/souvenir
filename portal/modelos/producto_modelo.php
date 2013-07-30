<?php
class productoModelo extends Modelo{
	var $tabla="portal_producto";
	var $campos=array('id','codigo','nombre','descripcion','precio','imagen','nombre_en','descripcion_en','orden');
	var $pk="id";
	
	function nuevo($params){
		return parent::nuevo($params);
	}
	function guardar($params){
		return parent::guardar($params);
	}
	function borrar($params){
		return parent::borrar($params);
	}
	function editar($params){
		return parent::obtener($params);
	}
	function buscar($params){
		return parent::buscar($params);
	}
}
?>