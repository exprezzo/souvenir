<style>
	.destacados {text-align:left;  display:inline-block;}
	.destacados .elemento{width:100px; height:100px;  border-radius:13px; margin:10px; display:inline-block; overflow:hidden;}
	.destacados .elemento img{width:100px; height:100px;}
	
	.elemento{
		opacity:.3;
		-moz-opacity: .3;
        -khtml-opacity: .3;
        -webkit-opacity: : .3;
	}
	
	.elemento:hover{
		opacity:1;
		-moz-opacity: 1;
        -khtml-opacity: 1;
        -webkit-opacity: : 1;
	}
	
	.ws_prev{left: -31px !important;}
	.ws_next{right: -31px !important;}
	.destacados_wrap{
		text-align:center;
		-webkit-box-shadow: 0 1px 18px rgba(0, 0, 0, 2.3), 0 0 2px rgba(128, 128, 128, 2.1) inset;
		-moz-box-shadow: 0 1px 18px rgba(0, 0, 0, 2.3), 0 0 2px rgba(128, 128, 128, 2.1) inset;
		box-shadow: 0 1px 18px rgba(0, 0, 0, 2.3), 0 0 2px rgba(128, 128, 128, 2.1) inset;
		width:980px; display:inline-block;
		margin-left:-41px;
		margin-top:40px;
		width:1021px;
	}
	
	#wowslider-container1 .ws_bullets {
		bottom: -50px !important;
	}
	.ws_shadow{display:none;}
	
	.destacados_wrap:before, .destacados_wrap:after {
		border-style: solid;
		border-color: transparent;
		bottom: -10px;
		content:"";			
		position:absolute;
	}

	.destacados_wrap:before {
		border-width: 0 20px 10px 0;
		border-right-color: #0B0B3B; /* Color de la sombra del doblez */
		left: 0;
	}

	.destacados_wrap:after {
		border-width: 0 0 10px 20px;
		border-left-color: #0B0B3B; /* Color de la sombra del doblez */
		right: 0;
	} 
	.seccion1{		 
		 padding:0px;		 
		 background:white;		 
		 display:inline-block;
		 position:relative;
		 height:309px;
	}

	.seccion1{
		background-image: url(<?php echo $WEB_BASE; ?>imagenes/fondo-banner.png);
		background-repeat: no-repeat;
		padding: 22PX 22PX 0PX 21PX;
	}
	
	#wowslider-container1{
		/* border-radius: 9px;
		border: 2px white solid;
		margin:10px 0 40px 0; */
	}
	.ws_images{
		border-radius: 9px;		
	}
	
	/*		*/
	
	.titulo_papel:before{
		border-style: solid;
		border-color: transparent;
		bottom: -10px;
		content:"";					
		position:absolute;
	}

	.titulo_papel:before {
		border-width: 0 0px 13px 10px;
		border-color: transparent transparent #585858 transparent;
		left: -11px;
		margin-bottom: 29px;
	}

	
	
</style>
<script>
	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=503696492996403";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>

<script type="text/javascript">
	/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
	var disqus_shortname = 'mymazatlansouvenir'; // required: replace example with your forum shortname

	/* * * DON'T EDIT BELOW THIS LINE * * */
	(function () {
		var s = document.createElement('script'); s.async = true;
		s.type = 'text/javascript';
		s.src = '//' + disqus_shortname + '.disqus.com/count.js';
		(document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
	}());
</script>
<script>
	$(function(){
		$("#articulos").carouFredSel();
	});
</script>
<div style="text-align:center;">
<div class="seccion1" style="" >
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
			'imagen'=>'data1/images/photoescudo_riv_nay_el_arte_huichol_ex_artehuichol.jpg',
			'thumb'=>'data1/tooltips/photoescudo_riv_nay_el_arte_huichol_ex_artehuichol.jpg',
			'ruta'=>'portal/productos/ver/3/Playa',			
			'titulo'=>'My Mazatlan Souvenirs',			
			'descripcion'=>'Nacida en el puerto de mazatlan desde hace tiempo comparte el sabor de la vida sinaloense.',
			'ruta_en'=>'portal/products/view/3/Beach',			
			'titulo_en'=>'My Mazatlan Souvenirs',
			'descripcion_en'=>'Born in the port of mazatlan time shares for the taste of life Sinaloa'
		);
		
		$paginas[]=array(
			'imagen'=>'data1/images/artesanas.jpg',
			'thumb'=>'data1/images/artesanas.jpg',
			'ruta'=>'paginas/historia',			
			'titulo'=>'My Mazatlan Souvenirs',			
			'descripcion'=>'...',
			'ruta_en'=>'pages/history',			
			'titulo_en'=>'My Mazatlan Souvenirs',
			'descripcion_en'=>'...'
		);
		
		
		$paginas[]=array(
			'imagen'=>'data1/images/macetasdetalaveraflowerspots.jpg',
			'thumb'=>'data1/images/macetasdetalaveraflowerspots.jpg',
			'ruta'=>'paginas/historia',			
			'titulo'=>'...',			
			'descripcion'=>'...',
			'ruta_en'=>'pages/history',			
			'titulo_en'=>'...',
			'descripcion_en'=>'...'
		);
		
		$paginas[]=array(
			'imagen'=>'data1/images/photoescudo_zac_centro_platero_de_zacatecas_ac_artesanias.jpg',
			'thumb'=>'data1/images/photoescudo_zac_centro_platero_de_zacatecas_ac_artesanias.jpg',
			'ruta'=>'paginas/historia',			
			'titulo'=>'...',			
			'descripcion'=>'...',
			'ruta_en'=>'pages/history',			
			'titulo_en'=>'...',
			'descripcion_en'=>'...'
		);
		
		$paginas[]=array(
			'imagen'=>'data1/images/artesaniaszacatecas1.jpg',
			'thumb'=>'data1/images/artesaniaszacatecas1.jpg',
			'ruta'=>'paginas/historia',			
			'titulo'=>'...',			
			'descripcion'=>'...',
			'ruta_en'=>'pages/history',			
			'titulo_en'=>'...',
			'descripcion_en'=>'...'
		);
		
		$paginas[]=array(
			'imagen'=>'data1/images/photoimage_back_artesanias_3_artesaniaguerrero.jpg',
			'thumb'=>'data1/images/photoimage_back_artesanias_3_artesaniaguerrero.jpg',
			'ruta'=>'paginas/historia',			
			'titulo'=>'...',			
			'descripcion'=>'...',
			'ruta_en'=>'pages/history',			
			'titulo_en'=>'...',
			'descripcion_en'=>'...'
		);
		
		$paginas[]=array(
			'imagen'=>'data1/images/artesanias.jpg',
			'thumb'=>'data1/images/artesanias.jpg',
			'ruta'=>'paginas/historia',			
			'titulo'=>'...',			
			'descripcion'=>'...',
			'ruta_en'=>'pages/history',			
			'titulo_en'=>'...',
			'descripcion_en'=>'...'
		);
		
		$paginas[]=array(
			'imagen'=>'data1/images/artesaniasguerreroartesanos.jpg',
			'thumb'=>'data1/images/artesaniasguerreroartesanos.jpg',
			'ruta'=>'paginas/historia',			
			'titulo'=>'...',			
			'descripcion'=>'...',
			'ruta_en'=>'pages/history',			
			'titulo_en'=>'...',
			'descripcion_en'=>'...'
		);
		
		$paginas[]=array(
			'imagen'=>'data1/images/descarga.jpg',
			'thumb'=>'data1/images/descarga.jpg',
			'ruta'=>'paginas/historia',			
			'titulo'=>'...',			
			'descripcion'=>'...',
			'ruta_en'=>'pages/history',			
			'titulo_en'=>'...',
			'descripcion_en'=>'...'
		);
		
		$paginas[]=array(
			'imagen'=>'data1/images/huichol.jpg',
			'thumb'=>'data1/images/huichol.jpg',
			'ruta'=>'paginas/historia',			
			'titulo'=>'...',			
			'descripcion'=>'...',
			'ruta_en'=>'pages/history',			
			'titulo_en'=>'...',
			'descripcion_en'=>'...'
		);
		
		$paginas[]=array(
			'imagen'=>'data1/images/images.jpg',
			'thumb'=>'data1/images/images.jpg',
			'ruta'=>'paginas/historia',			
			'titulo'=>'...',			
			'descripcion'=>'...',
			'ruta_en'=>'pages/history',			
			'titulo_en'=>'...',
			'descripcion_en'=>'...'
		);
		
		$paginas[]=array(
			'imagen'=>'data1/images/photoescudo_hdgo_artesanias_ac_hidalgoartesania.jpg',
			'thumb'=>'data1/images/photoescudo_hdgo_artesanias_ac_hidalgoartesania.jpg',
			'ruta'=>'paginas/historia',			
			'titulo'=>'...',			
			'descripcion'=>'...',
			'ruta_en'=>'pages/history',			
			'titulo_en'=>'...',
			'descripcion_en'=>'...'
		);
		
		$paginas[]=array(
			'imagen'=>'data1/images/photoescudo_artesanias_artesanias.jpg',
			'thumb'=>'data1/images/photoescudo_artesanias_artesanias.jpg',
			'ruta'=>'paginas/historia',			
			'titulo'=>'...',			
			'descripcion'=>'...',
			'ruta_en'=>'pages/history',			
			'titulo_en'=>'...',
			'descripcion_en'=>'...'
		);
		
		$paginas[]=array(
			'imagen'=>'data1/images/photoescudo_col_artesanias_ac_colimaartesania.jpg',
			'thumb'=>'data1/images/photoescudo_col_artesanias_ac_colimaartesania.jpg',
			'ruta'=>'paginas/historia',			
			'titulo'=>'...',			
			'descripcion'=>'...',
			'ruta_en'=>'pages/history',			
			'titulo_en'=>'...',
			'descripcion_en'=>'...'
		);
		
		$paginas[]=array(
			'imagen'=>'data1/images/photoescudo_col_artesanias_ac_colimaartesania.jpg',
			'thumb'=>'data1/images/photoescudo_col_artesanias_ac_colimaartesania.jpg',
			'ruta'=>'paginas/historia',			
			'titulo'=>'...',			
			'descripcion'=>'...',
			'ruta_en'=>'pages/history',			
			'titulo_en'=>'...',
			'descripcion_en'=>'...'
		);		
		
		$paginas[]=array(
			'imagen'=>'data1/images/fullarte_huichol.jpg',
			'thumb'=>'data1/images/fullarte_huichol.jpg',
			'ruta'=>'paginas/historia',			
			'titulo'=>'...',			
			'descripcion'=>'...',
			'ruta_en'=>'pages/history',			
			'titulo_en'=>'...',
			'descripcion_en'=>'...'
		);
		
		
		
	?>
	
	
	<!-- Start WOWSlider.com BODY section -->
	
	<div id="wowslider-container1" style="">
		<div class="ws_images"><ul>
			<?php
				$numero=1;
				foreach($paginas as $page){
				?>
					<li><a href="<?php echo $_APP_PATH.$_idioma.'/'.$page['ruta'.$sufijo]; ?>"><img src="<?php echo $WEB_BASE.$page['imagen']; ?>" alt="<?php echo $page['titulo'.$sufijo]; ?>" title="<?php echo $page['titulo'.$sufijo]; ?>" id="wows1_<?php echo $numero; ?>"/></a><?php echo $page['descripcion'.$sufijo]; ?></li>
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
</div>
</div>
<script type="text/javascript" src="<?php echo $WEB_BASE; ?>engine1/wowslider.js"></script>
<script type="text/javascript" src="<?php echo $WEB_BASE; ?>engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->
<div class="destacados_wrap" style="display:none; background:#736AFF url(<?php echo $WEB_BASE; ?>imagenes/slider/Beach-Background-Wallpaper-Photos.jpg);  position:relative; z-index:2; background-position:5px 270px; text-align:center;">
	<div id="destacados" class="destacados" style="margin-top:28px; margin-bottom:5px;">
		<h2 class="titulo_papel" style="margin: 0 0 0 36px;
position: absolute;
text-align: center;
top: -13px;
color: black;
background: white;box-shadow:0 0 4px; 
padding: 2px 13px 3px 13px;"><?php echo $Idioma[$_idioma]['Paginas']['Inicio']['titulo_catalogos']; ?></h2>
		<div style="text-align:center; position:relative; margin-top:-15px;">
			
		</div>
		<div>
		<div id="articulos">
		<div class="elemento"><a href="#destacados"><img src="http://media-cdn.tripadvisor.com/media/photo-s/03/78/2b/76/playa-del-carmen.jpg" /></a></div>
		<div class="elemento"><a href="#destacados"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwMax6uX1hDqdUFenUr-tnQSY6aE9F-wc0eiEuITeBYiGgmNgd7w" /></a></div>
		<div class="elemento"><a href="#destacados"><img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRVmGh1snYT0fySs4rlxPR-dH9GqtuI-VeWVQ5mTSfB6P8Q1rWi" /></a></div>
		<div class="elemento"><a href="#destacados"><img src="http://media-cdn.tripadvisor.com/media/photo-s/03/78/2b/76/playa-del-carmen.jpg" /></a></div>
		<div class="elemento"><a href="#destacados"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwMax6uX1hDqdUFenUr-tnQSY6aE9F-wc0eiEuITeBYiGgmNgd7w" /></a></div>
		<div class="elemento"><a href="#destacados"><img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRVmGh1snYT0fySs4rlxPR-dH9GqtuI-VeWVQ5mTSfB6P8Q1rWi" /></a></div>
		<div class="elemento"><a href="#destacados"><img src="http://media-cdn.tripadvisor.com/media/photo-s/03/78/2b/76/playa-del-carmen.jpg" /></a></div>
		<div class="elemento"><a href="#destacados"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSwMax6uX1hDqdUFenUr-tnQSY6aE9F-wc0eiEuITeBYiGgmNgd7w" /></a></div>
		<div class="elemento"><a href="#destacados"><img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRVmGh1snYT0fySs4rlxPR-dH9GqtuI-VeWVQ5mTSfB6P8Q1rWi" /></a></div>
		</div>
		</div>
	</div>
</div>
<?php 
include('../portal/vistas/contenido/'.$_idioma.'/historia.php');
?>