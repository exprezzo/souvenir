<?php
	if ( empty($_GET['idioma_request']) ){			
		$_idioma =substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2); 			
	}else{
		$_idioma =  $_GET['idioma_request'];
	}		
	if ($_idioma!='es' && $_idioma!='en') $_idioma='es';
?>

<div class="publicacion_wrap" >
	<h2 class="titulo_publicacion"  style="margin:10px 0 10px 0 !important;">Nosotros</h2> 
	<div class="articulo " style="text-align:left;">
		<p class="contenido_publicacion" style="font-size: 15PX;line-height: 22px;">
		<img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQMB7fEHYMTpvBJ_Efm5h13LH8dD2Qx2WVGNBch0lKEBIYn-KiR" style="float:left; width:150px; boder-radius:9px; padding-right:10px; "/>
		Mazatlán es un paraíso vacacional, sin duda unos de sus principales atractivos son sus hermosas playas, con una gran variedad, usted podrá elegir en cuál de todas quiere tomar un refrescante baño de mar y asolearse en su suave arena, Mazatlán le ofrece la oportunidad de hacer de sus vacaciones un recuerdo inolvidable, no deje pasar esta oportunidad, y cuando visite Mazatlán venga preparado para divertirse en grande y adquirir un sensacional bronceado. A continuación te presento las playas mas representativas de Mazatlán.
		</p>
		
	</div>
</div>
<div class="disquss_wrapper" style=" ">
	<div id="disqus_thread"></div>
	<script type="text/javascript">
		/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
		var disqus_shortname = 'mymazatlansouvenir'; // required: replace example with your forum shortname
		var disqus_url = "http://mymazatlansouvenirs.com/demo/es/historia";
		
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