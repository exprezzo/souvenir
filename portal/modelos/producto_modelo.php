<?php
class productoModelo extends Modelo{
	var $tabla="portal_producto";
	var $campos=array('id','codigo','nombre','descripcion','precio','imagen','nombre_en','descripcion_en','orden');
	var $pk="id";
	
	function nuevo($params){
		return parent::nuevo($params);
	}
	function guardar($params){
		
		$imagenes = ( empty($params['imagenes']) )? array() : $params['imagenes'];
		unset($params['imagenes']);
		
		$pdo = $this->getPdo();
		
		$pdo->beginTransaction( );
		$res = parent::guardar($params);
		
		
		if ( $res['success'] ){
			$mod = new imagen_productoModelo();
			
			foreach($imagenes as $art){
				
				 unset( $art['dataItemIndex'] ) ;
				 unset( $art['sectionRowIndex'] ) ;
				 unset( $art['tmp_id'] ) ;
				 
				
				
				if ( !empty($art['eliminado']) && !empty($art['id']) ){					
					$resp = $mod->eliminar( $art );	
					if ( !$resp ) {
						$pdo->rollBack( );
						$resp=array(
							'success'=>false,
							'msg'=>'error al eliminar imagen'
						);
						echo json_encode( $resp );
						exit;
					}					
				}else{
					unset( $art['eliminado'] ) ;											
					$art['fk_producto'] = $res['datos']['id'];
					
					$resp=$mod->guardar( $art );					
					
					if ( !$resp['success'] ) {
						$pdo->rollBack( );
						echo json_encode( $resp );
						exit;
					}					
				}		
			}
			$params=array(
				'filtros'=>array(
					array('dataKey'=>'fk_producto', 'filterOperator'=>'equals','filterValue'=> $res['datos']['id']),
				)
			);
			
			$imagenes= $mod->buscar( $params );				
			$res['datos']['imagenes'] =$imagenes['datos'];
		}else{
			$pdo->rollBack( );
			echo json_encode( $res );
			exit;			
		}
		
		$pdo->commit( );
		
		return $res;
	}
	function borrar($params){
		return parent::borrar($params);
	}
	function editar($params){
		return parent::obtener($params);
	}
	function buscar($params){
		return parent::buscar($params);
	}
}
?>