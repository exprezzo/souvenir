<?php
require_once $APPS_PATH.$_PETICION->modulo.'/modelos/producto_modelo.php';
require_once $APPS_PATH.$_PETICION->modulo.'/modelos/imagen_producto_modelo.php';
require_once $APPS_PATH.$_PETICION->modulo.'/modelos/categoria_producto_modelo.php';

class productos extends Controlador{
	var $modelo="producto";
	var $campos=array('id','codigo','nombre','descripcion','precio','imagen','nombre_en','descripcion_en','orden','fk_categoria','precio_en');
	var $pk="id";
	var $nombre="productos";
	
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
		
		
		return $vista->mostrar( '/portal', true);
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
		
		if (empty ($_PETICION->params) ){
			$id=0;
		}else{
			$id=$_PETICION->params[0];
		}
		// echo $id; exit;
		
		$mod=$this->getModelo();
		
		$params=array(
			'filtros'=>array(
				array('dataKey'=>'fk_categoria', 'filterOperator'=>'equals','filterValue'=>$id)
			)
		);
		
		$resProds = $mod->buscar( $params );
		
		$vista=$this->getVista();
		$vista->productos=$resProds['datos'];
		
		$mod=new categoria_productoModelo( );		
		$cats=$mod->buscar( array() );		
		$vista->categorias=$cats['datos'];
		
		$this->mostrarVista();
		
	}
	
	function editar(){
		$vista=$this->getVIsta();
		
		$mod = new imagen_productoModelo();
		
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
	function buscar(){
		return parent::buscar();
	}
}
?>