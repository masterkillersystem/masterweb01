<?php
	session_start();
	include_once 'model/conexion.php';
	$usuario = $_POST['txtUsu'];
	$contrasena = $_POST['txtPass'];

	$sentencia = $db->prepare('select * from administrador where
								user = ? and  pass = ?;');
	$sentencia->execute([$usuario, $contrasena]);
	$datos = $sentencia->fetch(PDO::FETCH_OBJ);
	//print_r($datos);

	if ($datos === FALSE) {
		header('Location: index.php');
	}elseif($sentencia->rowCount() == 1){
			$_SESSION['user'] = $datos->user;
		header('Location: perfil.php');

	}
?>
