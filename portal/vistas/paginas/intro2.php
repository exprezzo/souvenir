<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo $WEB_BASE; ?>css/reset.css" />
	
<style>
	
	
	#header{
		background-image:url(<?php echo $WEB_BASE.'imagenes/esq_sup_izq.png' ?> );
		
		background-image: url(<?php echo $WEB_BASE.'imagenes/esq_sup_izq.png'; ?> ), url(<?php echo $WEB_BASE.'imagenes/fondo_header.png'; ?> );
		background-repeat: no-repeat,repeat-x; height: 207px;		
		margin-bottom: -3px;
	}
	
	#cenefa_header{
		background-repeat: repeat-x; 
		background-image:url(<?php echo $WEB_BASE.'imagenes/patron_header.png' ?> );		
		width:100%;
		height:28px; margin-bottom: -2px;
	}
	
	
	#contenido{				
		width:100%;
		background-repeat:no-repeat;			
		background-size:25%;
		position:relative;
		height: 1000px;
		background-image: url(<?php echo $WEB_BASE.'imagenes/esq_inf_izq.png' ?> );
		background-position: bottom left;
		
	}
	
	.centro{
		display: inline-block;
		position: relative;
		left: 50%;
		margin-left: -156px;
		width: 312px;		
		margin-top: 271px;
		
	}
	body {
			background-image:  url(<?php echo $WEB_BASE.'imagenes/background.jpg' ?> );
			height: 100%;
			
			width: 100%;
			
			background-size: 100%;
			
	}
	#footer{
		background-repeat: repeat-x; height: 64px;		
		background-image:url(<?php echo $WEB_BASE.'imagenes/cenefa_inf.png' ?> );
		width:100%;
		background-color:#ff9737;
	
	}
	
	#botones_idioma{ margin-top:10px;}
	#contenido .botones_idioma a{
		text-decoration:none;
	}
	#contenido .botones_idioma .boton_idioma{
		width:154px; text-align:center; display: inline-block;
	}
</style>
	

	

</head>

<body>
	<div id="portal" >
		<div id="fondo"></div>
		<div id="header">
			
		</div>	
		<div id="cenefa_header"></div>
		
		<div id="contenido" class="envolcentro">
			<img  src="<?php echo $WEB_BASE.'imagenes/hecho_en_sinaloa.png' ?> " width="133" height="246" style="right:58px; position: absolute;"/>
			
			<div class="centro" style="display:inline-block; position:relative; left:50%; margin-left: -156px; ">
				<img  src="<?php echo $WEB_BASE.'imagenes/logo_intro.png' ?> " width="312" height="108"/>
				<div class="botones_idioma">
					<div class="boton_idioma" style="">
						<a href="<?php echo $APP_PATH; ?>es/inicio"><img  src="<?php echo $WEB_BASE.'imagenes/btn_esp_intro.png' ?> " width="92" height="93"/> </a>
					</div>
					<div class="boton_idioma" style="">
						<a href="<?php echo $APP_PATH; ?>en/inicio"><img  src="<?php echo $WEB_BASE.'imagenes/btn_ing_intro.png' ?> " width="91" height="89"/> </a>
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