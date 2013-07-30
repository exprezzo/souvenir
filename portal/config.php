<?php
$_LOGIN_REDIRECT_PATH='/souvenir/admin';

$DB_CONFIG=array(
	'DB_SERVER'	=>'localhost',
	'DB_NAME'	=>'souvenir',
	'DB_USER'	=>'root',
	'DB_PASS'	=>'',
	'PASS_AES'	=>'s0Uv3pa3!'
);

if ( !isset($APP_CONFIG) ) $APP_CONFIG = array();

$APP_CONFIG['nombre'] = 'Portal';
$APP_CONFIG['tema'] = 'rocket';

?>