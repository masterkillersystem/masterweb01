<?php
	session_start();
	if (!isset($_SESSION['user'])) {
		header('Location: login.php');
	}elseif(isset($_SESSION['user'])){

        include 'model/conexion.php';

		$sentencia = $db->query("SELECT empresa.id_empresa, empresa.logo_empresa, empresa.nom_empresa, empresa.cel_empresa, empresa.dir_empresa, categoria.nom_cat, empresa.estado FROM empresa inner join
    categoria on categoria.id_cat=empresa.cat_id  ORDER BY empresa.nom_empresa ASC;");
    $empresa = $sentencia->fetchAll(PDO::FETCH_OBJ);

    $sentencia_cat = $db->query("SELECT * FROM categoria ;");
    $categoria = $sentencia_cat->fetchAll(PDO::FETCH_OBJ);

		$sentencia_adm = $db->query("SELECT * FROM administrador ;");
    $administrador = $sentencia_adm->fetchAll(PDO::FETCH_OBJ);
		//print_r($alumnos);
	}else{
		echo "Error en el sistema";
	}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>guti_entregas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

		<link href="css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="goto-here">
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-dark" id="ftco-navbar">
	    <div class="container">

				<?php foreach($administrador as $adm): ?>
	      <a class="navbar-brand" href="empresa.php"><img src="image/<?php echo $adm->logo; ?>" style="height:90px; width: 220px; border-radius:10px;">
				</img></a>
				<?php endforeach; ?>

	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="<?php echo "perfil.php";?>" class="nav-link">Home</a></li>
						<li class="nav-item active"><a href="<?php echo "empresa.php";?>" class="nav-link">Empresa</a></li>
						<li class="nav-item active"><a href="<?php echo "cat.php"; ?>" class="nav-link">Categoria</a></li>
						<li class="nav-item active"><a href="<?php echo "publicidad.php";?>" class="nav-link">Publicidad</a></li>
	          <li class="nav-item "><a href="http://localhost/guti_entregas/master_web" class="btn btn-primary nav-link text-white">Ir A Pagina Web</a></li>
              <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="icon-user-circle"></span>  <?php echo $_SESSION['user'] ?></a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="<?php echo "perfil.php";?>">Perfil</a>
              	<a class="dropdown-item" href="<?php echo "cerrar.php";?>">Cerrar Sesion</a>
              </div>
            </li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
