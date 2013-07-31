<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	 <?php $_idioma = ( empty($_GET['idioma_request']) )? 'es' : $_GET['idioma_request'];	 ?>
	 
	<title>Souvenir</title>
	<meta http-equiv="Content-Language" content="es"/>
	<meta name="google-translate-customization" content="44e65435f1bfea6-01e89e96cf0c3ba5-g93eb31678105cbae-2f"></meta>
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
		.articulo p{ text-align:justify; display:inline-block; -moz-column-count:2; /* Firefox */
-webkit-column-count:2; /* Safari and Chrome */
column-count:2;}
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
			background:#FF9737;		
			
		}

.caroufredsel_wrapper{display:inline-block !important; }

.idiomas{display:inline-block; position:absolute; top:0;right:0; top:-3px;}
.idiomas a{color:white; text-decoration:none; padding:7px; display:inline-block;}
.idiomas a:hover{ background-color:green; }

.idiomas .idioma{
	margin-right:26px;
	box-shadow:-3px 3px 0 0 #C2C3C4;
	background-color:#FF9737;
	
	display:inline-block;
	font-size:12px;
	color:white;
	font-family:'MarkSans';
}
	</style>
	
    
</head>
<body style="">       
	<?php
		if ( empty($_GET['idioma_request']) ){
			
  
			$idioma =substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2); 
			
		}else{
			$_idioma =  $_GET['idioma_request'];
		}
		
		if ($_idioma!='es' && $_idioma!='en') $_idioma='es';
		 
		$Idiomas['en']['menu']['inicio'] = 'Home';
		$Idiomas['en']['menu']['galeria'] = 'Gallery';
		$Idiomas['en']['menu']['mi_mazatlan'] = 'My Mazatlan';
		$Idiomas['en']['menu']['nosotros'] = 'About Us';
		$Idiomas['en']['menu']['contacto'] = 'Contact';
		$Idiomas['en']['menu']['ubicacion'] = 'Location';
		
		$Idiomas['es']['menu']['inicio'] = 'Inicio';
		$Idiomas['es']['menu']['galeria'] = 'Galeria';
		$Idiomas['es']['menu']['mi_mazatlan'] = 'Mi Mazatlán';
		$Idiomas['es']['menu']['nosotros'] = 'Nosotros';
		$Idiomas['es']['menu']['contacto'] = 'Contacto';
		$Idiomas['es']['menu']['ubicacion'] = 'Ubicacion';
		
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
	

	<div id="header" style="width:100%; height:123px; background:white; text-align:center; ">
		<div style="width: 980px;
display: inline-block;
position: relative;
height: 123px;" >
			<img src="<?php echo $WEB_BASE; ?>imagenes/logo_mediano.png" style="width: 278px;
height: 84px;
float: left;
margin-left: 0;
top: 50%;
position: relative;
margin-top: -42px;"/>
			
			
			<ul class="menu">
				<?php
				
				?>
				<li> <a href="<?php echo $APP_PATH.$_idioma.'/'.$Menu[$_idioma]['inicio'];  ?>" class="<?php echo ($_PETICION->accion=='inicio')? 'activo' : '' ?>"><?php echo $Idiomas[$_idioma]['menu']['inicio']; ?> </a></li>
				<li> <a href="<?php echo $APP_PATH.$_idioma.'/'.$Menu[$_idioma]['galeria']; ?>" class="<?php echo ($_PETICION->accion=='galeria')? 'activo' : '' ?>"><?php echo $Idiomas[$_idioma]['menu']['galeria']; ?></a></li>
				<li><a href="<?php echo $APP_PATH.$_idioma.'/'.$Menu[$_idioma]['my_mazatlan']; ?>" class="<?php echo ($_PETICION->accion=='my_mazatlan')? 'activo' : '' ?>" ><?php echo $Idiomas[$_idioma]['menu']['mi_mazatlan']; ?></a></li>
				<li> <a href="<?php echo $APP_PATH.$_idioma.'/'.$Menu[$_idioma]['historia']; ?>" class="<?php echo ($_PETICION->accion=='historia')? 'activo' : '' ?>" ><?php echo $Idiomas[$_idioma]['menu']['nosotros']; ?></a></li>
				<li> <a href="<?php echo $APP_PATH.$_idioma.'/'.$Menu[$_idioma]['contacto']; ?>" class="<?php echo ($_PETICION->accion=='contacto')? 'activo' : '' ?>" ><?php echo $Idiomas[$_idioma]['menu']['contacto']; ?></a></li>
				<li style="padding-right:0;"><a href="<?php echo $APP_PATH.$_idioma.'/'.$Menu[$_idioma]['contacto'];  ?>"><?php echo $Idiomas[$_idioma]['menu']['ubicacion']; ?> </a></li>
			</ul>
			
			<!--div class="fb-like" data-href="http://mymazatlansouvenirs.com/" data-send="true" data-width="450" data-show-faces="false" style="position:absolute;"></div-->
			<div class="idiomas">
				<div class="idioma"><a href="<?php echo $APP_PATH.'es/paginas/inicio'; ?>">Español</a></div>
				<div class="idioma"><a href="<?php echo $APP_PATH.'en/pages/home'; ?>">English</a></div>
			</div>
		</div>
	</div>
		
	
		
	<div id="contenido">
		<div id="pagina" style="background:white; box-shadow:5px 12px 37px #994C00;margin:123px 0 40px 0; display:inline-block; width:940px; text-align:left;padding:20px;position:relative; ">
			<?php $this->mostrar(); ?>		
		</div>
		
	</div>
	<div id="footer" style="text-align:center; display:none;">
		<div style=" width:960px; display:inline-block; position:relative; ">
			<div style="text-align:left;width:50%;  display:inline-block; width:49%; ">
				<ul style="padding:0;">
				
				<li><a href="<?php echo $APP_PATH.$_idioma.'/'.$Menu[$_idioma]['inicio'];  ?>"><?php echo $Idiomas[$_idioma]['menu']['inicio']; ?> </a></li>
				<li><a href="<?php echo $APP_PATH.$_idioma.'/'.$Menu[$_idioma]['galeria'];  ?>"><?php echo $Idiomas[$_idioma]['menu']['galeria']; ?> </a></li>
				<li><a href="<?php echo $APP_PATH.$_idioma.'/'.$Menu[$_idioma]['my_mazatlan'];  ?>"><?php echo $Idiomas[$_idioma]['menu']['mi_mazatlan']; ?> </a></li>
				<li><a href="<?php echo $APP_PATH.$_idioma.'/'.$Menu[$_idioma]['nosotros'];  ?>"><?php echo $Idiomas[$_idioma]['menu']['nosotros']; ?> </a></li>
				<li><a href="<?php echo $APP_PATH.$_idioma.'/'.$Menu[$_idioma]['contacto'];  ?>"><?php echo $Idiomas[$_idioma]['menu']['contacto']; ?> </a></li>
				<li ><a href="<?php echo $APP_PATH.$_idioma.'/'.$Menu[$_idioma]['contacto'];  ?>"><?php echo $Idiomas[$_idioma]['menu']['ubicacion']; ?> </a></li>
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