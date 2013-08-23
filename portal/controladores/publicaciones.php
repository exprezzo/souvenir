<?php
require_once $APPS_PATH.$_PETICION->modulo.'/modelos/publicacion_modelo.php';
require_once $APPS_PATH.$_PETICION->modulo.'/modelos/categorias_publicacion_modelo.php';
require_once $APPS_PATH.$_PETICION->modulo.'/modelos/categoria_producto_modelo.php';
require_once $APPS_PATH.$_PETICION->modulo.'/modelos/imagen_publicacion_modelo.php';

class publicaciones extends Controlador{
	var $modelo="publicacion";
	var $campos=array('id','titulo','contenido','imagen','titulo_en','contenido_en','orden','fk_categoria','fecha');
	var $pk="id";
	var $nombre="publicaciones";
	
	function my_mazatlan(){
		$vista = $this->getVista();
		
		
		$vista->pagina = array(
			'titulo' => 'Mi Mazatlán',
			'titulo_en' => 'My Mazatlan'
		);
		
		$this->mostrarVista();
	}
	
	function detalle(){
		global $_PETICION;
		
		$mod = $this->getModelo();
		$params['id'] = $_PETICION->params[0];		
		$publicacion = $mod->obtener($params);
		
		$imgMod = new imagen_publicacionModelo();		
		$params=array(
			'filtros'=>array(
				array('dataKey'=>'fk_publicacion', 'filterOperator'=>'equals','filterValue'=>$params['id'] )
			)
		);		
		$imagenes = $imgMod->buscar( $params );
		
		
		$vista = $this->getVista();
		$vista->publicacion = $publicacion;
		$vista->imagenes = $imagenes;
		
		$cats=$mod->buscar( array() );		
		$vista->categorias=$cats['datos'];
		
		$vista->pagina = array(
			'titulo' => $vista->publicacion['titulo'],
			'titulo_en' => $vista->publicacion['titulo_en']
		);
		
		$this->mostrarVista();
		
	}
	
	private function getCategorias(){
		
		$mod	=new categoria_productoModelo( );
		$cats	=$mod->buscar( array() );
		return $cats['datos'];
		
	}
	
	private function getCategoriasPublicacion(){
		
		$mod	=new categorias_publicacionModelo( );
		$cats	=$mod->buscar( array() );
		return $cats['datos'];
		
	}
	
	function mostrarVista($vistaFile=''){
		$vista= $this->getVista();
		global $_PETICION;
		
		if ( $_PETICION->accion == 'edicion' || $_PETICION->accion=='busqueda' ){
			return $vista->mostrar( );
		}
		
		$vista->menus = $this->getMenus();
		// $vista->categorias = $this->getCategorias();
		
		$vista->categorias = $this->getCategoriasPublicacion();
		
		$vista->categoriasPubs = $this->getCategoriasPublicacion();
		
		return $vista->mostrar( '/tema_mazatlan', true);
	}
	
	function mostrar(){
		global $_PETICION;
		$vista=$this->getVista();
		
		
		if (empty ($_PETICION->params) ){
			$id=0;
		}else{
			$id=$_PETICION->params[0];
		}
		
		$mod=new categorias_publicacionModelo( );		
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


		$vista->publicaciones=$resProds['datos'];
		$vista->total = $resProds['total'];
		
		$numPaginas= $vista->total / $limit;
		$vista->numPaginas = $numPaginas;
		$vista->paginaActual  = $paginaActual ;
		$this->mostrarVista();
		
	}
	
	function getMenus(){
		$menus=array();
		$menus[]=array(
			'titulo'	=>'Inicio',
			'titulo_en'	=>'Home',
			'target'	=>'paginas/inicio'
		);
		$menus[]=array(
			'titulo'	=>'Productos',
			'titulo_en'	=>'Products',
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
	function editar(){
		return parent::editar();
	}
	function buscar(){
		return parent::buscar();
	}
}
?>