<?php
$contrasena = 'usuario123';
$usuario = 'user';
$nombrebd= 'webmaster';

try {
	$db = new PDO('mysql:host=localhost;
		dbname='.$nombrebd,
		$usuario,
		$contrasena,
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
	);
} catch (Exception $e) {
	echo "Error de conexión ".$e->getMessage();
}
?>
