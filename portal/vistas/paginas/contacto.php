<script src="<?php echo $APP_PATH; ?>web/libs/blockui.js" ></script>
<?php 
if ( empty($_GET['idioma_request']) ){	
	$idioma =substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2); 			
}else{
	$_idioma =  $_GET['idioma_request'];
}


if ($_idioma!='es' && $_idioma!='en') $_idioma='es';

$sufijo = ($_idioma!= 'es')? '_'.$_idioma : ''; 

$pagina['mensaje_espere'] = 'Espere';
$pagina['mensaje_espere_en'] = 'Wait';

$pagina['email_invalido'] = 'escriba un email valido';
$pagina['email_invalido_en'] = 'email is invalid';

$pagina['email_requerido'] = 'escriba su email';
$pagina['email_requerido_en'] = 'email is required';

$pagina['mensaje_requerido'] = 'escriba su mensaje';
$pagina['mensaje_requerido_en'] = 'write  a message';

$pagina['nombre_label'] = 'tu nombre';
$pagina['nombre_label_en'] = 'your name';

$pagina['email_label'] = 'email';
$pagina['email_label_en'] = 'email'; 

$pagina['mensaje_label'] = 'mensaje';
$pagina['mensaje_label_en'] = 'message'; 

$pagina['sucursales_texto'] = 'Algun texto';
$pagina['sucursales_texto_en'] = 'Some text'; 

$pagina['enviar'] = 'enviar';
$pagina['enviar_en'] = 'send'; 

$pagina['enviar_copia'] = 'enviar copia';
$pagina['enviar_copia_en'] = 'send a copy'; 

$pagina['asunto_label'] = 'titulo';
$pagina['asunto_label_en'] = 'subject'; 

$pagina['conoce'] = 'Conoce nuestras sucursales';
$pagina['conoce_en'] = 'Meet our stores'; 

	$nombrePagina=array(
		'es'=>'CONTACTO',
		'en'=>'CONTACT',
	);
?>
<script>
	if(typeof pading == "undefined"){
        pagina={};
    }
	// if ( undefined == Pagina ) 
	pagina.mensaje_espera ='<?php echo $pagina['mensaje_espere'.$sufijo]; ?>';
	pagina.email_invalido = 'email is not valid';
	pagina.email_requerido = 'email is requiired';
	pagina.mensaje_requerido = 'message is requiired';
	
</script>



<style>
	#contenido_derecha{width:980px; position:relative;}
	#titulo{
	
	}
	
	.tit_wrap{
		padding: 30px;
text-align: center;
color: white;
border-radius: 10px;
margin-bottom: 34px;
		position:relative;
		background-color:#d6d6d6;
		font-size:38.7px;
		font-family:"Mark Sans";
	}
	
	.tit_wrap:after{		
		content: '';
		position: absolute;
		left: 50%;
		
		width: 0px;
		height: 0px;
		border-style: solid;
		border-width: 9.5px 9.5px 0 9.5px;
		border-color: #d6d6d6 transparent transparent transparent;
		top: 100%;
	}
	#contenido {
		background-color: #f6f6f6;
		background-image: url('<?php echo $WEB_BASE; ?>imagenes/mona_infantil.png' ),url('<?php echo $WEB_BASE; ?>imagenes/esq_inf_der_portal.png' );
	}

		
		
	form{padding:50px 27px 26px 27px; background-color: #dedede; border-radius: 13px; display:inline-block;  position:relative;
	box-shadow: 0px 3px 0px 0px rgba(119, 119, 119, 0.75);
	-moz-box-shadow:  0px 3px 0px 0px rgba(119, 119, 119, 0.75);
	-webkit-box-shadow: 0px 3px 0px 0px rgba(119, 119, 119, 0.75);}
	form input{height:53px;}
	form textarea{height:153px; padding-top:20px;}
	form input, form textarea{
		display:block; width: 337px; font-family:'Mark Sans'; font-size:18.6px; 
		-webkit-border-radius: 5px;padding-left:20px;-moz-border-radius: 5px;
		border-radius: 5px;border:none;margin-bottom:26px;	
	 }
	.checkbox{
		width:22px; height:24px; background-image:url("<?php echo $WEB_BASE; ?>imagenes/checked.png");
		cursor:pointer;background-repeat:no-repeat;background-position:bottom left;display:inline-block;
	}
	label.copia{font-family:'Mark Sans'; font-size:14.19px; color:#808080;bottom: 5px;position: relative;}
	.checkbox.vacia{
		 background-image:url("<?php echo $WEB_BASE; ?>imagenes/checkbox_empty.png");		 
	}

	#btnEnviar.presionado{
		box-shadow: 0px 0;
		margin-top:3px;
		-moz-box-shadow:  0px 0;
		-webkit-box-shadow: 0px 0;
	}
	#btnEnviar:hover{cursor:pointer; background-color: #ffa700;		
	}
	
	#btnEnviar label:hover{cursor:pointer;}
	#btnEnviar{
		position:absolute;
		display: inline-block;
		 right:0;
		 margin-right:25px;
		padding: 10px 20px;
		background-color: #f19f03;
		border-radius: 6px;
		color: white;
		font-weight: bold;
		font-family: Tahoma;
		
		box-shadow: 0px 3px 0px 0px rgba(203, 145, 34, 0.75);
		-moz-box-shadow:  0px 3px 0px 0px rgba(203, 145, 34, 0.75);
		-webkit-box-shadow: 0px 3px 0px 0px rgba(203, 145, 34, 0.75);
	}
	.caja_datos {position: relative; }
	.caja_datos .error{
		font-family: arial;
		display:none;
		position: absolute;
		right: -154px;
		top: 0;
		width:100px;
		margin-top: 0;		
		color: white;
		padding: 20px;		
		z-index:0;
	}
	.caja_datos .error:before{
		content: '';
		position: absolute;
		width: 100%;
		height: 100%;
		background: #7b7b7b;
		left: -100%;
		z-index: -1;
		opacity: .9;
		margin-left: 135px;
		top: 1px;
		border-radius: 12px;
	}
	
	.caja_datos .error:after{
		opacity: .9;
		content: '';
		position: absolute;
		left: -100%;
		margin-left: 126px;
		width: 0px;
		height: 0px;
		border-style: solid;
		border-width: 9.5px 9px 9.5px 0;
		border-color: transparent #7b7b7b transparent transparent;
		top: 19px;
	}
	
	.hoja_conoce{
		vertical-align:top;
		
		background-image: url('<?php echo $WEB_BASE; ?>imagenes/hoja_conoce.png' );		
		background-repeat: no-repeat;
		width: 349px;
		height: 129px;
		padding-top: 44px;
		display: inline-block;
		text-align: center;
	}
	
	.hoja_conoce h2{
		color:#8cb91e;
		font-size:20.9px;
		margin-bottom:20px;
		font-family:'Mark Sans';
	}
	.hoja_conoce span{
		color:#666666;
		font-size:13.07px;	
		font-family:'Tahoma';
	}
	
	.datos_sucursal{
		background-color: #e7e7e5;
		padding: 20px;
		display: inline-block;
		border-radius: 7px;
		margin-bottom:22px;
		text-align:left;
		margin-right:73px;
		margin-right: 31px;
		width:252px;
	}
	
	.datos_sucursal h2{
		color: #74a107;font-size: 17.4px;font-family: 'Mark Sans';
		border-bottom: 2px #cfcfce dashed;padding-bottom: 12px;margin-bottom: 12px;
	}
		
	.datos_sucursal span{
		color: #383838;
		font-size: 15.2px;
		font-family: 'Mark Sans';
		display:block;
		margin-bottom: 12px;
	}
	
	
	.datos_contacto{margin-bottom:17px;}
	.datos_contacto .tel{background-image: url("<?php echo $WEB_BASE; ?>imagenes/tel_ico.png"); background-repeat: no-repeat; padding-left: 16px;background-position: 0 2px; }
	.datos_contacto .email{background-image: url("<?php echo $WEB_BASE; ?>imagenes/mail_ico.png");  background-repeat: no-repeat;  padding-left: 16px; background-position: 0 2px;}
	
	.redes li{display:inline-block; }
</style>
<script>
	function IsEmail(email) {
        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!regex.test(email)) {
           return false;
        }else{
           return true;
        }
      }
	$(function(){
		$('.caja_email input').bind('focus', function(){
			$('.caja_email .error').hide();
		});
		
		$('.caja_email input').bind('keyup', function(){
			$('.caja_email .error').hide();
		});
		
		$('.caja_mensaje textarea').bind('focus', function(){
			$('.caja_mensaje .error').hide();
		});
		
		$('.caja_mensaje textarea').bind('keyup', function(){
			$('.caja_mensaje .error').hide();
		});
		
		$('#btnEnviar').bind('mousedown', function(){
			$(this).addClass('presionado');
			
			var datos={
				nombre: $("input[name='nombre']").val(),
				email: $("input[name='email']").val(),
				asunto: $("input[name='asunto']").val(),
				copia: ( $("input[name='copia']").attr('checked') == undefined)? false : true ,
				mensaje: $("textarea[name='mensaje']").val()
			};
			
			if (datos.copia == true){
				if ( ! IsEmail(datos.email) ){
					// $('#invalid_email').show();
					// alert( pagina.email_requerido );
					var focalizar = $(".caja_email").position().top;
					$('html,body').animate({scrollTop: focalizar}, 1000);

					$('.caja_email .error').html( pagina.email_invalido );
					 $('.caja_email .error').show();
					return false;
				}
			}
			
			if ( datos.mensaje == "" ){
				// $('#invalid_email').show();
				// alert( pagina.email_requerido );
				var focalizar = $(".caja_mensaje").position().top;
				$('html,body').animate({scrollTop: focalizar}, 1000);
					
				$('.caja_mensaje .error').html( pagina.mensaje_requerido );
				 $('.caja_mensaje .error').show();
				return false;
			}
			 $('#form_contacto').block({ 
				message:'<?php echo $pagina['mensaje_espere'.$sufijo]; ?>',
				 css: { 
				border: 'none', 
				padding: '15px', 
				backgroundColor: '#000', 
				'-webkit-border-radius': '10px', 
				'-moz-border-radius': '10px', 
				opacity: .5, 
				color: '#fff' 
			} });
			 
			$.ajax({
			  type: "POST",
			  url: "<?php echo $APP_PATH.$_idioma; ?>/paginas/contacto",
			  data: datos
			}).done(function( respuesta ) {
				 $('#form_contacto').unblock({ });
				
			  var resp = eval('('+respuesta+')'); 
			  
			  if (resp.success){
				 window.location = '<?php echo $APP_PATH.$_idioma; ?>/paginas/mensaje_enviado'
			  }else{
				if (resp.msg){
					alert(resp.msg);
				}else{
					
					alert("Error al enviar el email");
				}
			  }
			});
		});
		
		$('#btnEnviar').bind('mouseup', function(){
			$(this).removeClass('presionado');
		});
		$(".checkbox").bind('click',function(){
			 var ele = $('input[name="copia"]');			 
			if(ele.is(':checked')){
				ele.removeAttr('checked');
				$('.checkbox').addClass('vacia');
			}else{
				ele.attr('checked', 'checked');
				$('.checkbox').removeClass('vacia');
			}			
		});
	});
</script>

<div style="display:inline-block;">
	<div class="tit_wrap">
		<h2 id="titulo" style="">
		<?php echo $nombrePagina[$_idioma]; ?>
		</h2>
	</div>
	<form id="form_contacto">
		<input type="text" placeholder="<?php echo $pagina['nombre_label'.$sufijo]; ?>" name="nombre" />
		<div style="" class="caja_datos  caja_email">
			<input type="text" placeholder="<?php echo $pagina['email_label'.$sufijo]; ?>" name="email" class="email" />
			<div class="error" >Error</div>
		</div>
		<input name="copia" type="checkbox"  checked style="display:none;" />
		<input type="text" placeholder="<?php echo $pagina['asunto_label'.$sufijo]; ?>" name="asunto" />
		
		<div class="caja_datos caja_mensaje">
			<textarea name="mensaje" placeholder="<?php echo $pagina['mensaje_label'.$sufijo]; ?>" ></textarea>
			<div class="error" style="">Error</div>
		</div>
		<div class="checkbox">
		</div>
		<label class="copia"><?php echo $pagina['enviar_copia'.$sufijo]; ?></label>
		
		<div id="btnEnviar"><label><?php echo $pagina['enviar'.$sufijo]; ?></label></div>
	</form>
</div>
<div style="text-align:right; text-align: right; width: 560px; display: inline-block; vertical-align: top;" >
	<div style="display:inline-block; vertical-align:top; float: right;">
		<div class="hoja_conoce">
			<h2><?php echo $pagina['conoce'.$sufijo]; ?></h2>
			<span><?php echo $pagina['sucursales_texto'.$sufijo]; ?></span>
		</div>
	</div>

	<div class="datos_sucursal">
		<h2>Sucursal 1</h2>
		<span>Dirección Dirección Dirección <br />
		Dirección Dirección <br />
		Dirección Dirección <br />
		</span>
		<ul class="datos_contacto">
			<li class="tel">1800-00-000</li>
			<li class="email">correo@falso.com</li>
		</ul>
		
		<ul class="redes">
			<li><a href="#" > <img src="<?php echo $WEB_BASE.'imagenes/fb_ico.png'; ?>"  alt="FB" /></a></li>
			<li><a href="#" > <img src="<?php echo $WEB_BASE.'imagenes/tw_ico.png'; ?>"  alt="FB" /></a></li>
			<li><a href="#" > <img src="<?php echo $WEB_BASE.'imagenes/yt_ico.png'; ?>"  alt="FB" /></a></li>
			<li><a href="#" > <img src="<?php echo $WEB_BASE.'imagenes/in_ico.png'; ?>"  alt="FB" /></a></li>			
		</ul>
		
	</div><br />
	
	<div class="datos_sucursal">
		<h2>Sucursal 2</h2>
		<span>Dirección Dirección Dirección <br />
		Dirección Dirección <br />
		Dirección Dirección <br />
		</span>
		<ul class="datos_contacto">
			<li class="tel">1800-00-000</li>
			<li class="email">correo@falso.com</li>
		</ul>
		
		<ul class="redes">
			<li><a href="#" > <img src="<?php echo $WEB_BASE.'imagenes/fb_ico.png'; ?>"  alt="FB" /></a></li>
			<li><a href="#" > <img src="<?php echo $WEB_BASE.'imagenes/tw_ico.png'; ?>"  alt="FB" /></a></li>
			<li><a href="#" > <img src="<?php echo $WEB_BASE.'imagenes/yt_ico.png'; ?>"  alt="FB" /></a></li>
			<li><a href="#" > <img src="<?php echo $WEB_BASE.'imagenes/in_ico.png'; ?>"  alt="FB" /></a></li>			
		</ul>
		
	</div><br />


	<div class="datos_sucursal">
		<h2>Sucursal 3</h2>
		<span>Dirección Dirección Dirección <br />
		Dirección Dirección <br />
		Dirección Dirección <br />
		</span>
		<ul class="datos_contacto">
			<li class="tel">1800-00-000</li>
			<li class="email">correo@falso.com</li>
		</ul>
		
		<ul class="redes">
			<li><a href="#" > <img src="<?php echo $WEB_BASE.'imagenes/fb_ico.png'; ?>"  alt="FB" /></a></li>
			<li><a href="#" > <img src="<?php echo $WEB_BASE.'imagenes/tw_ico.png'; ?>"  alt="FB" /></a></li>
			<li><a href="#" > <img src="<?php echo $WEB_BASE.'imagenes/yt_ico.png'; ?>"  alt="FB" /></a></li>
			<li><a href="#" > <img src="<?php echo $WEB_BASE.'imagenes/in_ico.png'; ?>"  alt="FB" /></a></li>			
		</ul>
		
	</div>
</div>