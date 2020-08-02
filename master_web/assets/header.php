<?php
        include 'model/conexion.php';

      $sentencia_adm = $db->query("SELECT * FROM administrador ;");
      $admin = $sentencia_adm->fetchAll(PDO::FETCH_OBJ);



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
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="goto-here">
    <nav class="navbar navbar-expand-lg navbar ftco_navbar  ftco-navbar" id="ftco-navbar">
	    <div class="container">
      <?php foreach($admin as $adm): ?>
      <a class="navbar-brand" href="<?php echo "index.php";?>"><i class="icon icon-bicycle"></i>&nbsp;&nbsp;<?php echo $adm->nom_empresa;?></a>
      <?php endforeach; ?>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="<?php echo "index.php";?>" class="nav-link">Inicio</a></li>&nbsp;&nbsp;&nbsp;
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categoria</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="shop.html">Restaurantes</a>
              	<a class="dropdown-item" href="wishlist.html">Farmacias</a>
                <a class="dropdown-item" href="product-single.html">Tiendas de Barrio</a>
              </div>
            </li>&nbsp;&nbsp;&nbsp;
	          <li class="nav-item"><a href="https://api.whatsapp.com/send?phone=<?php echo $adm->celular; ?>" class="nav-link"><i class="icon icon-phone"></i>&nbsp;<?php echo $adm->celular; ?></a></li>&nbsp;&nbsp;&nbsp;
	          <li class="nav-item"><a href="#" class="nav-link"><i class="icon icon-envelope"></i>&nbsp;<?php echo $adm->correo; ?></a></li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
