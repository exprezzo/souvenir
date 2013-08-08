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
	
	//Determinar categoria actual
	$categoriaActual = $this->categoriaActual;	
	
	$rutaEs		=$APP_PATH.'es/portal/productos/ver/'.$categoriaActual['id'].'/'.str_replace(" ",'_',$categoriaActual['nombre']); 
	$rutaIng	=$APP_PATH.'en/portal/products/view/'.$categoriaActual['id'].'/'.str_replace(" ",'_',$categoriaActual['nombre_en']);		
?>
<script>
	$(function(){
		$('.idiomas .esp').attr('href', '<?php echo $rutaEs; ?>');
	});
</script>
<style>
	.categorias{ text-align:center; }
	.categorias li{ margin-right:20px; }
	.categorias li, .productos li{list-style:none; display:inline-block;}	
	.categorias li a img, .categorias li a span, .productos li a img, .productos li a span{vertical-align:middle;}	
</style>
<ul class="categorias">
	<?php 
		foreach($this->categorias as $categoria){
			// $link=
			$titulo=$categoria['nombre'.$sufijo];					
			$imagen=(empty($categoria['imagen']) )?  $WEB_BASE.'imagenes/no-image.jpg' : $WEB_BASE.'imagenes/categorias/'.$categoria['imagen'];
			if ($_idioma=='en'){
				$target=$APP_PATH.$_idioma.'/portal/products/view/'.$categoria['id'].'/'.str_replace(' ','_',$titulo);
			}else{
				$target=$APP_PATH.$_idioma.'/portal/productos/ver/'.$categoria['id'].'/'.str_replace(' ','_',$titulo);
			}						
			echo '<li><a href="'.$target.'"><img width="50" height="50" src="'.$imagen.'" /><span>'.$titulo.'</span></a></li>';
		}
		$img=$WEB_BASE.'imagenes/no-image.jpg';
	?>
</ul>

<h2>Productos de la categoria <strong><?php  echo  $categoria['nombre'.$sufijo]; ?></strong></h2> 

<?php 
	 // print_r( $_PETICION );
?>

<ul class="productos">
	<?php
		foreach($this->productos as $prod){
			// $link=
			$titulo=$prod['nombre'.$sufijo];
			$descripcion=$prod['descripcion'.$sufijo];
			$imagen=(empty($prod['imagen']) )?  $WEB_BASE.'imagenes/no-image.jpg' : $WEB_BASE.'imagenes/'.$prod['imagen'];
			$precio=$prod['precio'.$sufijo];
			if ($_idioma=='en'){
				$target=$APP_PATH.$_idioma.'/portal/products/view/'.$categoria['id'].'/'.str_replace(' ','_',$titulo);
			}else{
				$target=$APP_PATH.$_idioma.'/portal/productos/ver/'.$categoria['id'].'/'.str_replace(' ','_',$titulo);
			}			
			
			$target="#";
			// echo '<li><a href="'.$target.'"><img width="50" height="50" src="'.$imagen.'" /><span>'.$titulo.'</span></a></li>';
		?>	
			<li>
				<img src="<?php echo $imagen; ?>" width="200" height="200"/>
				<div style="width: 230px;display: inline-block;vertical-align: top;">
					<h2><a href="#" style="text-decoration:underline;"><?php echo $titulo; ?></a></h2>
					<h3>$<?php echo $precio; ?></h3>
					<p><?php echo $descripcion; ?></p>
					
				</div>
				
			</li>
	<?php
		}
	?>	
</ul>