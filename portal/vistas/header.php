<?php 
if ( empty($_GET['idioma_request']) ){	
	$idioma =substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2); 			
}else{
	$_idioma =  $_GET['idioma_request'];
}

$pagina['footer']='Texto footer Texto footer  Texto footer  Texto footer ';
$pagina['footer_en']='Footer text Footer text  Footer text Footer text Footer text Footer text ';

if ($_idioma!='es' && $_idioma!='en') $_idioma='es';

$sufijo = ($_idioma=='es')? '' : '_'.$_idioma;
?>

<!doctype html>

<html lang="<?php echo $_idioma; ?>">
<head>
	

	<link rel="stylesheet" type="text/css" href="<?php echo $WEB_BASE; ?>css/reset.css" />
	<script src="<?php echo $APP_PATH; ?>web/libs/jquery-1.8.3.js" ></script>
	
	
	
	
	<style>	
		@font-face {
			font-family: "Mark Sans";
			src:  url("<?php echo $WEB_BASE; ?>fonts/mark/manksans-webfont.woff") format("woff"), url(<?php echo $WEB_BASE; ?>fonts/mark/manksans-webfont.ttf) format("truetype");
		}	
		#header{
			background-repeat: no-repeat,repeat-x;  height:232px; width:100%;
			background-image: url(<?php echo $WEB_BASE.'imagenes/esq_sup_izq_portal.png'; ?> ), url(<?php echo $WEB_BASE.'imagenes/bg_header_portal.png'; ?> );						
		}
	
		#logo{
			top:56px; position:relative; left:132px;text-decoration:none;
		}
		
		
		
		#contenido{
			background-color:#f6f6f6;
			background-image:url('<?php echo $WEB_BASE; ?>imagenes/mona_portal.png' ),url('<?php echo $WEB_BASE; ?>imagenes/esq_inf_der_portal.png' );
			background-repeat: no-repeat,no-repeat;		
			background-position: bottom left,  bottom right;
			min-height:766px; text-align:center;
			padding-top:23px;
		}
		
		body{
			background-color:#ff9737;
		}
		
		#footer{
			background-repeat: repeat-x; height: 64px; width:100%; background-color:#ff9737; text-align: center; 
			background-image:url('<?php echo $WEB_BASE; ?>imagenes/cenefa_inf.png' );			
			padding-top:16px; font-size:8.8px; color:white; font-family:"Tahoma";
			
		}
		#logito{ top: 19px; position:relative; }
		
		#menu_categorias li a{
			background-image:url('<?php echo $WEB_BASE; ?>imagenes/bg_menu_categoria.png' );			
			display:inline-block;line-height: 40px;font-size: 14.5px;font-family: "Mark Sans";
			color: #2e2e2e;padding-left: 55px;text-decoration: none;margin-bottom:-5px;width:184px; height:47px; 
			font-weight:bold;
		}
		#menu a:hover{ color: #ff9737; }
		
		#menu_categorias{ display: inline-block; vertical-align:top; }
		#menu_categorias li a:hover{
			background-image:url('<?php echo $WEB_BASE; ?>imagenes/bg_menu_categoria_hover.png' );
			color:white;
		}
		
		
		#pagina{ width:995px; text-align: left; display:inline-block; }
		
		#contenido_derecha{display:inline-block; vertical-align:top; width:720px; margin-left:32px;}
		
		#menu { display:inline-block; margin-left: 153px; top: 18px; position: relative; }
		#menu li{ display:inline-block;   text-align:center; position:relative; border-left: white 1px solid; padding: 0 10px 0 10px; height: 9px;}
		#menu li:last-child{  border-right: white 1px solid; }
		#menu a{ color:white; text-decoration:none; font-family: "Tahoma"; font-weight:bold; font-size:10.4px; z-index:1; position:relative; top: -5px;} 		
		#menu a.activo{ border-bottom: white 2px solid; padding-bottom: 3px; }
		
/*		
		#menu li:after{
			content: ''; top:4px; border-left: white 1px solid;			
			width: 100%; left: -100%; margin-left: 91px; position: absolute; height: 12px;		
		} */
		#menu li:last-child:after{
			border-right: white 1px solid;
		}
		
		#botones_idioma{display: inline-block; position:relative; top:25px; margin-left:26px;}
		#botones_idioma a{width:97px; height:21px; display:inline-block;}
		
		#btn_esp{ background-image:url('<?php echo $WEB_BASE; ?>imagenes/btn_esp_portal.png' ); }
		#btn_esp:hover{background-image:url('<?php echo $WEB_BASE; ?>imagenes/btn_esp_hover_portal.png' );}
		
		
		
		#btn_ing{ background-image:url('<?php echo $WEB_BASE; ?>imagenes/btn_ing_portal.png' ); }
		#btn_ing:hover{background-image:url('<?php echo $WEB_BASE; ?>imagenes/btn_ing_hover_portal.png' );}
		
		@media all and (max-width: 1025px) {
			  #botones_idioma {
				display: inline-block;
				position: absolute;
				top: 3px;
				right: 15px;				
			}
			
			#menu {
				margin-left:193px; 
			}
			
		}
		
		@media all and (max-width: 1280px) and (min-width: 1026px) {
			#botones_idioma {
				position: absolute;
				top: 79px;
				right: 33px;
			
			}
			
			#menu {
				position: absolute;
				left: 438px;
				margin-left: 0;
				top: 79px;
			}
			
			#menu a{
				font-size:13px;
			}
		}
		
	
		
		
		
		
		
		
		@media all and (min-width: 1281px) {
			
			
			#menu {
				left: 476px;
				position: absolute;
			
				margin-left: 0;
				top: 81px;
			}
			

			#menu a{
				font-size:13px;
			}
			
			#botones_idioma {
				position: absolute;
				top: 79px;
				right: 33px;
			
			}
		}
		
		.wrap_social{
			display: inline-block;
			position: absolute;
			top: 135px;
			left: 402px;
			background-image: url(<?php echo $WEB_BASE; ?>imagenes/bg_social.png);
			width: 243px;
			height: 42px;
			padding: 6px 0 0 0px;
			text-align: center;
			background-repeat: no-repeat;
			
		}
		
		
		.cse input.gsc-search-button, input.gsc-search-button{
			
			background: none !important;border: none !important;
			background-image:url(<?php echo $WEB_BASE; ?>imagenes/search_btn.png) !important;   
			background-repeat:no-repeat !important; width: 22px !important; height: 21px;
			vertical-align: top;
			height: 21px;
		} 
	</style>
	<script>
		$(function(){
			var sw= $(document).width();
			if (sw > 1300){
				var mw = sw - 351 - 198 - 33;
			
				$("#menu").css('position','absolute');
				$("#menu").css('left','0');
				$("#menu").css('margin-left','353px');
				$("#menu").css('top','81px');
				$("#menu").width(mw);
				$("#menu").css('text-align','center');
			}		
		});
	</script>	
	<!--  INICIA SPHIDEr -->
	
	<link type="text/css" rel="stylesheet" href="<?php echo $APP_PATH.'sphider-1.3.6/'; ?>templates/standard/search.css">
	<!-- suggest script -->
	<style type="text/css">@import url("<?php echo $APP_PATH.'sphider-1.3.6/'; ?>include/js_suggest/SuggestFramework.css");</style>
	<script type="text/javascript" src="<?php echo $APP_PATH.'sphider-1.3.6/'; ?>include/js_suggest/SuggestFramework.js"></script>
	<script type="text/javascript">window.onload = initializeSuggestFramework;</script>
	<!--  FIN SPHIDER -->
	
	<link rel="stylesheet" type="text/css" href="<?php echo $WEB_BASE; ?>css/estilos.css" />
	
	<script type="text/javascript">var switchTo5x=true;</script>
	<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
	<script type="text/javascript">stLight.options({publisher: "ur-56975a85-9c7a-18de-9afd-481c96c13a3b", doNotHash: false, doNotCopy: false, hashAddressBar: false,servicePopup:true});</script>
	<?php
		if ( isset($this->pagina) ){
			$titulo = !empty($this->pagina['titulo'.$sufijo])? $this->pagina['titulo'.$sufijo] :  $_PETICION->controlador.'/'.$_PETICION->accion;
		}else{
			$titulo = $_PETICION->controlador.'/'.$_PETICION->accion;
		}
		
	?>
	<title><?php echo $titulo ?></title>
	<style>
		.gsc-control-cse{
			background-color:#f6f6f6 !important; border:none !important;
		}
		
		form.gsc-search-box{ padding:10px 0px 20px 0px !important; 			
			position: absolute;
			top: 140px;
			right: 198px;
			width: 223px;
			background-image: url(<?php echo $WEB_BASE; ?>imagenes/bg_social.png);
			background-repeat: no-repeat;
			padding-left: 18px;
		}
			
		td.gsc-input{
			left: 45px;
			position: relative;
			width: 121px !important;
			display: inline-block !important
		}
		input.gsc-input{
			background-image:none !important;  background:none !important; border:none !important;
			background-image:url(<?php echo $WEB_BASE; ?>imagenes/searchbox_input.png) !important; background-repeat:no-repeat !important;
			color:#333333 !important; width:121px !important; height: 20px !important;
			 vertical-align: top;
		}
		input.gsc-search-button {
			background:none !important; border:none !important; color:transparent !important;  background-repeat:no-repeat !important;
			background-image:url(<?php echo $WEB_BASE; ?>imagenes/search_btn.png) !important;
			position: relative;
			margin: 0 !important;
padding: 0 !important;
width: 24px !important;
min-width:0 !important;
			cursor:pointer !important;
		}
		
	</style>
	<?php 
		if ( $_PETICION->controlador == 'productos' && $_PETICION->accion=='ver' && isset($this->categoriaActual ) ){
			$categoriaActual  = $this->categoriaActual;				
			$rutaEs		=$APP_PATH.'es/portal/productos/ver/'.$categoriaActual['id'].'/'.str_replace(" ",'_',$categoriaActual['nombre']); 
			$rutaIng	=$APP_PATH.'en/portal/productos/ver/'.$categoriaActual['id'].'/'.str_replace(" ",'_',$categoriaActual['nombre_en']);		
		}else if ( $_PETICION->controlador == 'publicaciones' && $_PETICION->accion=='mostrar' && isset($this->categoriaActual ) ){
			$categoriaActual  = $this->categoriaActual;				
			$rutaEs		=$APP_PATH.'es/portal/publicaciones/mostrar/'.$categoriaActual['id'].'/'.str_replace(" ",'_',$categoriaActual['nombre']); 
			$rutaIng	=$APP_PATH.'en/portal/publicaciones/mostrar/'.$categoriaActual['id'].'/'.str_replace(" ",'_',$categoriaActual['nombre_en']);	
		}
		else{
			$rutaEs		= $APP_PATH.'es/'.$_PETICION->controlador.'/'.$_PETICION->accion; 
			$rutaIng	= $APP_PATH.'en/'.$_PETICION->controlador.'/'.$_PETICION->accion;
		}			
		
		$ruta_home = $APP_PATH.$_idioma.'/paginas/inicio';
	?>
	
	<script>
		$(function(){
			$('#btn_esp').attr('href','<?php echo $rutaEs; ?>');
			$('#btn_ing').attr('href','<?php echo $rutaIng; ?>');
			$('#logo').attr('href','<?php echo $ruta_home; ?>');
		});
	</script>
	</head>
<body>
	

<div id="header">
	<a href="#" rel="nofollow" id="logo"><img src="<?php echo $WEB_BASE.'imagenes/logo_portal.png'; ?>" alt="My Mazatlan Souvenir" width="226" height="75" > </a>
	<ul id="menu">
		<?php 
		$ubicacion = $_PETICION->controlador.'/'.$_PETICION->accion;		
		foreach($this->menus as $menu){
			$clase = ($menu['target'] == $ubicacion)? 'activo' : '';
			echo '<li><a mtarget="'.$menu['target'].'" class="'.$clase.'" href="'.$APP_PATH.$_idioma.'/'.$menu['target'].'">'.$menu['titulo'.$sufijo].'</a></li>';			
		}
		?>		
	</ul>
	<div id="botones_idioma">
		
		<a href="#" rel="nofollow" id="btn_esp"></a>
		<a href="#" rel="nofollow" id="btn_ing"></a>
	</div>
	<div class="wrap_social">
		<span st_url='http://mymazatlansouvenirs.com<?php echo $APP_PATH.$_idioma.'/inicio'; ?>' class='st_facebook_hcount' displayText='Facebook'></span>
		<span st_url='http://mymazatlansouvenirs.com<?php echo $APP_PATH.$_idioma.'/inicio'; ?>' class='st_twitter_hcount' displayText='Tweet'></span>		
		<span st_url='http://mymazatlansouvenirs.com<?php echo $APP_PATH.$_idioma.'/inicio'; ?>' class='st_googleplus_hcount' displayText=''></span>				
	</div>
	
	<div style="position:absolute; top: 140px;right: 198px; width: 223px; background-image: url(<?php echo $WEB_BASE; ?>imagenes/bg_social.png); background-repeat: no-repeat; padding-left: 18px;">
		<script>			
			$(function(){
				$('.gsc-search-button').live('click',function(){
					var val = $('#gsc-i-id1').val();
					if (val != '' ) {
						$('#contenido').hide();
					}
					
					
					// $("#contenido_pagina").remove()
				});
				
				$('.gsc-clear-button').live('click',function(){
					$('#contenido').show();
				});
				
				$('.gsc-input').live('keyup',function(event){
					if (event.which == 13) {
						var val = $('#gsc-i-id1').val();
						if (val != '' ) {
							$('#contenido').hide();
						}
					 }					
				});
				
			});
			
  // (function() {
    // var cx = '017750272893093256569:w-zkixdiv00';
    // var gcse = document.createElement('script');
    // gcse.type = 'text/javascript';
    // gcse.async = true;
    // gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
        // '//www.google.com/cse/cse.js?cx=' + cx;
    // var s = document.getElementsByTagName('script')[0];
    // s.parentNode.insertBefore(gcse, s);
  // })();
  
		
</script>

	</div>
	 <?php  // $this->mostrar('/portal/paginas/search_sphider'); ?>
	<form method="GET" class="gsc-search-box" action="<?php echo $APP_PATH.$_idioma; ?>/paginas/search_sphider" style="text-align: center;" >

		<div style="display:inline-block;">
			<input type="text"  class="gsc-input" name="query" size="25" maxlength="255" value="<?php echo empty($_GET['query'])? '' : $_GET['query']; ?>" style="margin-right:-5px;padding-left:10px;" />
			<input type="hidden"   name="search" size="25" maxlength="255" value="1" style="" />
			
			<input type="submit" class="gsc-search-button" value="" style="" />
		</div>

	</form>
</div>
