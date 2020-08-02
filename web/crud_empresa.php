<?php
include 'model/conexion.php';

if(isset($_POST['insert']))
{
    $nombre         = $_POST['nombre'];
    $celular        = $_POST['celular'];
    $direccion        = $_POST['direccion'];
    $categoria        = $_POST['categoria'];
    $image_name   = $_FILES['imagen']['name'];
    $image        = $_FILES['imagen']['tmp_name'];

    $location     = "image/".$image_name;

    move_uploaded_file($image, $location);

    $sentencia = $db->prepare("INSERT INTO empresa (logo_empresa, nom_empresa, cel_empresa, dir_empresa, cat_id, estado) VALUES ( ?,?,?,?,?,'1');");
    $result = $sentencia->execute([$image_name,$nombre,$celular,$direccion,$categoria]);
    //$query = ("INSERT INTO empresa (logo_empresa, nom_empresa, cel_empresa, dir_empresa, cat_id) VALUES ('$image_name','".$nombre."', '".$celular."','".$direccion."' , '".$categoria."')";

    //$result = mysqli_query($db,  $query);

    if($result == true)
    {
        header("Location:empresa.php");
    }
    else
    {
       echo "error al ingresar datos";
    }

}

?>
