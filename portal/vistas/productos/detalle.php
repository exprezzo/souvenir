<?php		
	$_idioma = ( empty($_GET['idioma_request']) )? 'es' : $_GET['idioma_request'];		 
	$sufijo = ($_idioma=='es')? '' : '_'.$_idioma;	
?>

<?php
$imagen = ( empty($this->producto['imagen']) )? 'no-image.jpg' : $this->producto['imagen'];
$nombre = $this->producto['nombre'.$sufijo];
$codigo = $this->producto['codigo'];
$precio = $this->producto['precio'.$sufijo];
$descripcion = $this->producto['descripcion'.$sufijo];

	$rutaEs		=$APP_PATH.'es/portal/productos/detalle/'.$this->producto['id'].'/'.str_replace(" ",'_',$this->producto['nombre'.$sufijo]); 
	
?>
<img  src="<?php echo $WEB_BASE.'imagenes/'.$imagen; ?>" width="300" height="200" />
<h2><?php echo $nombre; ?> </h2>
<h3>Codigo: <?php echo $codigo; ?> </h3>
<h3>$<?php echo $precio; ?> </h3>
<span>
<?php echo $descripcion; ?>

</span>


<ul>
<?php 	
	foreach($this->imagenes['datos'] as $img ){
		echo '<li> <img src="'.$WEB_BASE.'imagenes'.$img['imagen'].'" width="100" height="100" /> </li>';
	}

?>
</ul>
