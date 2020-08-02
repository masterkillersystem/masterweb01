<?php








	if (!isset($_GET['id'])) {
		header('Location: index.php');
	}

		include 'model/conexion.php';
    echo $texto=preg_replace("/<img (.+?)>/", ' ', $texto);
		$id = $_GET['id'];

    $sentencia = $db->prepare("SELECT empresa.id_empresa, empresa.logo_empresa, empresa.nom_empresa, empresa.cel_empresa, empresa.dir_empresa, categoria.nom_cat, empresa.estado FROM empresa inner join
     categoria on categoria.id_cat=empresa.cat_id  where cat_id=? and empresa.estado=1 ;");
     $sentencia->execute([$id]);
    $empresa = $sentencia->fetchAll(PDO::FETCH_OBJ);

    $sentencia_cat = $db->prepare("SELECT * FROM categoria  where id_cat=?;");
    $sentencia->execute([$id]);
    $cat = $sentencia_cat->fetchAll(PDO::FETCH_OBJ);

		$sentencia = $db->prepare("SELECT * FROM  WHERE id_empresa = ?;");
		$sentencia->execute([$id]);
		$edit_emp = $sentencia->fetchAll(PDO::FETCH_OBJ);


		//print_r($persona);


?>

<?php include "assets/header.php"; ?>

<section class="ftco-section">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
		  <?php foreach($cat as $categorias): ?>
            <h2 class="mb-4"><span class="subheading">Categoria</span> <?php echo $categorias->nom_cat;?></h2>
			<?php endforeach; ?>
          </div>
        </div>
        </div>
</section>

<section class="ftco-section ftco-category ftco-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="row">

						<?php foreach($empresa as $nom): ?>

						<div class="col-md-4">

								<div class="category-wrap  img mb-4 d-flex " style="background-image: url(http://localhost/guti_entregas/web/image/<?php echo $nom->logo_empresa; ?>);">
									<div class="text px-3 py-1">
										<h2 class="mb-0">
                      <a href="detalle_publicidad.php?id=<?php echo $nom->id_empresa; ?>" class="btn btn-danger">Click!! A <?php echo $nom->nom_empresa;?></a></h2>
									</div>
								</div>

						</div>

						<?php endforeach; ?>

						</div>
					</div>
				</div>
			</div>
		</section>

<?php include "assets/footer.php"; ?>
