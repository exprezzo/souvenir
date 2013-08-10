<?php 
if ( empty($_GET['idioma_request']) ){	
	$idioma =substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2); 			
}else{
	$_idioma =  $_GET['idioma_request'];
}


if ($_idioma!='es' && $_idioma!='en') $_idioma='es';

	$nombrePagina=array(
		'es'=>'Contacto...',
		'en'=>'Contact...',
	);
?>
<h2 id="titulo" style="color:#9eb612;font-size:17.21px; font-weight:bold; font-family:'Tahoma';margin-bottom:22px;">
<?php echo $nombrePagina[$_idioma]; ?>
</h2> 

<style>

#contenido {
	background-color: #f6f6f6;
	background-image: url('<?php echo $WEB_BASE; ?>imagenes/mona_infantil.png' ),url('<?php echo $WEB_BASE; ?>imagenes/esq_inf_der_portal.png' );
}

form{padding:50px 27px 26px 27px; background-color: #dedede; border-radius: 13px; display:inline-block;

box-shadow: 0px 3px 0px 0px rgba(119, 119, 119, 0.75);
-moz-box-shadow:  0px 3px 0px 0px rgba(119, 119, 119, 0.75);

-webkit-box-shadow: 0px 3px 0px 0px rgba(119, 119, 119, 0.75);
}

form input{height:53px;}
form textarea{height:153px; padding-top:20px;}
form input, form textarea{display:block; width: 337px; font-family:'Mark Sans'; font-size:18.6px; 
-webkit-border-radius: 5px;
padding-left:20px;
-moz-border-radius: 5px;
border-radius: 5px;
border:none;
margin-bottom:26px;
/*
box-shadow: 0px 0px 10px 4px rgba(119, 119, 119, 0.75);
-moz-box-shadow: 0px 0px 10px 4px rgba(119, 119, 119, 0.75);
-webkit-box-shadow: 0px 0px 10px 4px rgba(119, 119, 119, 0.75); */
 }
.checkbox{
	width:22px; height:24px; background-image:url("<?php echo $WEB_BASE; ?>imagenes/checked.png");
	cursor:pointer;
	background-repeat:no-repeat;
	background-position:bottom left;
	display:inline-block;
}
label.copia{font-family:'Mark Sans'; font-size:14.19px; color:#808080;bottom: 5px;position: relative;}
.checkbox.vacia{
	 background-image:url("<?php echo $WEB_BASE; ?>imagenes/checkbox_empty.png");
	 
}
</style>
<script>
	$(function(){
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
<form>
	<input type="text" placeholder="tu nombre" />
	<input type="text" placeholder="email o telefono" />
	<input name="copia" type="checkbox"  checked style="display:none;" />
	<textarea placeholder="mensaje" ></textarea>
	
	
	<div class="checkbox">
	</div>
	<label class="copia"> Enviar Copia</label>
</form>

