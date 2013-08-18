<h2>Hola mundo</h2>
<ul>
<?php

foreach($this->menus['datos'] as $menu){
	echo '<li><a href="'.$menu['target'].'">'.$menu['titulo'].'</a></li>';
}
?>
</ul>