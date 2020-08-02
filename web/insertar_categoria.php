<?php
include 'model/conexion.php';

if(isset($_POST['insert']))
{
	$categoria 		= $_POST['txtCategoria'];
	$titulo 			= $_POST['txtTitulo'];
	$descripcion 	= $_POST['txtDescripcion'];
	$img_name   = $_FILES['logo_cat']['name'];
	$imagen        = $_FILES['logo_cat']['tmp_name'];

	$url     = "image/".$img_name;

	move_uploaded_file($imagen, $url);

	$sentencia = $db->prepare("INSERT INTO categoria (nom_cat, titulo, descripcion, estado, foto_categoria) VALUES (?,?,?,'1',?);");
	$resultado = $sentencia->execute([$img_name,$categoria,$titulo,$descripcion]);

	if ($resultado == true) {
		//echo "Insertado correctamente";
		header("Location: cat.php");
	}else{
		echo "Error al ingresar datos";
	}
}
?>
