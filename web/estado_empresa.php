<?php
	if (!isset($_GET['id'])) {
		exit();
	}

	$codigo = $_GET['id'];
    include 'model/conexion.php';


   // prepare("UPDATE alumnos SET estado = 1 WHERE id = ?");
    //en el metodo listar modifica esto

	$sentencia = $db->prepare("UPDATE empresa SET estado = 1  WHERE id_empresa = ?");
	$resultado = $sentencia->execute([$codigo]);

	if ($resultado === TRUE) {
		header('Location: empresa.php');
	}else{
		echo "Error";
	}

?>
