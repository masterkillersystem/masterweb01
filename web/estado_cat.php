<?php
	if (!isset($_GET['id'])) {
		exit();
	}

	$codigo = $_GET['id'];
    include 'model/conexion.php';


   // prepare("UPDATE alumnos SET estado = 1 WHERE id = ?");
    //en el metodo listar modifica esto

	$sentencia = $db->prepare("UPDATE categoria SET estado = 1  WHERE id_cat = ?");
	$resultado = $sentencia->execute([$codigo]);

	if ($resultado === TRUE) {
		header('Location: cat.php');
	}else{
		echo "Error";
	}

?>
