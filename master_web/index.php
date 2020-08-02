
<?php include "assets/header.php"; ?>

<section class="ftco-section-inicio  bg-danger">
    	<div class="container">
    		<div class="row">
			<?php foreach($admin as $adm): ?>
    			<div class="col-lg-6 mb-5 ftco-animate">
    				<a href="http://localhost/guti_entregas/web/image/<?php echo $adm->logo; ?>" class="image-popup"><img src="http://localhost/guti_entregas/web/image/<?php echo $adm->logo; ?>" class="img-fluid-inicio" alt="Colorlib Template"></a>
                </div>

    		<div class="col-lg-6 product-details pl-md-5 ftco-animate bg-secondary">
    				<h2 class="algo text text-secondary" style="font-family: 'Lora', serif; font-style: oblique; font-size: 35px; font-weight: 900; ">¿Necesitas algo?</h2>
					<p class="price"><span class="text text-info" style="font-family: 'Lora', serif;font-size: 30px; font-weight: 900;">Entregamos Lo Que Pidas</span>

						<h2 class="price text text-danger" style="font-family: 'Lora', serif;font-size: 34px; font-weight: 900;">
						<?php echo $adm->celular; ?>
						</h2>
                        <?php endforeach; ?>

					<h6 class="price text text-dark" style="font-size: 20px; font-weight: 900;">HORARIO: 10 AM A 11 PM TODOS LOS DÍAS</h6></p>

                	<p><a href="https://api.whatsapp.com/send?phone=<?php echo $adm->celular; ?>" class="btn btn-danger py-3 px-5"><i class="icon icon-phone"></i>   Llamar Ahora!!!</a></p>
    		</div>
    		</div>
    	</div>
    </section>

<?php
$sentencia_cat = $db->query("SELECT * FROM categoria where id_cat=1 and estado=1;");
$categoria1= $sentencia_cat->fetchAll(PDO::FETCH_OBJ);
 ?>

	<?php foreach($categoria1 as $cat): ?>

      <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
        <div class="container py-4">
          <div class="row d-flex justify-content-center py-5">
  		<div class="col-lg-6 mb-5 ftco-animate">
      				<a href="http://localhost/guti_entregas/web/image/<?php echo $cat->foto_categoria; ?>" class="image-popup"><img src="http://localhost/guti_entregas/web/image/<?php echo $cat->foto_categoria; ?>" class="img-fluid" alt="Colorlib Template"></a>
      	</div>
  		<div class="col-lg-6 product-details pl-md-5 ftco-animate">
      				<h2 class="text text-danger"><?php echo $cat->titulo; ?></h2>
      				<p class="price text text-dark"><span class="text text-dark"><?php echo $cat->descripcion; ?>
  llamar al <h3 class="text text-dark"><p class="text text-danger"><?php echo $adm->celular; ?></p>O selecciona una empresa o afiliado para ver sus productos/servicios y tomen tu pedido personalmente</h3></span></p>

  			  <p><a href="categorias.php?id=<?php echo $cat->id_cat; ?>" class="btn btn-danger py-3 px-5"><?php echo $cat->nom_cat;?></a></p>

      	</div>
          </div>
        </div>
  	</section>

	<?php endforeach; ?>


  <?php
  $sentencia_cat = $db->query("SELECT * FROM categoria where id_cat=2 and estado=1;");
  $categoria2= $sentencia_cat->fetchAll(PDO::FETCH_OBJ);

   ?>

<?php foreach($categoria2 as $cat): ?>
	<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-info">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
		<div class="col-lg-6 mb-5 ftco-animate">
    				<a href="http://localhost/guti_entregas/web/image/<?php echo $cat->foto_categoria; ?>" class="image-popup"><img src="http://localhost/guti_entregas/web/image/<?php echo $cat->foto_categoria; ?>" class="img-fluid" alt="Colorlib Template"></a>
    	</div>
		<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h2 class="text text-danger"><?php echo $cat->titulo; ?></h2>
    				<p class="price text text-dark"><span class="text text-dark"><?php echo $cat->descripcion; ?>
 llamar al <h3 class="text text-dark"><p class="text text-danger"><?php echo $adm->celular; ?></p>O selecciona una empresa o afiliado para ver sus productos/servicios y tomen tu pedido personalmente</h3></span></p>

          	<p><a href="categorias.php?id=<?php echo $cat->id_cat; ?>" class="btn btn-danger py-3 px-5"><?php echo $cat->nom_cat;?></a></p>
    	</div>
        </div>
      </div>
	</section>
  <?php endforeach; ?>

  <?php
  $sentencia_cat = $db->query("SELECT * FROM categoria where id_cat=3 and estado=1;");
  $categoria3= $sentencia_cat->fetchAll(PDO::FETCH_OBJ);
   ?>
  <?php foreach($categoria3 as $cat): ?>
	<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-secondary">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
		<div class="col-lg-6 mb-5 ftco-animate">
    				<a href="http://localhost/guti_entregas/web/image/<?php echo $cat->foto_categoria; ?>" class="image-popup"><img src="http://localhost/guti_entregas/web/image/<?php echo $cat->foto_categoria; ?>" class="img-fluid" alt="Colorlib Template"></a>
    	</div>
		<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h2 class="text text-danger"><?php echo $cat->titulo; ?></h2>
    				<p class="price text text-dark"><span class="text text-dark"><?php echo $cat->descripcion; ?>,
llamar al <h3 class="text text-dark"><p class="text text-danger"><?php echo $adm->celular; ?></p>O selecciona una empresa o afiliado para ver sus productos/servicios y tomen tu pedido personalmente</h3></span></p>

          	<p><a href="categorias.php?id=<?php echo $cat->id_cat; ?>" class="btn btn-danger py-3 px-5"><?php echo $cat->nom_cat;?></a></p>
    	</div>
        </div>
      </div>
    </section>
    <?php endforeach; ?>

	<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-warning">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
		<div class="col-lg-6 mb-5 ftco-animate">
    				<a href="images/img1.jpg" class="image-popup"><img src="images/img1.jpg" class="img-fluid" alt="Colorlib Template"></a>
    	</div>
		<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h2 class="text text-danger">Restaurantes Delirevy</h2>
    				<p class="price text text-dark"><span class="text text-dark">Salsa & Chilaquil
					COMIDA A DOMICILIO
Si ya sabes qué ordenar,
llama al <h3 class="text text-dark"><p class="text text-danger">6787813</p> O selecciona un restaurante para ver su menú y que tomen tu pedido personalmente</h3></span></p>

          	<p><a href="cart.html" class="btn btn-danger py-3 px-5">Restaurantes</a></p>
    	</div>
        </div>
      </div>
    </section>


<?php include "assets/footer.php"; ?>
