<?php
require_once $APPS_PATH.$_PETICION->modulo.'/modelos/categoria_producto_modelo.php';

class Paginas extends Controlador{
	function mostrarVista($vistaFile=''){
		$vista= $this->getVista();
		$vista->menus = $this->getMenus();
		$vista->categorias = $this->getCategorias();
		return $vista->mostrar( '/tema', true);
	}
	
	private function getCategorias(){
		
		$mod	=new categoria_productoModelo( );
		$cats	=$mod->buscar( array() );
		return $cats['datos'];
		
	}
	
	function getMenus(){
		$menus=array();
		$menus[]=array(
			'titulo'	=>'Inicio',
			'titulo_en'	=>'Home',
			'target'	=>'paginas/inicio'
		);
		$menus[]=array(
			'titulo'	=>'Galeria',
			'titulo_en'	=>'Gallery',
			'target'	=>'paginas/galeria'
		);
		$menus[]=array(
			'titulo'	=>'Mi Mazatlán',
			'titulo_en'	=>'My Mazatlan',
			'target'	=>'paginas/my_mazatlan'
		);
		$menus[]=array(
			'titulo'	=>'Nosotros',
			'titulo_en'	=>'About Us',
			'target'	=>'paginas/historia'
		);
		$menus[]=array(
			'titulo'	=>'Contacto',
			'titulo_en'	=>'Contact',
			'target'	=>'paginas/contacto'
		);
		
		
		return $menus;
	}
	
	function intro(){	
		$vista= $this->getVista();
		return $vista->mostrar( );
	}
	
	function intro2(){	
		$vista= $this->getVista();
		return $vista->mostrar( );
	}
	
	function intro3(){	
		$vista= $this->getVista();
		return $vista->mostrar( );
	}
	
	function construccion(){	
		$vista= $this->getVista();
		return $vista->mostrar( );
	}
	
	function buscar(){
		return $this->mostrarVista();
	}
	
	function mensaje_enviado(){
		$vista= $this->getVista();		
		
		$vista->menus = $this->getMenus();
		return $vista->mostrar( '/contacto', true);
	}
	
	function contacto(){
	
	
		$tipo = $_SERVER['REQUEST_METHOD'];
		if ( $tipo =='GET'){
			$vista= $this->getVista();
			$vista->menus = $this->getMenus();
			$vista->categorias = $this->getCategorias();
			return $vista->mostrar( '/contacto', true);
		}else if( $tipo == 'POST' ){
			// print_r($_REQUEST); exit;|
			$nombre = $_REQUEST['nombre'];
			// $email = $_REQUEST['email'];
			$mensaje = $_REQUEST['mensaje'];
			$copia = $_REQUEST['copia'];
			
			
			$remitente = $_POST['email'] ;
			$destino = "runtim3.error@gmail.com, contacto@mymazatlansouvenirs.com" ;
			
			
			
			$asunto = $_POST['asunto'];
			$mensaje ='Enviador por: '.$nombre.'<br />'. $mensaje ;
			
			$encabezados = "From: $remitente\nReply-To: $destino\nContent-Type: text/html; charset=iso-8859-1" ;
			$exito = @mail($destino, $asunto, $mensaje, $encabezados);
			
			
			if ($copia=='true') {
				$destino=$remitente;
				$exito = @mail($destino, $asunto, $mensaje, $encabezados);
			}
			if ($exito){			
				$res=array(
					'success'=>true					
				);
				// global $APP_PATH;
				// header('Location: '.$APP_PATH.'paginas/email_exito#contenido');
			}else{
				$error = error_get_last();
				// print_r( $error );
				$res=array(
					'success'=>false,
					'msg'=>'No pudo mandarse el mensaje'
				);
				// $vista->datos=$_POST;
				// $vista->error=true;
				// return $vista->mostrar( );
			}
			
			echo json_encode($res);
		}
		
	}
	function galeria(){
		$vista=$this->getVista();
		
		$mod=new categoria_productoModelo( );
		$cats=$mod->buscar( array() );
		$vista->categorias=$cats['datos'];
		
		$this->mostrarVista();
	}
}
?>