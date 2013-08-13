<?php		
	$_idioma = ( empty($_GET['idioma_request']) )? 'es' : $_GET['idioma_request'];		 
	$sufijo = ($_idioma=='es')? '' : '_'.$_idioma;	
?>

<?php
$imagen = ( empty($this->publicacion['imagen']) )? 'no-image.jpg' : $this->publicacion['imagen'];
$titulo = $this->publicacion['titulo'.$sufijo];

// $precio = $this->publicacion['precio'.$sufijo];
$descripcion = $this->publicacion['contenido'.$sufijo];

	$rutaEs		=$APP_PATH.'es/portal/publicaciones/detalle/'.$this->publicacion['id'].'/'.str_replace(" ",'_',$titulo); 
	
?>
<script type="text/javascript" src="<?php echo $WEB_BASE; ?>libs/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="<?php echo $WEB_BASE; ?>libs/jquery.pikachoose.min.js"></script>

<script>
jQuery(document).ready(function($) {
	$('a[mtarget="publicaciones/my_mazatlan"]').addClass('activo');
    var gallery = $('#thumbs').galleriffic({
        delay:                     3000, // in milliseconds
        numThumbs:                 20, // The number of thumbnails to show page
        preloadAhead:              40, // Set to -1 to preload all images
        enableTopPager:            false,
        enableBottomPager:         true,
        maxPagesToShow:            7,  // The maximum number of pages to display in either the top or bottom pager
        imageContainerSel:         '', // The CSS selector for the element within which the main slideshow image should be rendered
        controlsContainerSel:      '', // The CSS selector for the element within which the slideshow controls should be rendered
        captionContainerSel:       '', // The CSS selector for the element within which the captions should be rendered
        loadingContainerSel:       '', // The CSS selector for the element within which should be shown when an image is loading
        renderSSControls:          true, // Specifies whether the slideshow's Play and Pause links should be rendered
        renderNavControls:         true, // Specifies whether the slideshow's Next and Previous links should be rendered
        playLinkText:              'Play',
        pauseLinkText:             'Pause',
        prevLinkText:              'Previous',
        nextLinkText:              'Next',
        nextPageLinkText:          'Next &rsaquo;',
        prevPageLinkText:          '&lsaquo; Prev',
        enableHistory:             false, // Specifies whether the url's hash and the browser's history cache should update when the current slideshow image changes
        enableKeyboardNavigation:  true, // Specifies whether keyboard navigation is enabled
        autoStart:                 false, // Specifies whether the slideshow should be playing or paused when the page first loads
        syncTransitions:           false, // Specifies whether the out and in transitions occur simultaneously or distinctly
        defaultTransitionDuration: 1000, // If using the default transitions, specifies the duration of the transitions
        onSlideChange:             undefined, // accepts a delegate like such: function(prevIndex, nextIndex) { ... }
        onTransitionOut:           undefined, // accepts a delegate like such: function(slide, caption, isSync, callback) { ... }
        onTransitionIn:            undefined, // accepts a delegate like such: function(slide, caption, isSync) { ... }
        onPageTransitionOut:       undefined, // accepts a delegate like such: function(callback) { ... }
        onPageTransitionIn:        undefined, // accepts a delegate like such: function() { ... }
        onImageAdded:              undefined, // accepts a delegate like such: function(imageData, $li) { ... }
        onImageRemoved:            undefined  // accepts a delegate like such: function(imageData, $li) { ... }
    });
});
     
</script>
<div>	
	<img  src="<?php echo $WEB_BASE.'imagenes/'.$imagen; ?>" width="300" height="200"  style="display:inline-block; vertical-align:top;" />
	<div style="display:inline-block; vertical-align:top;">
		<h2><?php echo $titulo; ?> </h2>
		
		
		<span>
			<?php echo $descripcion; ?>
		</span>
	</div>
</div>

<div id="controls"></div>
<div id="loading"></div>
<div id="slideshow"></div>
<div id="caption"></div>
<div class="galeria_de_imagenes">	
    <?php 	
	foreach($this->imagenes['datos'] as $img ){
		$imagen = $WEB_BASE.'imagenes'.$img['imagen'];		
	?>
		<div class="img">
		  <a target="_blank" href="klematis3_big.htm">
			<img src="<?php echo $imagen; ?>" alt="no-image" width="110" height="90">
		  </a>		  
		</div>	
	<?php
	}

?>
</div>