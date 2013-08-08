<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	 <?php $_idioma = ( empty($_GET['idioma_request']) )? 'es' : $_GET['idioma_request'];	 ?>
	 
	<title>Souvenir</title>

	<meta name="viewport" content="width=980, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />
	<link rel="stylesheet" type="text/css" href="<?php echo $WEB_BASE; ?>css/reset.css" />
	
	<meta http-equiv="Content-Language" content="es"/>
	<meta name="google-translate-customization" content="44e65435f1bfea6-01e89e96cf0c3ba5-g93eb31678105cbae-2f" />
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
		@-viewport {
		width: 980px;
		zoom:.5;
		}
		@font-face {
			font-family: "JI_ChimichangaX";
			src:  url("fonts/ji_chimichanga/JI_Chimichanga.woff") format("woff"), url(fonts/ji_chimichanga/JI_Chimichanga.ttf) format("truetype");
		}
			
		
		h2, h1{ color: rgba(0,0,0,0.6); }
		.articulo p{ text-align:justify; display:inline-block; -moz-column-count:2; /* Firefox */
		-webkit-column-count:2; /* Safari and Chrome */
		column-count:2;}
		p{font-family:"arial narrow";  padding:0; margin:0; }
		h2 a{ text-decoration:none; color: black; }
		.articulo h1,.articulo h2{
			text-align: left;width: 960px;display: inline-block;
			margin:31px 0 10px 0;padding:0;
		}

		#contenido{padding:0;}
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
		
		.menu{ margin-left:33px;}
		.menu li{position:relative;}
		.menu a{z-index:0;}
		
		.menu li:after{
			top:4px;
			border-left: white 1px solid;
			content: '';
			width: 100%;
			left: -100%;
			margin-left: 94px;
			position: absolute;
			height: 12px;
			z-index:-1;
		}
		
		.menu li:last-child:after{
			border-right: white 1px solid;
		}
		
		.barra1{
			position:relative; width: 313px; height:51px;
			display:inline-block;
		}
		
		.barra1 > span{
			position:relative; top:15px;
		}
		.barra2{
			position:relative; display:inline-block;
			width: 230px; height:51px; vertical-align: top;
		}
		.barra1:before{ margin-left: 315px; }
		.barra2:before{ margin-left: 236px; }
		.barra1:before, .barra2:before{
			content:'';
			width:100%;
			height:100%;
			position:absolute;
			background:white;
			opacity:.3;
			border-radius:3px;
			left:-100%;
			z-index:-1;			
		}
		
		/**/
		#searchbox{
			margin-top:12px;
		}
		#search{
			border:#cfcfcf 1px solid;
			border-radius:2px 0 0 2px;
			height:23.5px;
			width:142px;
			padding-left:10px;
			position:relative;
			
			
			top:0px;  
			vertical-align:top;
		}
		
		#submit{		
			padding:0 7px 0 7px;
			height:28px;
			margin-left:-5px;
			border-radius:0 4px 4px 0;
			color:white;
			border-top: #fcb64a 1px solid;
			border-bottom: #d29105 1px solid;
			border-left: 0;
			border-right: 0;
			
			width: 29px;
			background-size: 21px;
			background-image: url(http://png.findicons.com/files/icons/1389/g5_system/32/toolbar_find.png);
			background-repeat: no-repeat;
			background-position: 3px 2px;
			
			position: relative; 
		}
		/**/
		
	</style>	
	

	<style type="text/css">
	.btnEsp {
		-moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
		-webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
		box-shadow:inset 0px 1px 0px 0px #ffffff;
		background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ededed), color-stop(1, #dfdfdf) );
		background:-moz-linear-gradient( center top, #ededed 5%, #dfdfdf 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#dfdfdf');
		background-color:#ededed;
		-moz-border-radius:6px;
		-webkit-border-radius:6px;
		border-radius:6px;
		border:1px solid #724b3b;
		display:inline-block;
		color:#3c3c3c;
		font-family:arial;
		font-size:13px;
		font-weight:bold;
		padding:6px 24px;
		text-decoration:none;
		text-shadow:1px 1px 0px #ffffff;
	}
	.btnEsp:hover {
		background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #dfdfdf), color-stop(1, #ededed) );
		background:-moz-linear-gradient( center top, #dfdfdf 5%, #ededed 100% );
		filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#dfdfdf', endColorstr='#ededed');
		background-color:#dfdfdf;
	}
	.btnEsp:active {
		position:relative;
		top:1px;
	}
/* This imageless css button was generated by CSSButtonGenerator.com */
</style>
<style type="text/css">
.btnIng {
	-moz-box-shadow:inset 0px 1px 0px 0px #fed897;
	-webkit-box-shadow:inset 0px 1px 0px 0px #fed897;
	box-shadow:inset 0px 1px 0px 0px #fed897;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #f6b33d), color-stop(1, #d29105) );
	background:-moz-linear-gradient( center top, #f6b33d 5%, #d29105 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f6b33d', endColorstr='#d29105');
	background-color:#f6b33d;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #77503e;
	display:inline-block;
	color:#ffffff;
	font-family:arial;
	font-size:13px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:1px 1px 0px #cd8a15;
}.btnIng:hover {
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #d29105), color-stop(1, #f6b33d) );
	background:-moz-linear-gradient( center top, #d29105 5%, #f6b33d 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#d29105', endColorstr='#f6b33d');
	background-color:#d29105;
}.btnIng:active {
	position:relative;
	top:1px;
}
/* This imageless css button was generated by CSSButtonGenerator.com */
</style>
	
	<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "160b52cb-facd-4e9b-b412-6cb92d9443b6", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
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
		$Menu['es']['ubicacion']='paginas/ubicacion';
				
		$Menu['en']['inicio']='pages/home';
		$Menu['en']['galeria']='pages/gallery';
		$Menu['en']['my_mazatlan']='pages/my_mazatlan';
		$Menu['en']['historia']='pages/history';
		$Menu['en']['contacto']='pages/contact';
		$Menu['en']['ubicacion']='pages/location';		
	?>
	<div id="fb-root"></div>
	

	<div id="header" style="width:100%; height:257px; background:url(<?php echo $WEB_BASE; ?>imagenes/figura_top_left.png),url(<?php echo $WEB_BASE; ?>imagenes/head_bg.png); text-align:center; background-repeat:no-repeat, repeat-x;">
		<div style="width: 1024px;
display: inline-block;
position: relative;
height: 257px;" >
			<div style="width:1024px; display:inline-block;">
				<img src="<?php echo $WEB_BASE; ?>imagenes/logo_3.png" style="width: 279px; height: 91px;float: left;margin-left: 0;position: relative; top:71px;"/>			
				<ul class="menu">				
					<li> <a href="<?php echo $APP_PATH.$_idioma.'/'.$Menu[$_idioma]['inicio'];  ?>" class="<?php echo ($_PETICION->accion=='inicio')? 'activo' : '' ?>"><?php echo $Idiomas[$_idioma]['menu']['inicio']; ?> </a></li>
					<li> <a href="<?php echo $APP_PATH.$_idioma.'/'.$Menu[$_idioma]['galeria']; ?>" class="<?php echo ($_PETICION->accion=='galeria')? 'activo' : '' ?>"><?php echo $Idiomas[$_idioma]['menu']['galeria']; ?></a></li>
					<li><a href="<?php echo $APP_PATH.$_idioma.'/'.$Menu[$_idioma]['my_mazatlan']; ?>" class="<?php echo ($_PETICION->accion=='my_mazatlan')? 'activo' : '' ?>" ><?php echo $Idiomas[$_idioma]['menu']['mi_mazatlan']; ?></a></li>
					<li> <a href="<?php echo $APP_PATH.$_idioma.'/'.$Menu[$_idioma]['historia']; ?>" class="<?php echo ($_PETICION->accion=='historia')? 'activo' : '' ?>" ><?php echo $Idiomas[$_idioma]['menu']['nosotros']; ?></a></li>
					<li style="padding-right:0;"> <a href="<?php echo $APP_PATH.$_idioma.'/'.$Menu[$_idioma]['contacto']; ?>" class="<?php echo ($_PETICION->accion=='contacto')? 'activo' : '' ?>" ><?php echo $Idiomas[$_idioma]['menu']['contacto']; ?></a></li>				
				</ul>
				
				<!--div class="fb-like" data-href="http://mymazatlansouvenirs.com/" data-send="true" data-width="450" data-show-faces="false" style="position:absolute;"></div-->
				<div class="" style="display:inline-block; margin-top:95px; right: 0; position: absolute;">								
					<a style="display:inline-block;" href="<?php echo empty($Menu['es'][$_PETICION->accion])? $APP_PATH : $APP_PATH.'es/'.$Menu['es'][$_PETICION->accion]; ?>" class="btnEsp">Español</a>
					<a style="display:inline-block;" href="<?php echo empty($Menu['es'][$_PETICION->accion])? $APP_PATH : $APP_PATH.'en/'.$Menu['en'][$_PETICION->accion]; ?>" class="btnIng">English</a>				
				</div>
			</div>
			<div style="width:1024px; margin-top:33px; text-align:right; right:33px; position: relative; ">
				<div class="barra1" style="right:14px; ">
					<span class='st_twitter_hcount' displayText='Tweet'></span>
					<span class='st_facebook_hcount' displayText='Facebook'></span>
					<span class='st_googleplus_hcount' displayText='Google +'></span>
				</div>
				
				<div class="barra2" style="">					
					<form id="searchbox" action="<?php echo $APP_PATH.'paginas/buscar'; ?>" style="margin-right:18px;" >
						<input id="search" type="text" placeholder="Buscar">
						<input id="submit" type="submit" value="" class="btnIng" >
					</form>
				</div>
			</div>
		</div>
	</div>
	<div style="position:relative; top:257px; width:100%; height:34px; background:url(<?php echo $WEB_BASE ?>imagenes/patron_triangulo.png); "></div>		
	<div id="contenido">
		<div id="pagina" style="margin:254px 0 40px 0; display:inline-block; width:940px; text-align:left;padding:20px;position:relative; ">
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
					<li ><a href="<?php echo $APP_PATH.$_idioma.'/'.$Menu[$_idioma]['ubicacion'];  ?>"><?php echo $Idiomas[$_idioma]['menu']['ubicacion']; ?> </a></li>
				</ul>
			</div>
			<div style="text-align:right; display:inline-block; width:50%; vertical-align: top; padding-top: 14px;">
				2013 	© My Mazatlan Souvenirs 
			</div>			
		</div>		
	</div>
</body>
</html>