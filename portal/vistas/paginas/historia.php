<style>
	h1, h2{
		text-align: left;		
		display: inline-block;
		font-family:"MarkSans";
	}
	.disquss_wrapper{
	width:900px; display:inline-block; text-align:left;
	}
	
	.publicacion_wrap{
		position:relative; margin-top:15px; display:inline-block; margin-bottom:20px;
	}
	.titulo_publicacion{
		color:#9eb612;font-size:17.21px; font-weight:bold; font-family:'Tahoma';
	}
	
	.contenido_publicacion{
		text-align:justify;
		columns:300px 2;
		-webkit-columns:300px 2; /* Safari and Chrome */
		-moz-columns:300px 2; /* Firefox */
	}
	
	{
	
	}
</style>


<?php 
if ( empty($_GET['idioma_request']) ){	
	$idioma =substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2); 			
}else{
	$_idioma =  $_GET['idioma_request'];
}
if ($_idioma!='es' && $_idioma!='en') $_idioma='es';

$_idioma = ( empty($_GET['idioma_request']) )? 'es' : $_GET['idioma_request'];
include ('../portal/vistas/contenido/'.$_idioma.'/historia.php');
?>