<?php		
	 $_idioma = ( empty($_GET['idioma_request']) )? 'es' : $_GET['idioma_request'];		 
	$sufijo = ($_idioma=='es')? '' : '_'.$_idioma;
	
	$pagina['en']=array(
		'titulo'	=>'Product Catalog',
		'contenido'	=>''
	);
	
	$pagina['es']=array(
		'titulo'	=>'Catalogo de productos',
		'contenido'	=>''
	);
	
	//Determinar categoria actual
	$categoriaActual = $this->categoriaActual;	
	
	$rutaEs		=$APP_PATH.'es/portal/productos/ver/'.$categoriaActual['id'].'/'.str_replace(" ",'_',$categoriaActual['nombre']); 
	$rutaIng	=$APP_PATH.'en/portal/productos/ver/'.$categoriaActual['id'].'/'.str_replace(" ",'_',$categoriaActual['nombre_en']);		
?>
<script>
	$(function(){
		$('#btn_esp').attr('href', '<?php echo $rutaEs; ?>');
		$('#btn_ing').attr('href', '<?php echo $rutaIng; ?>');
	});
</script>
<style>
	.categorias{ text-align:center; }
	.categorias li{ margin-right:20px; }
	.categorias li, .productos li{list-style:none; display:inline-block;}	
	.categorias li a img, .categorias li a span, .productos li a img, .productos li a span{vertical-align:middle;}	
</style>


<h2 id="titulo_categoria" style="color:#9eb612;font-size:17.21px; font-weight:bold; font-family:'Tahoma';margin-bottom:22px;"><?php  echo  $categoriaActual['nombre'.$sufijo]; ?></h2> 

<?php 
	 // print_r( $_PETICION );
?>

<ul class="productos">
	<?php
		if (sizeof($this->productos) ==0 ){
			echo '<h2 style="color:red;">No hay productos en la categoria<h2>';
		
		}
		foreach($this->productos as $prod){
			// $link=
			$titulo=$prod['nombre'.$sufijo];
			$descripcion=$prod['descripcion'.$sufijo];
			$imagen=(empty($prod['imagen']) )?  $WEB_BASE.'imagenes/no-image.jpg' : $WEB_BASE.'imagenes/'.$prod['imagen'];
			$precio=$prod['precio'.$sufijo];
			if ($_idioma=='en'){
				$target=$APP_PATH.$_idioma.'/portal/products/view/'.$categoriaActual['id'].'/'.str_replace(' ','_',$titulo);
			}else{
				$target=$APP_PATH.$_idioma.'/portal/productos/ver/'.$categoriaActual['id'].'/'.str_replace(' ','_',$titulo);
			}			
			
			$target="#";
			// echo '<li><a href="'.$target.'"><img width="50" height="50" src="'.$imagen.'" /><span>'.$titulo.'</span></a></li>';
		?>	
			<li style="border: #eeeeee 2px solid; margin-right:22px; margin-bottom:19px;">
				
				<img src="<?php echo $imagen; ?>" width="186" height="122" style="display:block;"/>
				<a href="#" style="text-decoration:underline;"></a>
				<div style="background-color:#e8e8e8;  padding:12px 6px 7px 9px; border:#f3f3f3 2px solid; border-top:0;">
					<div style="float:left; color:#888888; font-family:'Mark Sans'; font-size:14.19px;"><?php echo $titulo; ?></div>
					<div style="float:right; color:#faa434; font-family:'Tahoma'; font-size:13.39px; font-weight:bold;">$<?php echo $precio; ?></div>
					<div style="clear:both;"></div>
				</div>
				<!--div style="width: 230px;display: inline-block;vertical-align: top;">
					
					<h3>$<?php //echo $precio; ?></h3>
					<p><?php //echo $descripcion; ?></p>
					
				</div-->
				
			</li>
	<?php
		}
	?>	
</ul>