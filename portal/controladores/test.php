<?php
require_once $APPS_PATH.$_PETICION->modulo.'/modelos/menu_modelo.php';
class test extends Controlador{
	function inicio(){
		
		$mod = new menuModelo();
		$menus = $mod->buscar( array() );		
		$vista = new Vista();
		$vista->menus = $menus;		
		$vista->mostrar();
	}
}

?>