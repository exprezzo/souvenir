<?php
class Productos extends Controlador{	
	function mostrarVista($vistaFile=''){	
		$vista= $this->getVista();			
		return $vista->mostrar( '/portal', true);
	}
}
?>