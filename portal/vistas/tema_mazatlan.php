
	<?php include '../portal/vistas/header.php'; ?>
<style>
#menu_categorias a{
	background-image: url('<?php echo $WEB_BASE; ?>imagenes/camera.png') , url('<?php echo $WEB_BASE; ?>imagenes/menu_categoria_bg.png') !important;
	background-repeat: no-repeat, no-repeat;
}

#menu_categorias a:hover{
	background-image: url('<?php echo $WEB_BASE; ?>imagenes/camera.png') , url('<?php echo $WEB_BASE; ?>imagenes/menu_categoria_bg_hover.png') !important;
	background-repeat: no-repeat, no-repeat;
}
</style>
	<div id="contenido">
		<div id="pagina">
			<ul id="menu_categorias">
				<?php 
					// print_r($this->categorias);
					foreach($this->categorias as $cat){
						$titulo = $cat['nombre'.$sufijo];
						$target=$APP_PATH.$_idioma.'/portal/publicaciones/mostrar/'.$cat['id'].'/'.str_replace(' ','_',$titulo);						
						echo '<li><a  href="'.$target.'#titulo_categoria">'.$titulo.'</a></li>';					
					}
				?>
				
			</ul>
			
			<div id="contenido_derecha">
				<?php $this->mostrar(); ?>
			</div>
			
			
		</div>
		
		
		
		
		
	</div>
	<?php include('../portal/vistas/footer.php'); ?>	
