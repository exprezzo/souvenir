
<script src="<?php echo $MOD_WEB_PATH; ?>js/catalogos/<?php echo $_PETICION->controlador; ?>/edicion.js"></script>
<script src="<?php echo $MOD_WEB_PATH; ?>js/catalogos/<?php echo $_PETICION->controlador; ?>/imagenes_producto.js"></script>

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
		 
		  var paramsDetalle={
			tabId:tabId,
			padre:editor,
			fk_padre:$('#'+config.tab.id + ' [name="'+config.pk+'"]').val(),
			imagenes: <?php echo json_encode($this->imagenes); ?>
		 };
		 var detalle=new ImagenesProducto();
		 detalle.init(paramsDetalle);
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
		
		<form class="frmEdicion" style="padding-top:10px;">				
			<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;"  >
	<label style="">Id:</label>
	<input type="text" name="id" class="txt_id" value="<?php echo $this->datos['id']; ?>" style="width:500px;" />
</div>
<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;"  >
	<label style="">Codigo:</label>
	<input type="text" name="codigo" class="txt_codigo" value="<?php echo $this->datos['codigo']; ?>" style="width:500px;" />
</div>
<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;"  >
	<label style="">Nombre:</label>
	<input type="text" name="nombre" class="txt_nombre" value="<?php echo $this->datos['nombre']; ?>" style="width:500px;" />
</div>
<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;"  >
	<label style="">Descripcion:</label>
	<input type="text" name="descripcion" class="txt_descripcion" value="<?php echo $this->datos['descripcion']; ?>" style="width:500px;" />
</div>
<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;"  >
	<label style="">Precio:</label>
	<input type="text" name="precio" class="txt_precio" value="<?php echo $this->datos['precio']; ?>" style="width:500px;" />
</div>
<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;"  >
	<label style="">Imagen:</label>
	<input type="text" name="imagen" class="txt_imagen" value="<?php echo $this->datos['imagen']; ?>" style="width:500px;" />
</div>
<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;"  >
	<label style="">Nombre_en:</label>
	<input type="text" name="nombre_en" class="txt_nombre_en" value="<?php echo $this->datos['nombre_en']; ?>" style="width:500px;" />
</div>
<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;"  >
	<label style="">Descripcion_en:</label>
	<input type="text" name="descripcion_en" class="txt_descripcion_en" value="<?php echo $this->datos['descripcion_en']; ?>" style="width:500px;" />
</div>
<div class="inputBox" style="margin-bottom:8px;display:block;margin-left:10px;width:100%;"  >
	<label style="">Orden:</label>
	<input type="text" name="orden" class="txt_orden" value="<?php echo $this->datos['orden']; ?>" style="width:500px;" />
</div>

		</form>
		
		<div class="imagenes" style="width:754px;">
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
