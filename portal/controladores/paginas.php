<?php
require_once $APPS_PATH.$_PETICION->modulo.'/modelos/categoria_producto_modelo.php';

class Paginas extends Controlador{
	function mostrarVista($vistaFile=''){
		$vista= $this->getVista();
		$vista->menus = $this->getMenus();
		$vista->categorias = $this->getCategorias();
		return $vista->mostrar( '/tema', true);
	}
	
	private function getCategorias(){
		
		$mod	=new categoria_productoModelo( );
		$cats	=$mod->buscar( array() );
		return $cats['datos'];
		
	}
	
	function getMenus(){
		$menus=array();
		$menus[]=array(
			'titulo'	=>'Inicio',
			'titulo_en'	=>'Home',
			'target'	=>'paginas/inicio'
		);
		$menus[]=array(
			'titulo'	=>'Galeria',
			'titulo_en'	=>'Gallery',
			'target'	=>'paginas/galeria'
		);
		$menus[]=array(
			'titulo'	=>'Mi Mazatlán',
			'titulo_en'	=>'My Mazatlan',
			'target'	=>'paginas/my_mazatlan'
		);
		$menus[]=array(
			'titulo'	=>'Nosotros',
			'titulo_en'	=>'About Us',
			'target'	=>'paginas/historia'
		);
		$menus[]=array(
			'titulo'	=>'Contacto',
			'titulo_en'	=>'Contact',
			'target'	=>'paginas/contacto'
		);
		
		
		return $menus;
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
	function contacto(){
		$vista= $this->getVista();
		$vista->menus = $this->getMenus();
		$vista->categorias = $this->getCategorias();
		return $vista->mostrar( '/contacto', true);
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