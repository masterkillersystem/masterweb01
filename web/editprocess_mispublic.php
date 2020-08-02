<?php
	//print_r($_POST);
	if (!isset($_POST['oculto'])) {
		header('Location: mis_public.php');
	}

	include 'model/conexion.php';

  $id2          = $_POST['id2'];
  $titulo       = $_POST['titulo'];
  $descripcion  = $_POST['descripcion'];
  $precio       = $_POST['precio'];

	$img_name   = $_FILES['logo']['name'];
	$image        = $_FILES['logo']['tmp_name'];

	$url     = "image/".$img_name;

	move_uploaded_file($image, $url);

	$sentencia = $db->prepare("UPDATE publicidad SET nom_servicio = ?, desp_servicio = ?, precio = ?,
												foto = ? WHERE id_public = ?;");
	$resultado = $sentencia->execute([$titulo,$descripcion,$precio,$img_name,$id2]);


	if ($resultado === TRUE) {

    //hay que arreglar EL DIRECCIONAMIENTO
		header('Location: mis_public.php?id=33');

	}else{
		echo "Error";
	}
?>
