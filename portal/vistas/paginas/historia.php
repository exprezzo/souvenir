<?php
	$_idioma = ( empty($_GET['idioma_request']) )? 'es' : $_GET['idioma_request'];
	include ('../portal/vistas/contenido/'.$_idioma.'/historia.php');
?>