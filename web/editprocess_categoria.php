<?php
	//print_r($_POST);
	if (!isset($_POST['oculto'])) {
		header('Location: cat.php');
	}

	include 'model/conexion.php';
	$id2 = $_POST['id2'];
  $categoria 		= $_POST['txtCategoria'];
	$titulo 			= $_POST['txtTitulo'];
	$descripcion 	= $_POST['txtDescripcion'];
	$img_name   = $_FILES['logo_cat']['name'];
	$image        = $_FILES['logo_cat']['tmp_name'];

	$url     = "image/".$img_name;

	move_uploaded_file($image, $url);

	$sentencia = $db->prepare("UPDATE categoria SET nom_cat = ?, titulo = ?, descripcion = ?,
												foto_categoria = ? WHERE id_cat = ?;");
	$resultado = $sentencia->execute([$categoria,$titulo,$descripcion,$img_name,$id2]);

	if ($resultado === TRUE) {
		header('Location: cat.php');
	}else{
		echo "Error";
	}
?>
