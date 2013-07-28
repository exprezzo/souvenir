<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Souvenir</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Mazatlan, recuerdos, joyas" />
	<meta name="description" content="Mazatlan Souvenir es una tienda de artesania fina" />
	<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="<?php echo $WEB_BASE; ?>engine1/style.css" />
	<script type="text/javascript" src="<?php echo $WEB_BASE; ?>engine1/jquery.js"></script>
	
	<script type="text/javascript" src="<?php echo $WEB_BASE; ?>js/libs/carouFredSel/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="<?php echo $WEB_BASE; ?>js/libs/carouFredSel/jquery.carouFredS.js"></script>
	<!-- End WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="<?php echo $WEB_BASE; ?>css/estilos.css" />
	<style>
		
		@font-face {
			font-family: "JI_ChimichangaX";
			src:  url("fonts/ji_chimichanga/JI_Chimichanga.woff") format("woff"), url(fonts/ji_chimichanga/JI_Chimichanga.ttf) format("truetype");
		}		
		
		h2{font-family:'JI_Chimichanga'; font-size:3em;
			color: rgba(0,0,0,0.6);
			text-shadow: 2px 8px 6px rgba(0,0,0,0.2),
            0px -5px 35px rgba(255,255,255,0.3);		
		}
		.articulo p{width:960px; text-align:justify; display:inline-block;}
		p{font-family:"arial narrow"; font-size: 1.5em; padding:0; margin:0; }
		h2 a{ text-decoration:none;
			color: rgba(0,0,0,0.6);
			text-shadow: 2px 8px 6px rgba(0,0,0,0.2),
            0px -5px 35px rgba(255,255,255,0.3);
		}
		.articulo h1,.articulo h2{			
			font-size:3em;text-align: left;width: 960px;display: inline-block;
			margin:31px 0 10px 0;padding:0;			
		}



.caroufredsel_wrapper{display:inline-block !important; }
	</style>
	
    
</head>
<body style="">
	<div id="fb-root"></div>
	

	<div id="header" style="width:100%; height:64px; background:black url(<?php echo $WEB_BASE; ?>imagenes/escheresque_ste.png) ; text-align:center; ">
		<div style="width:960px; display:inline-block; position:relative; height:64px;" >
			<img src="<?php echo $WEB_BASE; ?>imagenes/logo_2.png" style="width:209px; hwight:60px; float:left; margin-top:4px;"/>
			
			
			<ul class="menu">
				<?php
				
				?>
				<li> <a href="<?php echo $APP_PATH; ?>inicio" class="<?php echo ($_PETICION->accion=='inicio')? 'activo' : '' ?>">Inicio</a></li>			
				<li> <a href="<?php echo $APP_PATH; ?>galeria" class="<?php echo ($_PETICION->accion=='galeria')? 'activo' : '' ?>">Galeria</a></li>
				<li><a href="<?php echo $APP_PATH; ?>my_mazatlan" class="<?php echo ($_PETICION->accion=='my_mazatlan')? 'activo' : '' ?>" >My Mazatlan</a></li>
				<li> <a href="<?php echo $APP_PATH; ?>historia" class="<?php echo ($_PETICION->accion=='historia')? 'activo' : '' ?>" >Nuestra Historia</a></li>
				<li> <a href="<?php echo $APP_PATH; ?>contacto" class="<?php echo ($_PETICION->accion=='contacto')? 'activo' : '' ?>" >Contacto</a></li>
			</ul>
			<a href="#" style="right:0; margin-top:-16px; top:50%; position:absolute;"><img src="http://png.findicons.com/files/icons/2052/social_network/32/facebook.png" /></a>
			<div class="fb-like" data-href="http://mymazatlansouvenirs.com/" data-send="true" data-width="450" data-show-faces="true"></div>
		</div>
	</div>
		
	
		
	<div id="contenido">
		<?php $this->mostrar(); ?>
	</div>
	<div id="footer" style="text-align:center;">
		<div style=" width:960px; display:inline-block; position:relative; ">
			<div style="text-align:left;width:50%;  display:inline-block; width:49%; ">
				<ul style="padding:0;">
				
				<li><a href="#">Inicio</a></li>
				<li><a href="#">Galeria</a></li>
				<li><a href="#">My Mazatlan</a></li>
				<li><a href="#">Nosotros</a></li>
				<li><a href="#">Contacto</a></li>
				
				</ul>
				
			</div>
			
			<div style="text-align:right; display:inline-block; width:50%; vertical-align: top;
padding-top: 14px;">
				2013 	© My Mazatlan Souvenirs 
			</div>
			
		</div>
		
	</div>
</body>
</html>