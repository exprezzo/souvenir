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
	$nombrePagina=array(
		'es'=>'Contacto...',
		'en'=>'Contact...',
	);
?>
<script>
	if(typeof pading == "undefined"){
        pagina={};
    }
	// if ( undefined == Pagina ) 
	
	pagina.email_invalido = 'email is not valid';
	pagina.email_requerido = 'email is requiired';
	pagina.mensaje_requerido = 'message is requiired';
	
</script>
<h2 id="titulo" style="color:#9eb612;font-size:17.21px; font-weight:bold; font-family:'Tahoma';margin-bottom:22px;">
<?php echo $nombrePagina[$_idioma]; ?>
</h2> 

<style>

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
		opacity: .5;
		margin-left: 135px;
		top: 1px;
		border-radius: 12px;
	}
	
	.caja_datos .error:after{
		opacity: .5;
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
					$('.caja_email .error').html( pagina.email_invalido );
					 $('.caja_email .error').show();
					return false;
				}
			}
			
			if ( datos.mensaje == "" ){
				// $('#invalid_email').show();
				// alert( pagina.email_requerido );
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
<form id="form_contacto">
	<input type="text" placeholder="tu nombre" name="nombre" />
	<div style="" class="caja_datos  caja_email">
		<input type="text" placeholder="email" name="email" class="email" />
		<div class="error" >Error</div>
	</div>
	<input name="copia" type="checkbox"  checked style="display:none;" />
	<input type="text" placeholder="titulo del mensaje" name="asunto" />
	
	<div class="caja_datos caja_mensaje">
		<textarea name="mensaje" placeholder="mensaje" ></textarea>
		<div class="error" style="">Error</div>
	</div>
	<div class="checkbox">
	</div>
	<label class="copia"> Enviar Copia</label>
	
	<div id="btnEnviar"><label>enviar</label></div>
</form>

