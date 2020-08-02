<?php
include 'model/conexion.php';

if(isset($_POST['insert']))
{
    $usuario         = $_POST['usuario'];
    $password        = $_POST['password'];
    $empresa        = $_POST['empresa'];
    $telefono        = $_POST['telefono'];
    $email        = $_POST['email'];
    $image_name   = $_FILES['logo']['name'];
    $image        = $_FILES['logo']['tmp_name'];

    $location     = "image/".$image_name;

    move_uploaded_file($image, $location);

    $sentencia = $db->prepare("INSERT INTO administrador (user, pass, nom_empresa, celular, correo, logo) VALUES ( ?,?,?,?,?,?);");
    $result = $sentencia->execute([$usuario,$password,$empresa,$telefono,$email,$image_name]);
    //$query = ("INSERT INTO empresa (logo_empresa, nom_empresa, cel_empresa, dir_empresa, cat_id) VALUES ('$image_name','".$nombre."', '".$celular."','".$direccion."' , '".$categoria."')";

    //$result = mysqli_query($db,  $query);

    if($result == true)
    {
        header("Location:index.php");
    }
    else
    {

       echo "error al ingresar datos";
    }

}

?>
