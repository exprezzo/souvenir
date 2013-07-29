<?php
class Products extends Controlador{	
	function mostrarVista($vistaFile=''){	
		$vista= $this->getVista();			
		return $vista->mostrar( '/portal', true);
	}
}
?>