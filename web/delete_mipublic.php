<?php
	if (!isset($_GET['id'])) {
		exit();
	}

	$codigo = $_GET['id'];
    include 'model/conexion.php';


   // prepare("UPDATE alumnos SET estado = 1 WHERE id = ?");
    //en el metodo listar modifica esto

	$sentencia = $db->prepare("UPDATE publicidad SET estado_public = 0  WHERE id_public = ?");
	$resultado = $sentencia->execute([$codigo]);

	if ($resultado === TRUE) {
		header('Location: mis_public.php');
	}else{
		echo "Error";
	}

?>
