<?php
class publicacionModelo extends Modelo{
	var $tabla="portal_publicacion";
	var $campos=array('id','titulo','contenido','imagen','titulo_en','contenido_en','orden','fk_categoria','fecha');
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