<?php 
if ( empty($_GET['idioma_request']) ){	
	$idioma =substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2); 			
}else{
	$_idioma =  $_GET['idioma_request'];
}

$pagina['footer']='Texto footer Texto footer  Texto footer  Texto footer ';
$pagina['footer_en']='Footer text Footer text  Footer text Footer text Footer text Footer text ';

if ($_idioma!='es' && $_idioma!='en') $_idioma='es';

$sufijo = ($_idioma=='es')? '' : '_'.$_idioma;
?>

<!doctype html>

<html lang="<?php echo $_idioma; ?>">
<head>
	

	<link rel="stylesheet" type="text/css" href="<?php echo $WEB_BASE; ?>css/reset.css" />
	<script src="<?php echo $APP_PATH; ?>web/libs/jquery-1.8.3.js" ></script>
	
	
	
	
	<style>	
		@font-face {
			font-family: "Mark Sans";
			src:  url("<?php echo $WEB_BASE; ?>fonts/mark/manksans-webfont.woff") format("woff"), url(<?php echo $WEB_BASE; ?>fonts/mark/manksans-webfont.ttf) format("truetype");
		}	
		#header{
			background-repeat: no-repeat,repeat-x;  height:232px; width:100%;
			background-image: url(<?php echo $WEB_BASE.'imagenes/esq_sup_izq_portal.png'; ?> ), url(<?php echo $WEB_BASE.'imagenes/bg_header_portal.png'; ?> );						
		}
	
		#logo{
			top:56px; position:relative; left:132px;text-decoration:none;
		}
		
		
		
		#contenido{
			background-color:#f6f6f6;
			background-image:url('<?php echo $WEB_BASE; ?>imagenes/mona_portal.png' ),url('<?php echo $WEB_BASE; ?>imagenes/esq_inf_der_portal.png' );
			background-repeat: no-repeat,no-repeat;		
			background-position: bottom left,  bottom right;
			min-height:766px; text-align:center;
		}
		
		body{
			background-color:#ff9737;
		}
		
		#footer{
			background-repeat: repeat-x; height: 64px; width:100%; background-color:#ff9737; text-align: center; 
			background-image:url('<?php echo $WEB_BASE; ?>imagenes/cenefa_inf.png' );			
			padding-top:16px; font-size:8.8px; color:white; font-family:"Tahoma";
			
		}
		#logito{ top: 19px; position:relative; }
		
		#menu_categorias li a{
			background-image:url('<?php echo $WEB_BASE; ?>imagenes/bg_menu_categoria.png' );			
			display:inline-block;line-height: 40px;font-size: 14.5px;font-family: "Mark Sans";
			color: #2e2e2e;padding-left: 55px;text-decoration: none;margin-bottom:-5px;width:184px; height:47px; 
			font-weight:bold;
		}
		#menu a:hover{ color: #ff9737; }
		
		#menu_categorias{ display: inline-block; vertical-align:top; }
		#menu_categorias li a:hover{
			background-image:url('<?php echo $WEB_BASE; ?>imagenes/bg_menu_categoria_hover.png' );
			color:white;
		}
		
		
		#pagina{ width:995px; text-align: left; display:inline-block; margin-top: 23px; }
		
		#contenido_derecha{display:inline-block; vertical-align:top; width:720px; margin-left:32px;}
		
		#menu { display:inline-block; margin-left: 153px; top: 18px; position: relative; }
		#menu li{ display:inline-block;   text-align:center; position:relative; border-left: white 1px solid; padding: 0 10px 0 10px; height: 9px;}
		#menu li:last-child{  border-right: white 1px solid; }
		#menu a{ color:white; text-decoration:none; font-family: "Tahoma"; font-weight:bold; font-size:10.4px; z-index:1; position:relative; top: -5px;} 		
		#menu a.activo{ border-bottom: white 2px solid; padding-bottom: 3px; }
		
/*		
		#menu li:after{
			content: ''; top:4px; border-left: white 1px solid;			
			width: 100%; left: -100%; margin-left: 91px; position: absolute; height: 12px;		
		} */
		#menu li:last-child:after{
			border-right: white 1px solid;
		}
		
		#botones_idioma{display: inline-block; position:relative; top:25px; margin-left:26px;}
		#botones_idioma a{width:97px; height:21px; display:inline-block;}
		
		#btn_esp{ background-image:url('<?php echo $WEB_BASE; ?>imagenes/btn_esp_portal.png' ); }
		#btn_esp:hover{background-image:url('<?php echo $WEB_BASE; ?>imagenes/btn_esp_hover_portal.png' );}
		
		
		
		#btn_ing{ background-image:url('<?php echo $WEB_BASE; ?>imagenes/btn_ing_portal.png' ); }
		#btn_ing:hover{background-image:url('<?php echo $WEB_BASE; ?>imagenes/btn_ing_hover_portal.png' );}
		
		@media all and (max-width: 1025px) {
			  #botones_idioma {
				display: inline-block;
				position: absolute;
				top: 3px;
				right: 15px;				
			}
			
			#menu {
				margin-left:193px; 
			}
			
		}
		
		@media all and (max-width: 1280px) and (min-width: 1026px) {
			#botones_idioma {
				position: absolute;
				top: 79px;
				right: 33px;
			
			}
			
			#menu {
				position: absolute;
				left: 438px;
				margin-left: 0;
				top: 79px;
			}
			
			#menu a{
				font-size:13px;
			}
		}
		
	
		
		
		
		
		
		
		@media all and (min-width: 1281px) {
			
			
			#menu {
				left: 476px;
				position: absolute;
			
				margin-left: 0;
				top: 81px;
			}
			

			#menu a{
				font-size:13px;
			}
			
			#botones_idioma {
				position: absolute;
				top: 79px;
				right: 33px;
			
			}
		}
		
		.wrap_social{
			display: inline-block;
			position: absolute;
			top: 135px;
			left: 402px;
			background-image: url(<?php echo $WEB_BASE; ?>imagenes/bg_social.png);
			width: 243px;
			height: 42px;
			padding: 6px 0 0 0px;
			text-align: center;
			background-repeat: no-repeat;
			
		}
		
	</style>
	<script>
		$(function(){
			var sw= $(document).width();
			if (sw > 1300){
				var mw = sw - 351 - 198 - 33;
			
				$("#menu").css('position','absolute');
				$("#menu").css('left','0');
				$("#menu").css('margin-left','353px');
				$("#menu").css('top','81px');
				$("#menu").width(mw);
				$("#menu").css('text-align','center');
			}		
		});
	</script>	
	<?php 	
		//Carga archivos css (Por hacer)
		/*if ( !isset($this->estilos) ) $this->estilos = array();
		foreach($this->estilos as css){
			echo '<script src="'.$APP_PATH.'web/'.$css.'" ></script>';
		}*/
		
		
		//Carga archivos js (Por hacer)		
		/*if ( !isset($this->scripts) ) $this->scripts = array();
		foreach($this->scripts as js){
			echo '<script src="'.$APP_PATH.'web/'.$js.'" ></script>';
		}*/
		
	?>
	
	<link rel="stylesheet" type="text/css" href="<?php echo $WEB_BASE; ?>css/estilos.css" />
	
	<script type="text/javascript">var switchTo5x=true;</script>
	<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
	<script type="text/javascript">stLight.options({publisher: "ur-56975a85-9c7a-18de-9afd-481c96c13a3b", doNotHash: false, doNotCopy: false, hashAddressBar: true,servicePopup:true});</script>

	</head>
<body>
	

<div id="header">
	<a href="<?php echo $APP_PATH.$_idioma.'/inicio'; ?>" id="logo"><img src="<?php echo $WEB_BASE.'imagenes/logo_portal.png'; ?>" alt="My Mazatlan Souvenir" width="226" height="75" > </a>
	<ul id="menu">
		<?php 
		$ubicacion = $_PETICION->controlador.'/'.$_PETICION->accion;		
		foreach($this->menus as $menu){
			$clase = ($menu['target'] == $ubicacion)? 'activo' : '';
			echo '<li><a mtarget="'.$menu['target'].'" class="'.$clase.'" href="'.$APP_PATH.$_idioma.'/'.$menu['target'].'">'.$menu['titulo'.$sufijo].'</a></li>';			
		}
		?>		
	</ul>
	<div id="botones_idioma">
		<a href="<?php echo  $APP_PATH.'es/'.$_PETICION->controlador.'/'.$_PETICION->accion; ?>" id="btn_esp"></a>
		<a href="<?php echo  $APP_PATH.'en/'.$_PETICION->controlador.'/'.$_PETICION->accion; ?>" id="btn_ing"></a>
	</div>
	<div class="wrap_social">
		<span st_url='http://mymazatlansouvenirs.com<?php echo $APP_PATH.$_idioma.'/inicio'; ?>' class='st_facebook_hcount' displayText='Facebook'></span>
		<span st_url='http://mymazatlansouvenirs.com<?php echo $APP_PATH.$_idioma.'/inicio'; ?>' class='st_twitter_hcount' displayText='Tweet'></span>		
		<span st_url='http://mymazatlansouvenirs.com<?php echo $APP_PATH.$_idioma.'/inicio'; ?>' class='st_googleplus_hcount' displayText=''></span>				
	</div>
</div>