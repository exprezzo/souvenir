<?php
require_once $APPS_PATH.$_PETICION->modulo.'/modelos/producto_modelo.php';
require_once $APPS_PATH.$_PETICION->modulo.'/modelos/imagen_producto_modelo.php';
require_once $APPS_PATH.$_PETICION->modulo.'/modelos/categoria_producto_modelo.php';

class productos extends Controlador{
	var $modelo="producto";
	var $campos=array('id','codigo','nombre','descripcion','precio','imagen','nombre_en','descripcion_en','orden','fk_categoria','precio_en','galeria');
	var $pk="id";
	var $nombre="productos";
	
	function galeria(){
		$vista = $this->getVista();
		
		
		$vista->pagina = array(
			'titulo' => 'Galeria',
			'titulo_en' => 'Gallery'
		);
		
		$this->mostrarVista();
	}
	
	function mostrarVista($vistaFile=''){
		$vista= $this->getVista();
		global $_PETICION;
		
		if ( $_PETICION->accion == 'edicion' || $_PETICION->accion=='busqueda' ){
			return $vista->mostrar( );
		}
		
		
		
		$pagina=array();
		/*
		$pagina['en']=array(
			'titulo'	=>'Food',
			'contenido'	=>'',
			'rutaPadre'=>'pages/gallery',
			'tituloPadre'=>'Gallery'
		);
	
		$pagina['es']=array(
			'titulo'	=>'Food',
			'contenido'	=>'',
			'rutaPadre'=>'paginas/galeria',
			'tituloPadre'=>'Galeria'
		);
		
		$vista->pagina = $pagina;
		*/
		
		$vista->menus = $this->getMenus();
		$vista->categorias = $this->getCategorias();
		return $vista->mostrar( '/tema', true);
		
		
	}
	function detalle(){
		global $_PETICION;
		
		$mod = $this->getModelo();
		$params['id'] = $_PETICION->params[0];		
		$producto = $mod->obtener($params);
		
		$imgMod = new imagen_productoModelo();		
		$params=array(
			'filtros'=>array(
				array('dataKey'=>'fk_producto', 'filterOperator'=>'equals','filterValue'=>$params['id'] )
			)
		);		
		$imagenes = $imgMod->buscar( $params );
		
		$vista = $this->getVista();
		$vista->producto = $producto;
		
		$vista->pagina = array(
			'titulo' => $vista->producto['nombre'],
			'titulo_en' => $vista->producto['nombre_en']
		);
		
		$descripcion = array(
			'descripcion' => $vista->producto['descripcion'],
			'descripcion_en' => $vista->producto['descripcion_en']
		);
		
		if ( empty($_GET['idioma_request']) ){	
			$idioma =substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2); 			
		}else{
			$_idioma =  $_GET['idioma_request'];
		}
		if ($_idioma!='es' && $_idioma!='en') $_idioma='es';
		$sufijo = ($_idioma=='es')? '' : '_'.$_idioma;
		$vista->pagina['description']=$descripcion['descripcion'.$_sufijo];		
		$vista->imagenes = $imagenes;
		$this->mostrarVista();
		
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
			'target'	=>'productos/galeria'
		);
		$menus[]=array(
			'titulo'	=>'Mi Mazatlán',
			'titulo_en'	=>'My Mazatlan',
			'target'	=>'publicaciones/my_mazatlan'
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
	
	function nuevo(){		
		$campos=$this->campos;
		$vista=$this->getVista();	

		$vista->imagenes=array();
		
		for($i=0; $i<sizeof($campos); $i++){
			$obj[$campos[$i]]='';
		}
		$vista->datos=$obj;		
		
		global $_PETICION;
		$vista->mostrar('/'.$_PETICION->controlador.'/edicion');
		
		
	}
	
	
	function guardar(){
		return parent::guardar();
	}
	function borrar(){
		return parent::borrar();
	}
	
	function ver(){
		global $_PETICION;
		$vista=$this->getVista();
		
		if (empty ($_PETICION->params) ){
			$id=0;
		}else{
			$id=$_PETICION->params[0];
		}
		// echo $id; exit;
		$mod=new categoria_productoModelo( );		
		$params=array(
			'filtros'=>array(
				array('dataKey'=>'id', 'filterOperator'=>'equals','filterValue'=>$id)
			)
		);
		
		$cat = $mod->buscar( $params );
		$vista->categoriaActual=$cat['datos'][0];
		
		$vista->pagina = array(
			'titulo' => $vista->categoriaActual['nombre'],
			'titulo_en' => $vista->categoriaActual['nombre_en']
		);
		
		$cats=$mod->buscar( array() );		
		$vista->categorias=$cats['datos'];
		
		
		$mod=$this->getModelo();		
		$params=array(
			'filtros'=>array(
				array('dataKey'=>'fk_categoria', 'filterOperator'=>'equals','filterValue'=>$id)
			)
		);		
		
		$start=0;
		$limit=9;
		
		$paginaActual =  empty($_GET['pagina'])?  1 : $_GET['pagina'];
		$start=empty($_GET['pagina'])?  0 : ($_GET['pagina'] - 1) * $limit;
		
		$params['start']=$start;
		$params['limit']=$limit; 
		
		
		$resProds = $mod->buscar( $params );


		$vista->productos=$resProds['datos'];
		$vista->totalProductos = $resProds['total'];
		
		$numPaginas= $vista->totalProductos / $limit;
		$vista->numPaginas = $numPaginas;
		$vista->paginaActual  = $paginaActual ;
		$this->mostrarVista();
		
	}
	
	function editar(){
		$vista=$this->getVIsta();
		
		
		
		$mod = new imagen_productoModelo();
		$vista->carpetas = $this->obtenerCarpetas('../web/imagenes'); //Ejecuto desde el directorio actual
		
		$fk_producto=$_REQUEST['id'];
		$params=array(
			'filtros'=>array(
				array('dataKey'=>'fk_producto', 'filterOperator'=>'equals','filterValue'=>$fk_producto)
			)
		);
		$imagenes = $mod->buscar($params);
		
		// print_r( $imagenes['datos']);
		$vista->imagenes=$imagenes['datos'];
		
		return parent::editar();
	}
	
	function obtenerImagenes(){		
		
		$ruta = str_replace('.','',$_POST['ruta']);		
		$imagenes = $this->buscarImagenes('../web/imagenes'. $ruta,$ruta );
		$res=array(
			'success'=>true,
			'imagenes'=>$imagenes
		);
		echo json_encode($res);
		
	}
	
	function buscarImagenes($dir,$base) {
		$imagenes=array();
		
			$contenido = scandir($dir);
			
			
			foreach($contenido as $ar){
				if(is_dir($dir.'/'.$ar) || $ar == '.'  || $ar == '..') { //si es un directorio..
					
				}else{
					// echo $ar; exit;
					$ext = substr($ar,-4, 4);
					
					if ( $ext == '.jpg' || $ext == 'jpeg' || $ext == '.gif' || $ext == '.png'  ){
						$imagenes[] = array('nombre'=>utf8_decode($ar), 'base'=>$base.'/');
					}
				}
			}
		
			
		
		return $imagenes;
	}
	
	function obtenerCarpetas($dir, $ruta2='/') {
		$carpetas=array();
		
			$contenido = scandir($dir);
			
			// print_r($directories);
			foreach($contenido as $ar){
				if(is_dir($dir.'/'.$ar) && $ar != '.'  && $ar != '..') { //si es un directorio..
					// echo $ar; exit;
					$carpeta=array();
					$carpeta['nombre'] = utf8_encode($ar);
					$carpeta['ruta'] = $ruta2;
					
					$carpeta['subcarpetas']=$this->obtenerCarpetas( $dir.'/'.$ar, $ruta2.$ar.'/' ); //recursivamente lo inspecciono tambien					
					$carpetas[] = $carpeta;
				}else{
					 // echo $ar;
				}
			}
		
			
		
		return $carpetas;
	}
	
	
	function buscar(){
		return parent::buscar();
	}
}
?>