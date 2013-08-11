<?php
	if ( empty($_GET['idioma_request']) ){			
		$_idioma =substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2); 			
	}else{
		$_idioma =  $_GET['idioma_request'];
	}		
	if ($_idioma!='es' && $_idioma!='en') $_idioma='es';
	
	
	$sufijo= ( $_idioma=='es' )? '' : '_'.$_idioma;
	
	$Idioma['es']['Paginas']['Inicio']['bienvenido']='Bienvenido';
	$Idioma['es']['Paginas']['Inicio']['mensaje_catalogos']='Visite nuestro cat&aacute;logo';
	$Idioma['es']['Paginas']['Inicio']['titulo_catalogos']='Galeria';
	
	$Idioma['en']['Paginas']['Inicio']['bienvenido']='Welcome';
	
	$Idioma['en']['Paginas']['Inicio']['mensaje_catalogos']='See our products';
	$Idioma['en']['Paginas']['Inicio']['titulo_catalogos']='Gallery';
	
	$paginas=array();
	

	
	$paginas[]=array(
		'imagen'=>'data1/images/387442584_a2c6ba1238_z.jpg',
		'thumb'=>'data1/tooltips/387442584_a2c6ba1238_z.jpg',
		'ruta'=>'portal/productos/ver/3/Playa',			
		'titulo'=>'My Mazatlan Souvenirs',			
		'descripcion'=>'Nacida en el puerto de mazatlan desde hace tiempo comparte el sabor de la vida sinaloense.',
		'ruta_en'=>'portal/products/view/3/Beach',			
		'titulo_en'=>'My Mazatlan Souvenirs',
		'descripcion_en'=>'Born in the port of mazatlan time shares for the taste of life Sinaloa'
	);
	
	$paginas[]=array(
		'imagen'=>'data1/images/artesanias.jpg',
		'thumb'=>'data1/tooltips/artesanias.jpg',
		'ruta'=>'paginas/historia',			
		'titulo'=>'My Mazatlan Souvenirs',			
		'descripcion'=>'...',
		'ruta_en'=>'pages/history',			
		'titulo_en'=>'My Mazatlan Souvenirs',
		'descripcion_en'=>'...'
	);
	
	
	$paginas[]=array(
		'imagen'=>'data1/images/artesaniasguerreroartesanos.jpg',
		'thumb'=>'data1/tooltips/artesaniasguerreroartesanos.jpg',
		'ruta'=>'paginas/historia',			
		'titulo'=>'...',			
		'descripcion'=>'...',
		'ruta_en'=>'pages/history',			
		'titulo_en'=>'...',
		'descripcion_en'=>'...'
	);
	
	$paginas[]=array(
		'imagen'=>'data1/images/fullarte_huichol.jpg',
		'thumb'=>'data1/tooltips/fullarte_huichol.jpg',
		'ruta'=>'paginas/historia',			
		'titulo'=>'...',			
		'descripcion'=>'...',
		'ruta_en'=>'pages/history',			
		'titulo_en'=>'...',
		'descripcion_en'=>'...'
	);
	
	$paginas[]=array(
		'imagen'=>'data1/images/huichol2.jpg',
		'thumb'=>'data1/tooltips/huichol2.jpg',
		'ruta'=>'paginas/historia',			
		'titulo'=>'...',			
		'descripcion'=>'...',
		'ruta_en'=>'pages/history',			
		'titulo_en'=>'...',
		'descripcion_en'=>'...'
	);
	
	$paginas[]=array(
		'imagen'=>'data1/images/images.jpg',
		'thumb'=>'data1/tooltips/images.jpg',
		'ruta'=>'paginas/historia',			
		'titulo'=>'...',			
		'descripcion'=>'...',
		'ruta_en'=>'pages/history',			
		'titulo_en'=>'...',
		'descripcion_en'=>'...'
	);
	
	
	
?>
<style>
#slideshow{
			width:717px; height:318px; 
			background-image:url( "<?php echo $WEB_BASE; ?>imagenes/marco_slideshow.png" );
			padding-top:16px;
			background-repeat: no-repeat;
			position:relative;
		}
		.ws_bullets{ bottom: -26px !important; }
	#cinta_slideshow{position: absolute;top: -9px;z-index: 100;left: -10px;}
	#wowslider-container1{z-index:1;}
	
	.disquss_wrapper{ width:717px !important; }
	.publicacion_wrap{width:668px; margin:0;background-image: url(<?php echo $WEB_BASE; ?>imagenes/hojas.png);
background-size: 100%;
padding: 17px 25px 25px 25px;
height: 279px;
background-repeat: no-repeat;}
.titulo_publicacion{margin-bottom: 5px; margin-top: 6px; }

.publicacion_wrap{margin-top:15px; }
.titulo_publicacion{ margin-bottom:0px !important;}

.ws_prev{left:-32px !important;}
.ws_next{right:-32px !important;}
</style>
<script>
	$(function(){
		// $("#articulos").carouFredSel();
	});
</script>
<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="<?php echo $WEB_BASE; ?>engine1/style.css" />
<script type="text/javascript" src="<?php echo $WEB_BASE; ?>engine1/jquery.js"></script>

<script type="text/javascript" src="<?php echo $WEB_BASE; ?>js/libs/carouFredSel/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo $WEB_BASE; ?>js/libs/carouFredSel/jquery.carouFredS.js"></script>
<!-- End WOWSlider.com HEAD section -->
<div id="slideshow">
	<!-- Start WOWSlider.com BODY section -->
	
	<div id="wowslider-container1" style="">
		<div class="ws_images">
			<ul>
			<?php
				$numero=1;
				foreach($paginas as $page){
				?>
					<li><a href="#"><img src="<?php echo $WEB_BASE.$page['imagen']; ?>" alt="<?php echo $page['titulo'.$sufijo]; ?>" title="<?php echo $page['titulo'.$sufijo]; ?>" id="wows1_<?php echo $numero; ?>"/></a><?php echo $page['descripcion'.$sufijo]; ?></li>
				<?php
					$numero++;
				}
			?>			
			</ul>
		</div>
		<div class="ws_bullets"><div>
			<?php
				$numero=1;;
				foreach($paginas as $page){
				?>					
					<a href="#" title="<?php echo $page['titulo'.$sufijo]; ?>"><img src="<?php echo $WEB_BASE.$page['thumb']; ?>" alt="<?php echo $page['titulo'.$sufijo]; ?>"/>$numero</a>
				<?php
					$numero++;
				}
			?>			
			
			
			</div></div>
		<span class="wsl"><a href="http://wowslider.com">Responsive Carousel</a> by WOWSlider.com v4.2</span>
		<div class="ws_shadow"></div>
		
	</div>
	<img id="cinta_slideshow" src="<?php echo $WEB_BASE; ?>imagenes/esq_sup_izq_slider.png" />
</div>

<script type="text/javascript" src="<?php echo $WEB_BASE; ?>engine1/wowslider.js"></script>
<script type="text/javascript" src="<?php echo $WEB_BASE; ?>engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->

<?php $this->mostrar('/historia'); ?>
