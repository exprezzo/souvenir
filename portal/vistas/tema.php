	<?php include '../portal/vistas/header.php'; ?>
	
	<gcse:searchresults></gcse:searchresults>
	<div id="contenido">
		
		<div id="pagina">			
			<div id="contenido_pagina">
				<ul id="menu_categorias">
					<?php 
						// print_r($this->categorias);
						foreach($this->categorias as $cat){
							$titulo = $cat['nombre'.$sufijo];
							$target=$APP_PATH.$_idioma.'/portal/productos/ver/'.$cat['id'].'/'.str_replace(' ','_',$titulo);						
							echo '<li><a  href="'.$target.'#titulo_categoria">'.$titulo.'</a></li>';					
						}
					?>
					
				</ul>
				
				<div id="contenido_derecha">
					<?php $this->mostrar(); ?>
				</div>
			
			</div>
		</div>
		
		
		
		
		
	</div>
	<?php include('../portal/vistas/footer.php'); ?>	
