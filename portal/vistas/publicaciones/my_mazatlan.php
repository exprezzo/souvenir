<?php		
	 $_idioma = ( empty($_GET['idioma_request']) )? 'es' : $_GET['idioma_request'];		 
	$sufijo = ($_idioma=='es')? '' : '_'.$_idioma;
	
	$pagina['nombre'] =  'Mi Mazatlan';
	$pagina['nombre_en'] = 'My Mazatlan';

?>
<script>
	$(function(){
		
		
	});
</script>
<style>
	.categorias{ text-align:center; }
	.categorias li{ margin-right:20px; }
	.categorias li, .productos li{list-style:none; display:inline-block;}	
	.categorias li a img, .categorias li a span, .productos li a img, .productos li a span{vertical-align:middle;}	
	
	
	#paginador_productos{text-align:center;}
	#paginador_productos li{
		display:inline-block;
		margin-right:10px;
	}
	
	
</style>


<h2 id="titulo_categoria" style=" color:#9eb612;font-size:17.21px; font-weight:bold; font-family:'Tahoma';margin-bottom:22px;"><?php  echo  $pagina['nombre'.$sufijo]; ?></h2> 

<ul class="productos">
	<?php
		
		foreach($this->categoriasPubs as $prod){
			// $link=
			$titulo=$prod['nombre'.$sufijo];
			$descripcion=$prod['descripcion'.$sufijo];
			$imagen=(empty($prod['imagen']) )?  $WEB_BASE.'imagenes/no-image.jpg' : $WEB_BASE.'imagenes/'.$prod['imagen'];
			
			if ($_idioma=='en'){
				// $target=$APP_PATH.$_idioma.'/portal/products/view/'.$categoriaActual['id'].'/'.str_replace(' ','_',$titulo);
			}else{
				// $target=$APP_PATH.$_idioma.'/portal/productos/ver/'.$categoriaActual['id'].'/'.str_replace(' ','_',$titulo);
			}			
			
			$target="#";
			// echo '<li><a href="'.$target.'"><img width="50" height="50" src="'.$imagen.'" /><span>'.$titulo.'</span></a></li>';
		?>	
			<li style=" margin-right:22px; margin-bottom:19px;">
				<a href="<?php echo $APP_PATH.$_idioma.'/portal/publicaciones/mostrar/'.$prod['id'].'/'.str_replace(' ','_',$prod['nombre'.$sufijo]); ?>">
				<img src="<?php echo $imagen; ?>" width="186" height="122" style="display:block;border-radius: 0 8px 0 8px; margin-bottom: 7px;"/>
				<a href="#" style="text-decoration:underline;"></a>
				<div style="background-color:#e8e8e8;  padding:12px 6px 7px 9px; border:#f3f3f3 2px solid; border-top:0;">
					<div style="float:left; color:#888888; font-family:'Mark Sans'; font-size:14.19px;"><?php echo $titulo; ?></div>
					<div style="float:right; color:#faa434; font-family:'Tahoma'; font-size:13.39px; font-weight:bold;"></div>
					<div style="clear:both;"></div>
				</div>
				<!--div style="width: 230px;display: inline-block;vertical-align: top;">
					
					<h3>$<?php //echo $precio; ?></h3>
					<p><?php //echo $descripcion; ?></p>
					
				</div-->
				</a>
			</li>
	<?php
		}
	?>	
</ul>


