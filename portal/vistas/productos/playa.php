<style>
	label{
		width:150px;
		display:inline-block;
	}
</style>
<?php		
	 $_idioma = ( empty($_GET['idioma_request']) )? 'es' : $_GET['idioma_request'];	
	
	$pagina['en']=array(
		'titulo'	=>'Beach',
		'contenido'	=>'',
		'rutaPadre'=>'pages/gallery',
		'tituloPadre'=>'Gallery'
	);
	
	$pagina['es']=array(
		'titulo'	=>'Playa',
		'contenido'	=>'',
		'rutaPadre'=>'paginas/galeria',
		'tituloPadre'=>'Galeria'
	);
?>
<a href="<?php echo $APP_PATH.$_idioma.'/'.$pagina[$_idioma]['rutaPadre'].' "><h2 style="text-decoration:underline; display:inline-block;">'.$pagina[$_idioma]['tituloPadre'] ?></h2></a>
<h1 style="display:inline-block;"><?php echo $pagina[$_idioma]['titulo']; ?></h1>

<div class="producto">
	
	<img src="http://img.alibaba.com/photo/109356047/BROWN_INDIA_TRIBAL_WOOD_WOODEN_BEADED_PENDANT_NECKLACE.jpg" width="100" height="100" 	/>
		
		<table style="display:inline-block;">
			<tr>
				<td>Nombre:</td><td>AQUI  EL NOMBRE</td>
			</tr>
			<tr>
				<td>Descripci&oacute;n:</td><td>AQUI LA DESCRIPCION</td>
			</tr>
			<tr>
				<td>Precio:</td><td>AQUI EL PRECIO</td>
			</tr>
		</table>
		
	
</div>

<ul>
	<?php 
		foreach($this->productos as $producto){
			echo '<li>'.$producto['nombre'].'</li>';
		}
	?>
</ul>