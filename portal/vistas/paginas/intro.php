<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo $WEB_BASE; ?>css/reset.css" />
	<script src="<?php echo $APP_PATH; ?>web/libs/jquery-1.8.3.js" ></script>
<style>
	
	
	#header{
		background-image:url(<?php echo $WEB_BASE.'imagenes/esq_sup_izq.png' ?> );
		
		background-image: url(<?php echo $WEB_BASE.'imagenes/esq_sup_izq.png'; ?> ), url(<?php echo $WEB_BASE.'imagenes/fondo_header.png'; ?> );
		background-repeat: no-repeat,repeat-x; height: 207px;		
		margin-bottom: -3px;
		display:none;
	}
	
	#cenefa_header{
		background-repeat: repeat-x; 
		background-image:url(<?php echo $WEB_BASE.'imagenes/patron_header.png' ?> );		
		width:100%;
		height:28px; 
		margin-bottom: -2px;
	}
	
	
	#contenido{				
		width:100%;
		background-repeat:no-repeat;			
		background-size:25%;
		position:relative;
		
		
		
	}
	
	.centro{
		display: inline-block;
		position: relative;
		left: 50%;
		margin-left: -156px;
		width: 312px;		
		margin-top: -83px;
		top: 50%;
	}
	#fondo {
			background-image: url(<?php echo $WEB_BASE.'imagenes/esq_inf_izq.png' ?> ), url(<?php echo $WEB_BASE.'imagenes/background.jpg' ?> );
			height: 100%;
			top: -61px;
			width: 100%;
			position: absolute;
			background-size: 25%, 100% 100%;
			background-position: bottom left, top;
			background-repeat: no-repeat, repeat-x;
			z-index: -1			
	}
	#footer{
		background-repeat: repeat-x; height: 64px;		
		background-image:url(<?php echo $WEB_BASE.'imagenes/cenefa_inf.png' ?> );
		width:100%;
		background-color:#ff9737;
		position:absolute; bottom: 0;
	}
	
	#botones_idioma{ margin-top:10px;}
	#contenido .botones_idioma a{
		text-decoration:none;
	}
	#contenido .botones_idioma .boton_idioma{
		width:154px; text-align:center; display: inline-block;
	}
</style>
	

	<script type="text/javascript">
		$(function(){
			var h_screen = $(document).height();
			// var h_header = $('#header').height();
			var h_footer = $('#footer').height();
			var h_cenefa = $('#cenefa_header').height();
			
			// var h_restante= h_screen - (h_header + h_footer + h_cenefa);
			var h_restante= h_screen - (h_footer + h_cenefa);
			$("#contenido").height(h_restante);
			
			// console.log("h_screen: " + h_screen  + "h_header: " + h_header + "h_footer: " + h_footer + "h_cenefa" + h_cenefa);
			// console.log("h_restante: " + h_restante);
			
		});
	</script>

</head>

<body>
	<div id="portal" >
		<div id="fondo"></div>
		<div id="header">
			
		</div>	
		<div id="cenefa_header"></div>
		
		<div id="contenido" class="envolcentro">
			<a  style="right:58px; position: absolute;" href="#"><img  src="<?php echo $WEB_BASE.'imagenes/hecho_en_sinaloa.png' ?> " width="133" height="246"/></a>
			<div class="centro" style="display:inline-block; position:relative; left:50%; margin-left: -156px; ">
				<img  src="<?php echo $WEB_BASE.'imagenes/logo_intro.png' ?> " width="312" height="108"/>
				<div class="botones_idioma">
					<div class="boton_idioma" style="">
						<a href="<?php echo $APP_PATH; ?>es/paginas/inicio"><img  src="<?php echo $WEB_BASE.'imagenes/btn_esp_intro.png' ?> " width="92" height="93"/> </a>
					</div>
					<div class="boton_idioma" style="">
						<a href="<?php echo $APP_PATH; ?>en/paginas/inicio"><img  src="<?php echo $WEB_BASE.'imagenes/btn_ing_intro.png' ?> " width="91" height="89"/> </a>
					</div>
				</div>
			</div>
		</div>
		<div id="footer">
			
		</div>
	</div>
</body>
<body>
<html>