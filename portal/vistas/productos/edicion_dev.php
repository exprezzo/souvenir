
<script src="<?php echo $MOD_WEB_PATH; ?>js/catalogos/<?php echo $_PETICION->controlador; ?>/edicion.js"></script>
<script src="<?php echo $MOD_WEB_PATH; ?>js/catalogos/<?php echo $_PETICION->controlador; ?>/imagenes_producto.js"></script>
<style>
	.imagenes_carpeta{
		display:inline-block;vertical-align:top;
		width:450px;height:450px; overflow:auto;
		
	}
	.imagenes_carpeta img{margin:5px; border:transparent 2px solid; }
	.imagenes_carpeta img.seleccionado{ border:blue 2px solid;}
	
	.selector_imagenes  .wijmo-wijtree {display:inline-block;}
	.wijmo-wijdialog-titlebar-close{position:relative;}
</style>
<script>			
	$( function(){		
		var config={
			tab:{
				id:'<?php echo $_REQUEST['tabId']; ?>'
			},
			controlador:{
				nombre:'<?php echo $_PETICION->controlador; ?>'
			},
			modulo:{
				nombre:'<?php echo $_PETICION->modulo; ?>'
			},
			catalogo:{
				nombre:'Productos',
				modelo:'Producto'
			},			
			pk:"id"
			
		};				
		 var editor=new Edicionproductos();
		 editor.init(config);		
		 
		 var tabId='#'+config.tab.id;
		 $(tabId+' [name="precio"]').wijinputnumber({type:'currency', decimalPlaces: 2, increment: 1, showSpinner: true});
		 $(tabId+' [name="precio_en"]').wijinputnumber({type:'currency', decimalPlaces: 2, increment: 1, showSpinner: true});
		 
		  var paramsDetalle={
			tabId:tabId,
			padre:editor,
			fk_padre:$('#'+config.tab.id + ' [name="'+config.pk+'"]').val(),
			imagenes: <?php echo json_encode($this->imagenes); ?>
		 };
		 var detalle=new ImagenesProducto();
		 detalle.init(paramsDetalle);
		 
		 $.wijmo.wijtreenode.prototype.options.expanded = true;
		 $(tabId + ' .carpetas').wijtree();
		 
		 var divImagenes = $(tabId + '  .imagenes_carpeta');
		 
		 $(tabId +  ' .carpetas li').bind('click',function(e){
			e.stopPropagation();
			var ruta =$(this).attr('ruta') + $(this).attr('texto');  
			
			$(divImagenes).empty();
			
			$.ajax({
			  type: "POST",
			  url: kore.url_base+'portal/productos/obtenerImagenes',
			  data: { ruta: ruta }
			}).done(function( respuesta ) {
				var res = eval( '(' + respuesta + ')');
				var imagen='';
				var url='',ruta="";
				for (var i=0; i<res.imagenes.length; i++){
					url=kore.url_base+'web/imagenes/'+res.imagenes[i].base+res.imagenes[i].nombre;
					ruta=res.imagenes[i].base+res.imagenes[i].nombre;
					imagen='<img nombre="'+res.imagenes[i].nombre+'" ruta="'+ruta+'" width="100" height="100" src="timthumb.php?src='+url+'&h=150" base="'+res.imagenes[i].base+'" />';
					
					$(divImagenes).append(imagen);
					
					
				}
				var imagenes =$(divImagenes).find('img');
						for(var x=0; x<imagenes.length; x++){
							// alert("asd");
							$(imagenes[x]).bind('click',function(){
								
								if ( $(this).hasClass("seleccionado") ){
									$(this).removeClass("seleccionado");
								}else{
									$(this).addClass("seleccionado");
								}
							});
						}
			});
		 });
		 
		  var selector = $(tabId + ' .selector_imagenes').wijdialog({
               buttons : [],
			  modal:true,			  
			  autoOpen:false,
			  minWidth:900              
          });
		  detalle.selector=selector;
		  // console.log("selector "); console.log(selector );
	});
</script>

	<div class="pnlIzq">
		<div style="" class="cerrar_tab"></div>
		<?php 	
			global $_PETICION;
			$this->mostrar('/backend/componentes/toolbar');	
			if (!isset($this->datos)){		
				$this->datos=array();		
			}
			
		?>
		
		<form class="frmEdicion" style="padding-top:10px; display:inline-block;">				
			<img src="<?php echo $WEB_BASE.'imagenes/'.$this->datos['imagen']; ?>" width="200" style="float:right; margin-bottom:20px;" />
			<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%; clear:both; "  >
				<label style="">Id:</label>
				<input type="text" name="id" class="txt_id" value="<?php echo $this->datos['id']; ?>" style="width:500px;" />
			</div>
			<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;  "  >
				<label style="">Codigo:</label>
				<input type="text" name="codigo" class="txt_codigo" value="<?php echo $this->datos['codigo']; ?>" style="width:500px;" />
			</div>
			<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%; clear:both;"  >
				<label style="">Nombre:</label>
				<input type="text" name="nombre" class="txt_nombre" value="<?php echo $this->datos['nombre']; ?>" style="width:500px;" />
			</div>
			<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;  "  >
				<label style="">Categoria:</label>
				<input type="text" name="fk_categoria" class="txt_fk_categoria" value="<?php echo $this->datos['fk_categoria']; ?>" style="width:500px;" />
			</div>
			<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;"  >
				<label style="">Descripcion:</label>
				<textarea name="descripcion" style="width:500px;"> <?php echo $this->datos['descripcion']; ?></textarea>				
			</div>
			<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;"  >
				<label style="">Precio:</label>
				<input type="text" name="precio" class="txt_precio" value="<?php echo $this->datos['precio']; ?>" style="width:500px;" />
			</div>
			<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;  "  >
				<label style="">Imagen:</label>
				<input type="text" name="imagen" class="txt_imagen" value="<?php echo $this->datos['imagen']; ?>" style="width:500px;" />
			</div>
			<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;"  >
				<label style="">Nombre Ing:</label>
				<input type="text" name="nombre_en" class="txt_nombre_en" value="<?php echo $this->datos['nombre_en']; ?>" style="width:500px;" />
			</div>
			<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;  "  >
				<label style="">Precio_en:</label>
				<input type="text" name="precio_en" class="txt_precio_en" value="<?php echo $this->datos['precio_en']; ?>" style="width:500px;" />
			</div>
			<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;"  >
				<label style="">Descripcion Ing:</label>
				<textarea name="descripcion_en" style="width:500px;"><?php echo $this->datos['descripcion_en']; ?></textarea>				
			</div>
			<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;  "  >
				<label style="">Galeria:</label>
				<input type="text" name="galeria" class="txt_orden" value="<?php echo $this->datos['galeria']; ?>" style="width:500px;" />
			</div>
			<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;  "  >
				<label style="">Orden:</label>
				<input type="text" name="orden" class="txt_orden" value="<?php echo $this->datos['orden']; ?>" style="width:500px;" />
			</div>

		</form>
			<div class="selector_imagenes">
				<div class="header"> 
					<h2>Explorador de archivos</h2> 
				</div> 
				  <div class="main "> 
			<ul class="carpetas">
				<li  texto="" ruta="">Imagenes
		<?php 
			// print_r( $this->carpetas );
			
			imprimir_carpetas($this->carpetas);
			
			function imprimir_carpetas($carpetas){
				if ( empty($carpetas) ) return true;
				
				echo '<ul  >';		
				foreach($carpetas as $carpeta){
					echo '<li texto="'.$carpeta['nombre'].'" ruta="'.$carpeta['ruta'].'" >'.$carpeta['nombre'];					
					if ( !empty($carpeta['subcarpetas']) ){
						imprimir_carpetas($carpeta['subcarpetas']); 
					}
					echo '</li>';
				}
				echo '</ul>';
			}
		?>
			</li>
		</ul>
		<div class="imagenes_carpeta">
			
		</div>
			<input type="button" value="Aceptar" /> 
			
		</div>
		</div>
		<div class="imagenes" style="width:754px; ">
			<div class="toolbarDetalles" style="padding:none; margin-bottom:5px; ">
				<button class="btnAgregar" style="padding:none;"></button><h2 style="display: inline-block;padding: 0 0 0 10px;margin: 0;">Imagenes</h2><h2 class=""></h2>
			</div>
			<table class="grid_articulos grid_imagenes">
				<thead><th>col0</th></thead>
				<tbody>				
				</tbody>			
			</table>
		</div>
	</div>
</div>
