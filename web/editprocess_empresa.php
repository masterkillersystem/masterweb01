<?php
	//print_r($_POST);
	if (!isset($_POST['oculto'])) {
		header('Location: empresa.php');
	}

	include 'model/conexion.php';
	$id2 = $_POST['id2'];
  $nombre         = $_POST['nombre'];
  $celular        = $_POST['celular'];
  $direccion        = $_POST['direccion'];
  $categoria        = $_POST['categoria'];
	$img_name   = $_FILES['logo']['name'];
	$image        = $_FILES['logo']['tmp_name'];

	$url     = "image/".$img_name;

	move_uploaded_file($image, $url);

	$sentencia = $db->prepare("UPDATE empresa SET nom_empresa = ?, cel_empresa = ?, dir_empresa = ?,
												logo_empresa = ?, cat_id = ? WHERE id_empresa = ?;");
	$resultado = $sentencia->execute([$nombre,$celular,$direccion,$img_name,$categoria,$id2]);

	if ($resultado === TRUE) {
		header('Location: empresa.php');
	}else{
		echo "Error";
	}
?>
