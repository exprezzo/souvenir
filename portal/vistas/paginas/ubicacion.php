<?php 
if ( empty($_GET['idioma_request']) ){	
	$idioma =substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2); 			
}else{
	$_idioma =  $_GET['idioma_request'];
}


if ($_idioma!='es' && $_idioma!='en') $_idioma='es';

	$nombrePagina=array(
		'es'=>'Ubicación...',
		'en'=>'Location...',
	);
?>
<h2 id="titulo_categoria" style="color:#9eb612;font-size:17.21px; font-weight:bold; font-family:'Tahoma';margin-bottom:22px;">
<?php echo $nombrePagina[$_idioma]; ?>
</h2> 