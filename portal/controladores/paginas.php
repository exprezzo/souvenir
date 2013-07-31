<?php

require_once $APPS_PATH.$_PETICION->modulo.'/modelos/categoria_producto_modelo.php';

class Paginas extends Controlador{	
	function mostrarVista($vistaFile=''){	
		$vista= $this->getVista();			
		return $vista->mostrar( '/portal', true);
	}
	
	function galeria(){
		$vista=$this->getVista();
		
		$mod=new categoria_productoModelo( );		
		$cats=$mod->buscar( array() );		
		$vista->categorias=$cats['datos'];
		
		$this->mostrarVista();
	}
}
?>