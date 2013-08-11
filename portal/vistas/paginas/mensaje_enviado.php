<?php 
if ( empty($_GET['idioma_request']) ){	
	$idioma =substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2); 			
}else{
	$_idioma =  $_GET['idioma_request'];
}


if ($_idioma!='es' && $_idioma!='en') $_idioma='es';

	$nombrePagina=array(
		'es'=>'Su mensaje ha sido enviado...',
		'en'=>'Message sent...',
	);
?>
<h2 id="titulo" style="color:#9eb612;font-size:17.21px; font-weight:bold; font-family:'Tahoma';margin-bottom:22px;">
<?php echo $nombrePagina[$_idioma]; ?>
</h2> 

<style>

	#contenido {
		background-color: #f6f6f6;
		background-image: url('<?php echo $WEB_BASE; ?>imagenes/mona_infantil.png' ),url('<?php echo $WEB_BASE; ?>imagenes/esq_inf_der_portal.png' );
	}

</style>