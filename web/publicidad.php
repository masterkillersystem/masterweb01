<?php
	session_start();
	if (!isset($_SESSION['user'])) {
		header('Location: index.php');
	}elseif(isset($_SESSION['user'])){
        include 'model/conexion.php';

		$sentencia = $db->query("SELECT * FROM publicidad inner join
         empresa on empresa.id_empresa=publicidad.empresa_id  ORDER BY publicidad.nom_servicio ASC;");
    $publicidad = $sentencia->fetchAll(PDO::FETCH_OBJ);
		//print_r($alumnos);
	}else{
		echo "Error en el sistema";
	}
?>


<?php include "assets/admin-header.php"; ?>

<section class="ftco-section">

  <div class="container">
    <div class="row justify-content-center mb-3 pb-3">
      <div class="col-md-12 heading-section text-center ftco-animate">
        <span class="subheading">Publicidades en la Web</span>
        <h2 class="mb-4">Publicidades de Afiliados</h2>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">

			<?php foreach ($publicidad  as $public) { ?>
      <div class="col-md-6 col-lg-6 ftco-animate">
        <div class="product">
          <a href="#" class="img-prod"><img class="img-fluid" src="image/<?php echo $public->foto; ?>" alt="Colorlib Template">

						<?php if ($public->estado_public > 0): ?>
            <span class="status bg-success">Activo</span>
						<?php else: ?>
						<span class="status bg-danger">InActivo</span>
						<?php endif; ?>
            <div class="overlay"></div>
          </a>

          <div class="text py-3 pb-4 px-3 text-center">
            <h3><a href="#"><?php echo $public->nom_servicio; ?></a></h3>
            <div class="d-flex">
              <div class="pricing">
                <h6 class="price"><span class="price-sale"><?php echo $public->desp_servicio; ?></span></h6>
              </div>
            </div>
						<div class="d-flex">
              <div class="pricing">
                <p class="price"><span class="price-sale text text-info"><?php echo $public->precio; ?>  Bs.</span></p>
              </div>
            </div>
            <div class="bottom-area d-flex px-3">
              <div class="m-auto d-flex">
                <a href="#" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                  <span><i class="ion-ios-menu"></i></span>
                </a>
                <a href="#" class="buy-now d-flex justify-content-center align-items-center mx-1">
                  <span><i class="ion-ios-cart"></i></span>
                </a>
                <a href="#" class="heart d-flex justify-content-center align-items-center ">
                  <span><i class="ion-ios-heart"></i></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

			<?php
		}?>

    </div>
  </div>
</section>


<?php include "assets/admin-footer.php"; ?>
