<?php
include 'model/conexion.php';

if(isset($_POST['oculto']))
{
    $id2          = $_POST['id2'];
    $titulo       = $_POST['titulo'];
    $descripcion  = $_POST['descripcion'];
    $precio       = $_POST['precio'];
    $img_name     = $_FILES['logo']['name'];
    $image        = $_FILES['logo']['tmp_name'];

    $location     = "image/".$img_name;

    move_uploaded_file($image, $location);

    $sentencia = $db->prepare("INSERT INTO publicidad (nom_servicio, desp_servicio, precio, foto, empresa_id, estado_public) VALUES ( ?,?,?,?,?,'1');");
    $result = $sentencia->execute([$titulo,$descripcion,$precio,$img_name,$id2]);
    //$query = ("INSERT INTO empresa (logo_empresa, nom_empresa, cel_empresa, dir_empresa, cat_id) VALUES ('$image_name','".$nombre."', '".$celular."','".$direccion."' , '".$categoria."')";

    //$result = mysqli_query($db,  $query);

    if($result == true)
    {
        header("Location:publicidad.php");
    }
    else
    {
       echo "error al ingresar datos";
    }

}

?>
