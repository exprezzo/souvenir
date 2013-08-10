<?php		
	 $_idioma = ( empty($_GET['idioma_request']) )? 'es' : $_GET['idioma_request'];	
	$sufijo = ($_idioma=='es')? '' : '_'.$_idioma;
	
	$pagina['en']=array(
		'titulo'	=>'Product Catalog',
		'contenido'	=>''
	);
	
	$pagina['es']=array(
		'titulo'	=>'Catalogo de productos',
		'contenido'	=>''
	);
	
	
	
	
?>
<style>
	.categorias li{list-style:none; display:inline-block; vertical-align:top; margin-bottom:40px;}
	.categorias h2{margin:0; text-align:center; text-decoration:none; margin-bottom:10px;}
	.categorias p{  width:260px; }
	.categorias a{text-decoration:none; color:black;}
	
	.categorias li a img, .categorias li a span{vertical-align:middle;}
</style>
<h1><?php echo $pagina[$_idioma]['titulo']; ?> </h1>

<ul class="categorias">
	<?php 
		foreach($this->categorias as $categoria){
			// $link=
			$titulo=$categoria['nombre'.$sufijo];
			$descripcion=$categoria['descripcion'.$sufijo];
			$imagen=(empty($categoria['imagen']) )?  $WEB_BASE.'imagenes/no-image.jpg' : $WEB_BASE.'imagenes/categorias/'.$categoria['imagen'];
			
			if ($_idioma=='en'){
				$target=$APP_PATH.$_idioma.'/portal/productos/ver/'.$categoria['id'].'/'.str_replace(' ','_',$titulo);
			}else{
				$target=$APP_PATH.$_idioma.'/portal/productos/ver/'.$categoria['id'].'/'.str_replace(' ','_',$titulo);
			}						
			
			?>
			<li><a href="<?php echo $target; ?>">
					<div>
						<h2><?php echo $titulo; ?></h2>
						<img width="100" height="100" style="float:left;" src="<?php echo $imagen; ?>" />
						<p><?php echo $descripcion; ?></p>
					</div>
				</a>
			</li>
			<?php
		}
	?>	
</ul>



