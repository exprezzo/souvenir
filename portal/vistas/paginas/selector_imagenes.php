<div class="seletor_imagenes">
	<ul class="carpetas">
		<li  texto="" ruta="">Imagenes
<?php 
	// print_r( $this->carpetas );
	
	imprimir_carpetas($this->carpetas);
	
	function imprimir_carpetas($carpetas){
		if ( empty($carpetas) ) return true;
		
		echo '<ul  >';		
		foreach($carpetas as $carpeta){
			echo '<li texto="'.$carpeta['nombre'].'" ruta="'.$carpeta['ruta'].'" >'.$carpeta['nombre'];					
			if ( !empty($carpeta['subcarpetas']) ){
				imprimir_carpetas($carpeta['subcarpetas']); 
			}
			echo '</li>';
		}
		echo '</ul>';
	}
?>
	</li>
</ul>
<div class="imagenes_carpeta">
	
</div>
</div>