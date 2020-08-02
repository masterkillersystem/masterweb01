<?php

	if (!isset($_GET['id'])) {
		header('Location: categorias.php');
	}

		include 'model/conexion.php';
		$id = $_GET['id'];

		$sentencia = $db->prepare("SELECT * FROM empresa WHERE id_empresa = ?;");
		$sentencia->execute([$id]);
		$edit_emp = $sentencia->fetch(PDO::FETCH_OBJ);

    $sentencia = $db->prepare("SELECT publicidad.id_public, publicidad.nom_servicio, publicidad.desp_servicio, publicidad.precio, publicidad.foto ,publicidad.estado_public FROM publicidad inner join
         empresa on empresa.id_empresa=publicidad.empresa_id WHERE empresa_id=? and estado_public=1 ;");
         $sentencia->execute([$id]);
    $publicidad = $sentencia->fetchAll(PDO::FETCH_OBJ);
		//print_r($persona);

?>


<?php include "assets/header.php"; ?>

  <?php foreach ($publicidad  as $public) { ?>

		<?php if ($public->estado_public > 0): ?>
			<section class="ftco-section">

				<div class="container">
    <div class="row justify-content-center mb-3 pb-3">
      <div class="col-md-12 heading-section text-center text-danger ftco-animate">
        <h2 class="mb-4 text text-danger">Seleccione su Pedido</h2>
				<hr>
      </div>
    </div>
  </div>

			 <div class="container">
				 <div class="row">

					 <div class="col-lg-4 mb-5 ftco-animate">

	<a href="http://localhost/guti_entregas/web/image/<?php echo $public->foto; ?>" class="image-popup"><img src="http://localhost/guti_entregas/web/image/<?php echo $public->foto; ?>" class="img-fluid-publicidad-producto" alt="Colorlib Template"></a>

						</div>

				 <div class="col-lg-8 product-details pl-md-5 ftco-animate">
						 <div class="sidebar-box ftco-animate">
							 <h2 class="heading"><?php echo $public->nom_servicio; ?></h2>
								<ul class="categories">
									<li><a href="#"><p><?php echo $public->desp_servicio; ?></p></a></li>
									<li><a href="#"><?php echo $public->nom_servicio; ?><span><?php echo $public->precio; ?> Bs</span></a></li>
								</ul>
							</div>
									 <p><a href="https://api.whatsapp.com/send?phone=<?php echo $adm->celular; ?>" class="btn btn-danger py-3 px-5"><i class="icon icon-phone"></i>   Llamar Para el Servicio</a></p>
				 </div>
				 </div>
			 </div>
			</section>
				                <?php else: ?>
<h2>No hay Publicaciones</h2>
				                <?php endif; ?>


    <?php
}?>

        <?php include "assets/footer.php"; ?>
