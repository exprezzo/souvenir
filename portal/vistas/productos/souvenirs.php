<?php		
	 $_idioma = ( empty($_GET['idioma_request']) )? 'es' : $_GET['idioma_request'];	
	
	$pagina['en']=array(
		'titulo'	=>'Souvenirs',
		'contenido'	=>'',
		'rutaPadre'=>'pages/gallery',
		'tituloPadre'=>'Gallery'
	);
	
	$pagina['es']=array(
		'titulo'	=>'Souvenirs',
		'contenido'	=>'',
		'rutaPadre'=>'paginas/galeria',
		'tituloPadre'=>'Galeria'
	);
?>
<a href="<?php echo $APP_PATH.$_idioma.'/'.$pagina[$_idioma]['rutaPadre'].' "><h2 style="text-decoration:underline; display:inline-block;">'.$pagina[$_idioma]['tituloPadre'] ?></h2></a>
<h1 style="display:inline-block;"><?php echo $pagina[$_idioma]['titulo']; ?></h1>