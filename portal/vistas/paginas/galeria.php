<?php		
	 $_idioma = ( empty($_GET['idioma_request']) )? 'es' : $_GET['idioma_request'];	
	
	$pagina['en']=array(
		'titulo'	=>'Product Catalog',
		'contenido'	=>''
	);
	
	$pagina['es']=array(
		'titulo'	=>'Catalogo de productos',
		'contenido'	=>''
	);
	
	$categorias['es']=array(
		array(
			'titulo'=>'Souvenirs',
			'link'	=>'productos/souvenirs'
		),array(
			'titulo'=>'Etnico',
			'link'	=>'productos/etnico'
		),array(
			'titulo'=>'Playa',
			'link'	=>'productos/playa'
		),array(
			'titulo'=>'Food Miles',
			'link'	=>'productos/food'
		)
	);
	
	$categorias['en']=array(
		array(
			'titulo'=>'Souvenirs',
			'link'	=>'products/souvenirs'
		),array(
			'titulo'=>'Ethnic',
			'link'	=>'products/ethnic'
		),array(
			'titulo'=>'Beach',
			'link'	=>'products/beach'
		),array(
			'titulo'=>'Food Miles',
			'link'	=>'products/food'
		)
	);
	
	
?>
<h1><?php echo $pagina[$_idioma]['titulo']; ?> </h1>
<ul>
	<?php 
		foreach($categorias[$_idioma] as $categoria){
			echo '<li><a href="'.$APP_PATH.$_idioma.'/'.$categoria['link'] .'">'.$categoria['titulo'].'</a></li>';
		}
	?>	
</ul>



