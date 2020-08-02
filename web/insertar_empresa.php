<?php
	include 'model/conexion.php';

	if (!isset($_POST['oculto'])) {
		exit();
	}

	$nombreimg = $_FILES['txtLogo']['name'];
	$archivo = $_FILES['txtLogo']['tmp_name'];
	$ruta = "img";

	$ruta = $ruta."/".$nombreimg;
	move_uploaded_file($archivo, $ruta);
	//$imagen = base64_encode(file_get_contents($_FILES['txtLogo']['tmp_name']));
	$empresa = $_POST['txtEmpresa'];
    $celular = $_POST['txtCelular'];
    $direccion = $_POST['txtDireccion'];
	$categoria = $_POST['cat_id'];

	$sentencia = $bd->prepare("INSERT INTO empresa (logo_empresa, nom_empresa, cel_empresa, dir_empresa, cat_id ) VALUES ( ?,?,?,?,?);");
	$result = $sentencia->execute([$ruta,$empresa,$celular,$direccion,$categoria]);

	if ($result === TRUE) {
		//echo "Insertado correctamente";
		header('Location: empresa.php');
	}else{
		echo "Error";
	}
?>
