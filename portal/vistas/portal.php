<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Souvenir</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Mazatlan recuerdos, joyas" />
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
		
		h2, h1{
			color: rgba(0,0,0,0.6);
			
		}
		.articulo p{ text-align:justify; display:inline-block;}
		p{font-family:"arial narrow";  padding:0; margin:0; }
		h2 a{ text-decoration:none;
			color: black;			
		}
		.articulo h1,.articulo h2{			
			text-align: left;width: 960px;display: inline-block;
			margin:31px 0 10px 0;padding:0;			
		}

		#contenido{
			padding:0;
			background-image:url(/souvenir/web/imagenes/folklor.jpg);		
		}

.caroufredsel_wrapper{display:inline-block !important; }
	</style>
	
    
</head>
<body style="">
	<?php
		
		 $_idioma = ( empty($_GET['idioma_request']) )? 'es' : $_GET['idioma_request'];
		 
		$Idiomas['en']['menu']['inicio'] = 'Home';
		$Idiomas['en']['menu']['galeria'] = 'Gallery';
		$Idiomas['en']['menu']['mi_mazatlan'] = 'My Mazatlan';
		$Idiomas['en']['menu']['nosotros'] = 'About Us';
		$Idiomas['en']['menu']['contacto'] = 'Contact';
		
		$Idiomas['es']['menu']['inicio'] = 'Inicio';
		$Idiomas['es']['menu']['galeria'] = 'Galeria';
		$Idiomas['es']['menu']['mi_mazatlan'] = 'Mi Mazatlán';
		$Idiomas['es']['menu']['nosotros'] = 'Nosotros';
		$Idiomas['es']['menu']['contacto'] = 'Contacto';
		
		$Menu['es']['inicio']='paginas/inicio';
		$Menu['es']['galeria']='paginas/galeria';
		$Menu['es']['my_mazatlan']='paginas/my_mazatlan';
		$Menu['es']['historia']='paginas/historia';
		$Menu['es']['contacto']='paginas/contacto';
		
		
		$Menu['en']['inicio']='pages/home';
		$Menu['en']['galeria']='pages/gallery';
		$Menu['en']['my_mazatlan']='pages/my_mazatlan';
		$Menu['en']['historia']='pages/history';
		$Menu['en']['contacto']='pages/contact';
	?>
	<div id="fb-root"></div>
	

	<div id="header" style="width:100%; height:64px; background:black url(<?php echo $WEB_BASE; ?>imagenes/escheresque_ste.png) ; text-align:center; ">
		<div style="width:960px; display:inline-block; position:relative; height:64px;" >
			<img src="<?php echo $WEB_BASE; ?>imagenes/logo_2.png" style="width:209px; hwight:60px; float:left; margin-top:4px;"/>
			
			
			<ul class="menu">
				<?php
				
				?>
				<li> <a href="<?php echo $APP_PATH.$_idioma.'/'.$Menu[$_idioma]['inicio'];  ?>" class="<?php echo ($_PETICION->accion=='inicio')? 'activo' : '' ?>"><?php echo $Idiomas[$_idioma]['menu']['inicio']; ?> </a></li>
				<li> <a href="<?php echo $APP_PATH.$_idioma.'/'.$Menu[$_idioma]['galeria']; ?>" class="<?php echo ($_PETICION->accion=='galeria')? 'activo' : '' ?>"><?php echo $Idiomas[$_idioma]['menu']['galeria']; ?></a></li>
				<li><a href="<?php echo $APP_PATH.$_idioma.'/'.$Menu[$_idioma]['my_mazatlan']; ?>" class="<?php echo ($_PETICION->accion=='my_mazatlan')? 'activo' : '' ?>" ><?php echo $Idiomas[$_idioma]['menu']['mi_mazatlan']; ?></a></li>
				<li> <a href="<?php echo $APP_PATH.$_idioma.'/'.$Menu[$_idioma]['historia']; ?>" class="<?php echo ($_PETICION->accion=='historia')? 'activo' : '' ?>" ><?php echo $Idiomas[$_idioma]['menu']['nosotros']; ?></a></li>
				<li> <a href="<?php echo $APP_PATH.$_idioma.'/'.$Menu[$_idioma]['contacto']; ?>" class="<?php echo ($_PETICION->accion=='contacto')? 'activo' : '' ?>" ><?php echo $Idiomas[$_idioma]['menu']['contacto']; ?></a></li>
			</ul>
			<a href="#" style="right:0; margin-top:-16px; top:50%; position:absolute;"><img src="http://png.findicons.com/files/icons/2052/social_network/32/facebook.png" /></a>
			<!--div class="fb-like" data-href="http://mymazatlansouvenirs.com/" data-send="true" data-width="450" data-show-faces="false" style="position:absolute;"></div-->
		</div>
	</div>
		
	
		
	<div id="contenido">
		<div id="pagina" style="background:white; box-shadow:0 0 3px;margin:20px 0 20px 0; display:inline-block; width:940px; text-align:left;padding:20px;position:relative;">
			<?php $this->mostrar(); ?>		
		</div>
		
	</div>
	<div id="footer" style="text-align:center;">
		<div style=" width:960px; display:inline-block; position:relative; ">
			<div style="text-align:left;width:50%;  display:inline-block; width:49%; ">
				<ul style="padding:0;">
				
				<li><a href="<?php echo $APP_PATH.$_idioma.'/'.$Menu[$_idioma]['inicio'];  ?>"><?php echo $Idiomas[$_idioma]['menu']['inicio']; ?> </a></li>
				<li><a href="<?php echo $APP_PATH.$_idioma.'/'.$Menu[$_idioma]['galeria'];  ?>"><?php echo $Idiomas[$_idioma]['menu']['galeria']; ?> </a></li>
				<li><a href="<?php echo $APP_PATH.$_idioma.'/'.$Menu[$_idioma]['my_mazatlan'];  ?>"><?php echo $Idiomas[$_idioma]['menu']['mi_mazatlan']; ?> </a></li>
				<li><a href="<?php echo $APP_PATH.$_idioma.'/'.$Menu[$_idioma]['nosotros'];  ?>"><?php echo $Idiomas[$_idioma]['menu']['nosotros']; ?> </a></li>
				<li><a href="<?php echo $APP_PATH.$_idioma.'/'.$Menu[$_idioma]['contacto'];  ?>"><?php echo $Idiomas[$_idioma]['menu']['contacto']; ?> </a></li>
				
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