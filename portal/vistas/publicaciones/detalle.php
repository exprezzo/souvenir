<?php		
	$_idioma = ( empty($_GET['idioma_request']) )? 'es' : $_GET['idioma_request'];		 
	$sufijo = ($_idioma=='es')? '' : '_'.$_idioma;	
	
	$rutaEs		=$APP_PATH.'es/portal/publicaciones/detalle/'.$this->publicacion['id'].'/'.str_replace(" ",'_',$this->publicacion['titulo'.$sufijo]); 
	$rutaEn		=$APP_PATH.'en/portal/publicaciones/detalle/'.$this->publicacion['id'].'/'.str_replace(" ",'_',$this->publicacion['titulo'.$sufijo]); 
?>


<!-- ****************************** -->
<div style="text-align:center;">
	<div style="display:inline-block; vertical-align:top; margin-left:25px; position:relative;">		
			<h2 id="titulo_categoria" style="color:#9eb612;font-size:17.21px;  font-family:'Tahoma';margin-bottom:3px;"><?php  // echo  $nombre; ?></h2> 

			
			<span class='st_facebook_hcount' displayText='Facebook'></span>
			<span class='st_twitter_hcount' displayText='Tweet'></span>		
			<span class='st_googleplus_hcount' displayText=''></span>		
			<span class='st_email_hcount' displayText=''></span>
			<br /><br />
			
			
			<span style="color:#888888; ">
				<?php // echo $descripcion; ?>
			</span>
			
			
	</div>
</div>
	

<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="<?php echo $WEB_BASE; ?>engine3/style.css" />

<script type="text/javascript" src="<?php echo $WEB_BASE; ?>engine3/jquery.js"></script>

<script type="text/javascript" src="<?php echo $WEB_BASE; ?>js/libs/carouFredSel/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<?php echo $WEB_BASE; ?>js/libs/carouFredSel/jquery.carouFredS.js"></script>


<!-- End WOWSlider.com HEAD section -->

<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "ur-56975a85-9c7a-18de-9afd-481c96c13a3b", doNotHash: false, doNotCopy: false, hashAddressBar: true,servicePopup:true});</script>
<style>
#wowslider-container2{
	display: inline-block; float:left;
}

</style>
<script>
jQuery(document).ready(function($) {
	
	$('a[mtarget="publicaciones/my_mazatlan"]').addClass('activo');	
   
   $('#btn_esp').attr('href','<?php echo $rutaEs; ?>');
	$('#btn_ing').attr('href','<?php echo $rutaEn; ?>');
});
     
</script>


<div class="producto">		
	<?php
	if ( empty($this->imagenes['datos']) ){
		$this->imagenes['datos'][] = array('imagen' => $imagen);
		// echo '<img width="300" height="220" src="'.$imagen.'" style="float:left;" />';
	}
	?>
	<!-- Start WOWSlider.com BODY section -->
		
		<div id="wowslider-container3" style="">
			<div class="ws_images">
				<ul>
				<?php
					$numero=0;
					$imagenes = $this->imagenes['datos'];
					
					foreach($imagenes as $image){
						$descripcion =$image['descripcion'.$sufijo];
					?>
						<li><a href="#"><img src="<?php echo $WEB_BASE.'imagenes/data3/images/'.$image['imagen']; ?>" alt="" title="" id="wows3_<?php echo $numero; ?>"/></a><?php echo $descripcion; ?></li>
					<?php
						$numero++;
					}
				?>			
				</ul>
			</div>
			<div class="ws_thumbs"><div>
				<?php
					
					foreach($imagenes as $image){
					?>					
						<a href="#" title=""><img src="<?php echo $WEB_BASE.'imagenes/data3/tooltips/'.$image['imagen']; ?>" alt=""  /></a>
					<?php						
					}
				?>							
				</div></div>			
			<div class="ws_shadow"></div>
			
		</div>
		
	</div>
	<!-- End WOWSlider.com BODY section -->
	


<script type="text/javascript" src="<?php echo $WEB_BASE; ?>engine3/wowslider.js"></script>
<script type="text/javascript" src="<?php echo $WEB_BASE; ?>engine3/script.js"></script>



<div class="disquss_wrapper" style=" clear:both;">
	<div id="disqus_thread"></div>
	<script type="text/javascript">
		/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
		var disqus_shortname = 'mymazatlansouvenir'; // required: replace example with your forum shortname
		var disqus_url = "<?php echo 'http://mymazatlansouvenirs.com/'.$APP_PATH.'/'.$_idioma.'/publicaciones/detalle/'.$this->publicacion['id']; ?> ";
		
		/* * * DON'T EDIT BELOW THIS LINE * * */
		(function() {
			var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
			dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
			(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
		})();
	</script>
	<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
	<a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
</div>