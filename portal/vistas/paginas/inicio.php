<style>
	.destacados {text-align:left;  display:inline-block;}
	.destacados .elemento{width:100px; height:100px;  border-radius:13px; margin:10px; display:inline-block; overflow:hidden;}
	.destacados .elemento img{width:100px; height:100px;}
	.destacados_wrap{
		text-align:center;
		-webkit-box-shadow: 0 1px 18px rgba(0, 0, 0, 2.3), 0 0 2px rgba(128, 128, 128, 2.1) inset;
		-moz-box-shadow: 0 1px 18px rgba(0, 0, 0, 2.3), 0 0 2px rgba(128, 128, 128, 2.1) inset;
		box-shadow: 0 1px 18px rgba(0, 0, 0, 2.3), 0 0 2px rgba(128, 128, 128, 2.1) inset;
		width:1000px; display:inline-block;
		margin-left:-31px;
	}
	
	.seccion1{		 
		 padding:0px;		 
		 background:white;		 
		 display:inline-block;
		 position:relative;
	}
	
	
	#wowslider-container1{
		border-radius: 9px;
		border: 2px white solid;
		margin:10px 0 40px 0;
	}
	.ws_images{
		border-radius: 9px;		
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
<div class="seccion1">
	<?php
		$_idioma = ( empty($_GET['idioma_request']) )? 'es' : $_GET['idioma_request'];
		
		$Idioma['es']['Paginas']['Inicio']['bienvenido']='Bienvenido';
		$Idioma['es']['Paginas']['Inicio']['mensaje_catalogos']='Visite nuestro cat&aacute;logo';
		$Idioma['es']['Paginas']['Inicio']['titulo_catalogos']='Variedad de productos';
		
		$Idioma['en']['Paginas']['Inicio']['bienvenido']='Welcome';
		
		$Idioma['en']['Paginas']['Inicio']['mensaje_catalogos']='See our products';
		
	?>
	<h2 style="margin: 0 0 0 20px;
position: absolute;
text-align: center;
top: -31px;
color: black;
background: beige;
padding: 2px 13px 3px 13px; box-shadow:0 0 4px; "><?php echo $Idioma[$_idioma]['Paginas']['Inicio']['bienvenido']; ?></h2>
	
	<!-- Start WOWSlider.com BODY section -->
	
	<div id="wowslider-container1" style="">
		<div class="ws_images">
			<ul>
				<li><img src="<?php echo $WEB_BASE; ?>data1/images/tumblr_moguq5kbvk1qaz9lto2_1280.jpg" alt="tumblr_moguq5kbVk1qaz9lto2_1280" title="tumblr_moguq5kbVk1qaz9lto2_1280" id="wows1_0"/></li>
				<li><img src="<?php echo $WEB_BASE; ?>data1/images/320x240__banner_26.jpg" alt="320x240 - banner 26" title="320x240 - banner 26" id="wows1_1"/>dfjadsh lljal sal alkj alj a la sl jsalj ksdaf ashdf jhsaldfk jas lflakjdjhaskjlaljksd aljsfd ljkasl djkf</li>
				<li><img src="<?php echo $WEB_BASE; ?>data1/images/banner_junco_2.jpg" alt="banner_junco_2" title="banner_junco_2" id="wows1_2"/>jhjalkj laskjllhsad ljf jlsadjf aljsdf hjalsdjf alsjfd</li>
				<li><img src="<?php echo $WEB_BASE; ?>data1/images/luli_031.jpg" alt="luli 031" title="luli 031" id="wows1_3"/></li>
				<li><img src="<?php echo $WEB_BASE; ?>data1/images/387442584_a2c6ba1238_z.jpg" alt="387442584_a2c6ba1238_z" title="387442584_a2c6ba1238_z" id="wows1_4"/></li>
				<li><img src="<?php echo $WEB_BASE; ?>data1/images/tumblr_moguq5kbvk1qaz9lto3_1280.jpg" alt="tumblr_moguq5kbVk1qaz9lto3_1280" title="tumblr_moguq5kbVk1qaz9lto3_1280" id="wows1_5"/></li>
				<li><img src="<?php echo $WEB_BASE; ?>data1/images/100_0398.jpg" alt="100_0398" title="100_0398" id="wows1_6"/></li>
				<li><img src="<?php echo $WEB_BASE; ?>data1/images/cuadro+original+artesan+iacute+a+coquimbo+coquimbo+chile__420f71_2.jpg" alt="cuadro+original+artesan+iacute+a+coquimbo+coquimbo+chile__420F71_2" title="cuadro+original+artesan+iacute+a+coquimbo+coquimbo+chile__420F71_2" id="wows1_7"/>dflh basdhf lkjhsadlf kjasd flajskdf lasjkdflasdjk asldfjkasldfjka sldfjkas dfkjas df</li>
			</ul>
		</div>
		<div class="ws_bullets">
			<div>
				<a href="#" title="tumblr_moguq5kbVk1qaz9lto2_1280"><img src="<?php echo $WEB_BASE; ?>data1/tooltips/tumblr_moguq5kbvk1qaz9lto2_1280.jpg" alt="tumblr_moguq5kbVk1qaz9lto2_1280"/>1</a>
				<a href="#" title="320x240 - banner 26"><img src="<?php echo $WEB_BASE; ?>data1/tooltips/320x240__banner_26.jpg" alt="320x240 - banner 26"/>2</a>
				<a href="#" title="banner_junco_2"><img src="<?php echo $WEB_BASE; ?>data1/tooltips/banner_junco_2.jpg" alt="banner_junco_2"/>3</a>
				<a href="#" title="luli 031"><img src="<?php echo $WEB_BASE; ?>data1/tooltips/luli_031.jpg" alt="luli 031"/>4</a>
				<a href="#" title="387442584_a2c6ba1238_z"><img src="<?php echo $WEB_BASE; ?>data1/tooltips/387442584_a2c6ba1238_z.jpg" alt="387442584_a2c6ba1238_z"/>5</a>
				<a href="#" title="tumblr_moguq5kbVk1qaz9lto3_1280"><img src="<?php echo $WEB_BASE; ?>data1/tooltips/tumblr_moguq5kbvk1qaz9lto3_1280.jpg" alt="tumblr_moguq5kbVk1qaz9lto3_1280"/>6</a>
				<a href="#" title="100_0398"><img src="<?php echo $WEB_BASE; ?>data1/tooltips/100_0398.jpg" alt="100_0398"/>7</a>
				<a href="#" title="cuadro+original+artesan+iacute+a+coquimbo+coquimbo+chile__420F71_2"><img src="<?php echo $WEB_BASE; ?>data1/tooltips/cuadro+original+artesan+iacute+a+coquimbo+coquimbo+chile__420f71_2.jpg" alt="cuadro+original+artesan+iacute+a+coquimbo+coquimbo+chile__420F71_2"/>8</a>
			</div>
		</div>
		<span class="wsl"><a href="http://wowslider.com">Responsive Carousel</a> by WOWSlider.com v4.2</span>
		<div class="ws_shadow"></div>
	</div>
</div>
<script type="text/javascript" src="<?php echo $WEB_BASE; ?>engine1/wowslider.js"></script>
<script type="text/javascript" src="<?php echo $WEB_BASE; ?>engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->
<div class="destacados_wrap" style="background:#736AFF url(<?php echo $WEB_BASE; ?>imagenes/slider/Beach-Background-Wallpaper-Photos.jpg);  position:relative; z-index:2; ">
	<div id="destacados" class="destacados" style="margin-top:28px; margin-bottom:5px;">
		<h2 style="margin: 0 0 0 36px;
position: absolute;
text-align: center;
top: -13px;
color: black;
background: white;box-shadow:0 0 4px; 
padding: 2px 13px 3px 13px;"><?php echo $Idioma[$_idioma]['Paginas']['Inicio']['bienvenido']; ?></h2>
		<div style="text-align:center; position:relative; margin-top:-15px;">
			<label style="	"><?php echo $Idioma[$_idioma]['Paginas']['Inicio']['mensaje_catalogos']; ?></label>
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