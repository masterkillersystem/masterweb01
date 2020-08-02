<?php
	session_start();
	if (!isset($_SESSION['user'])) {
		header('Location: index.php');
	}elseif(isset($_SESSION['user'])){
		include 'model/conexion.php';
		$sentencia = $db->query("SELECT * FROM categoria;");
		$categoria = $sentencia->fetchAll(PDO::FETCH_OBJ);
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
        <h2 class="mb-4">Lista de Categorias</h2>
				<hr><a href="<?php echo "nueva_categoria.php";?>" class="btn btn-success"><i class="icon icon-plus"></i>  Nueva Categoria</a>
      </div>
    </div>
  </div>
<!--
	<?php
		foreach ($categoria  as $cat) {
			?>
			<tr>
				<td><?php echo $cat->id_cat; ?></td>
				<td><?php echo $cat->nom_cat; ?></td>
				<td><?php echo $cat->descripcion; ?></td>
				<td>
				<a href="editar.php?id=<?php echo $dato->id_cat; ?>">Editar</a>
				<a href="eliminar.php?id=<?php echo $dato->id_cat; ?>">Eliminar</a>
				</td>
			</tr>
			<?php
		}
	?>-->


  <div class="container">
    <div class="row">
			<?php
				foreach ($categoria  as $cat) {
					?>
      <div class="col-md-6 col-lg-6 ftco-animate">
        <div class="product">

          <a href="#" class="img-prod"><img class="img-fluid" src="image/<?php echo $cat->foto_categoria;?>" alt="Colorlib Template">
						<?php if ($cat->estado > 0): ?>
            <span class="status bg-success">Activo</span>
						<?php else: ?>
							<span class="status bg-danger">InActivo</span>
						<?php endif; ?>
            <div class="overlay"></div>
          </a>

          <div class="text py-3 pb-4 px-3 text-center">
            <h3><a href="#"><?php echo $cat->descripcion; ?></a></h3>
            <div class="d-flex">
              <div class="pricing">
                <p class="price"><h5 class=""><?php echo $cat->nom_cat; ?></h5></p>
              </div>
            </div>
            <div class="bottom-area d-flex px-3">
              <div class="m-auto d-flex">
                <a href="edit_cat.php?id=<?php echo $cat->id_cat;?>" class="buy-now d-flex justify-content-center align-items-center mx-1">
                  <span><i class="ion-ios-construct"></i></span>
                </a>
								<a href="estado_cat.php?id=<?php echo $cat->id_cat;?>" onClick="return confirm('Desea Activar la Categoria <?php echo $cat->nom_cat; ?>?')" class="buy-now d-flex justify-content-center align-items-center mx-1">
                  <span><i class="ion-ios-heart"></i></span>
                </a>

                <a href="delete_cat.php?id=<?php echo $cat->id_cat;?>" onClick="return confirm('Desea Dar de Baja la Categoria <?php echo $cat->nom_cat; ?>?')" class="heart d-flex justify-content-center align-items-center">
                  <span><i class="ion-ios-trash"></i></span>
                </a>

              </div>
            </div>
          </div>
        </div>
      </div>
			<?php
		}
	?>

    </div>
  </div>
</section>


<?php include "assets/admin-footer.php"; ?>
