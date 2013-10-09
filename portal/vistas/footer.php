		
		<div id="footer">
			<div class="centrado" style="width:980px; text-align: left; display:inline-block;">
				<a href="<?php echo $APP_PATH.$_idioma.'/inicio'; ?>" id="logito"><img src="<?php echo $WEB_BASE.'imagenes/logito.png'; ?>" alt="My Mazatlan Souvenir" width="100" height="29" > </a>
				<ul class="menu">
					<?php 
					$ubicacion = $_PETICION->controlador.'/'.$_PETICION->accion;		
					foreach($this->menus as $menu){
						$clase = ($menu['target'] == $ubicacion)? 'activo' : '';
						echo '<li><a mtarget="'.$menu['target'].'" class="'.$clase.'" href="'.$APP_PATH.$_idioma.'/'.$menu['target'].'">'.$menu['titulo'.$sufijo].'</a></li>';			
					}
					?>		
				</ul>
			</div>
		</div>

	</body>
</html>
