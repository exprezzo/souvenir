<?php
class Productos extends Controlador{	
	function mostrarVista($vistaFile=''){	
		$vista= $this->getVista();		

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
		
		$productos['es']=array(
			array(
				'id'=>1,
				'nombre'=>'El producto',
				'imagen'=>'imagen.jpg',
				'descripcion'=>'aqui para la descripcion',
				'precio'=>'$15,080.00'
			),
			array(
				'id'=>2,
				'nombre'=>'El producto',
				'imagen'=>'imagen.jpg',
				'descripcion'=>'aqui para la descripcion',
				'precio'=>'$15,080.00'
			),
			array(
				'id'=>3,
				'nombre'=>'El producto',
				'imagen'=>'imagen.jpg',
				'descripcion'=>'aqui para la descripcion',
				'precio'=>'$15,080.00'
			),
			array(
				'id'=>4,
				'nombre'=>'El producto',
				'imagen'=>'imagen.jpg',
				'descripcion'=>'aqui para la descripcion',
				'precio'=>'$15,080.00'
			),
			array(
				'id'=>5,
				'nombre'=>'El producto',
				'imagen'=>'imagen.jpg',
				'descripcion'=>'aqui para la descripcion',
				'precio'=>'$15,080.00'
			),
			array(
				'id'=>6,
				'nombre'=>'El producto',
				'imagen'=>'imagen.jpg',
				'descripcion'=>'aqui para la descripcion',
				'precio'=>'$15,080.00'
			)
		);
		
		$productos['es']=array(
			array(
				'id'=>1,
				'nombre'=>'El producto',
				'imagen'=>'imagen.jpg',
				'descripcion'=>'aqui para la descripcion',
				'precio'=>'$15,080.00'
			),
			array(
				'id'=>2,
				'nombre'=>'El producto',
				'imagen'=>'imagen.jpg',
				'descripcion'=>'aqui para la descripcion',
				'precio'=>'$15,080.00'
			),
			array(
				'id'=>3,
				'nombre'=>'El producto',
				'imagen'=>'imagen.jpg',
				'descripcion'=>'aqui para la descripcion',
				'precio'=>'$15,080.00'
			),
			array(
				'id'=>4,
				'nombre'=>'El producto',
				'imagen'=>'imagen.jpg',
				'descripcion'=>'aqui para la descripcion',
				'precio'=>'$15,080.00'
			),
			array(
				'id'=>5,
				'nombre'=>'El producto',
				'imagen'=>'imagen.jpg',
				'descripcion'=>'aqui para la descripcion',
				'precio'=>'$15,080.00'
			)
		);
		$vista->productos=$productos;
		return $vista->mostrar( '/portal', true);
	}
}
?>