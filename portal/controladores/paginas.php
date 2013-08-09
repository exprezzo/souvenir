<?php
require_once $APPS_PATH.$_PETICION->modulo.'/modelos/categoria_producto_modelo.php';

class Paginas extends Controlador{
	function mostrarVista($vistaFile=''){
		$vista= $this->getVista();
		return $vista->mostrar( '/portal', true);
	}
	
	function intro(){	
		$vista= $this->getVista();
		return $vista->mostrar( );
	}
	
	function intro2(){	
		$vista= $this->getVista();
		return $vista->mostrar( );
	}
	
	function intro3(){	
		$vista= $this->getVista();
		return $vista->mostrar( );
	}
	
	function construccion(){	
		$vista= $this->getVista();
		return $vista->mostrar( );
	}
	
	function buscar(){
		return $this->mostrarVista();
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