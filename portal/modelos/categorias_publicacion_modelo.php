<?php
class categorias_publicacionModelo extends Modelo{
	var $tabla="portal_categoria_publicacion";
	var $campos=array('id','nombre','imagen','descripcion','nombre_en','descripcion_en','orden');
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