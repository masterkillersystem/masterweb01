<?php
	//print_r($_POST);
	if (!isset($_POST['oculto'])) {
		header('Location: perfil.php');
	}

	include 'model/conexion.php';
	$id2 = $_POST['id2'];
  $user 		= $_POST['user'];
	$empresa 			= $_POST['empresa'];
	$celular 	= $_POST['celular'];
  $email 	= $_POST['email'];
	$img_name   = $_FILES['logo']['name'];
	$image        = $_FILES['logo']['tmp_name'];

	$url     = "image/".$img_name;

	move_uploaded_file($image, $url);

	$sentencia = $db->prepare("UPDATE administrador SET user = ?, nom_empresa = ?, celular = ?,
												correo = ?, logo = ? WHERE id_admin = ?;");
	$resultado = $sentencia->execute([$user,$empresa,$celular,$email,$img_name,$id2]);

	if ($resultado === TRUE) {
		header('Location: perfil.php');
	}else{
		echo "Error";
	}
?>
