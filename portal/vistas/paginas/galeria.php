<?php
		
	 $_idioma = ( empty($_GET['idioma_request']) )? 'es' : $_GET['idioma_request'];
	
	$Idiomas['en']['titulo'] = 'Product Catalog';	
	$Idiomas['es']['titulo'] = 'Catalogo de productos';	
	
	$Idiomas['en']['categoria']['souvenirs'] = 'Souvenirs';
	$Idiomas['en']['categoria']['etnico'] = 'Ethnic';
	$Idiomas['en']['categoria']['playa'] = 'beach';
	$Idiomas['en']['categoria']['food'] = 'Food Miles';
	
	$Idiomas['es']['categoria']['souvenirs'] = 'Souvenirs';
	$Idiomas['es']['categoria']['etnico'] = 'Etnico';
	$Idiomas['es']['categoria']['playa'] = 'Playa';
	$Idiomas['es']['categoria']['food'] = 'Food Miles';
	
	
	$Links['es']['souvenirs']='productos/souvenirs';
	$Links['es']['etnico']='productos/etnico';
	$Links['es']['playa']='productos/playa';
	$Links['es']['food']='productos/food';
	
	$Links['en']['souvenirs']='products/souvenirs';
	$Links['en']['etnico']='products/ethnic';
	$Links['en']['playa']='products/beach';
	$Links['en']['food']='products/food';
	
?>
<h1><?php echo $Idiomas[$_idioma]['titulo']; ?> </h1>
<ul>
	<li><a href="<?php echo $APP_PATH.$_idioma.'/'.$Links[$_idioma]['souvenirs']; ?> "><?php echo $Idiomas[$_idioma]['categoria']['souvenirs']; ?> </a></li>
	<li><a href="<?php echo $APP_PATH.$_idioma.'/'.$Links[$_idioma]['etnico']; ?> "><?php echo $Idiomas[$_idioma]['categoria']['etnico']; ?> </a></li>
	<li><a href="<?php echo $APP_PATH.$_idioma.'/'.$Links[$_idioma]['playa']; ?> "><?php echo $Idiomas[$_idioma]['categoria']['playa']; ?> </a></li>	
	<li><a href="<?php echo $APP_PATH.$_idioma.'/'.$Links[$_idioma]['food']; ?> "><?php echo $Idiomas[$_idioma]['categoria']['food']; ?> </a></li>
</ul>



