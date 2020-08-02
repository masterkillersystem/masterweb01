<?php
	session_start();
	if (!isset($_SESSION['user'])) {
		header('Location: index.php');
	}elseif(isset($_SESSION['user'])){
        include 'model/conexion.php';

				$sentencia = $db->query("SELECT empresa.id_empresa, empresa.logo_empresa, empresa.nom_empresa, empresa.cel_empresa, empresa.dir_empresa, categoria.nom_cat, empresa.estado FROM empresa inner join
         categoria on categoria.id_cat=empresa.cat_id  ORDER BY empresa.nom_empresa ASC;");
        $empresa = $sentencia->fetchAll(PDO::FETCH_OBJ);

        $sentencia_cat = $db->query("SELECT * FROM categoria ;");
        $categoria = $sentencia_cat->fetchAll(PDO::FETCH_OBJ);
		//print_r($alumnos);
	}else{
		echo "Error en el sistema";
	}
?>



<?php include "assets/admin-header.php"; ?>

<section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
							<h3 class="text text-dark">Lista de Afiliados Registrados</h3>
							<hr>
					<a href="<?php echo "nueva_empresa.php";?>" class="btn btn-success"><i class="icon icon-plus"></i>  Nueva Empresa</a>
					<br><br>
	    				<table class="table" id="dataTable">
						    <thead class="thead-primary">
						      <tr class="text-center bg-dark">
										<th>ID</th>
						        <th>Logo</th>
										<th>Empresa</th>
										<th>Phone</th>
										<th>Direccion</th>
						        <th>Categoria</th>
										<th>Estado</th>
										<th>Accion</th>
										<th>Publicar</th>
										<th>Ver</th>
						      </tr>
									<?php $i = 1; ?>
									<?php

							foreach ($empresa  as $emp) {
								?>
						    </thead>
						    <tbody>
						      <tr class="text-center">
						        <td><?php echo $i++; ?></td>

						        <td class="image-prod"><div class="img" style="background-image:url(image/<?php echo $emp->logo_empresa; ?>);"></div></td>

						        <td class="product-name">
						        	<h6><?php echo $emp->nom_empresa; ?></h6>
						        </td>

						        <td class="price"><?php echo $emp->cel_empresa; ?></td>

						        <td class="quantity"><p><?php echo $emp->dir_empresa; ?></p>
					          	</div>
					          </td>
										<td class="quantity"><p><?php echo $emp->nom_cat; ?></p>
					          	</div>
					          </td>
										<td>
				                <?php if ($emp->estado > 0): ?>
				                <a  class="btn btn-lg btn-success btn-sm active"><span>activo</span></a>
				                <?php else: ?>
				                <a href="estado_empresa.php?id=<?php echo $emp->id_empresa;?>" onClick="return confirm('Desea Activar la empresa <?php echo $emp->nom_empresa; ?>?')" class="btn btn-lg btn-danger btn-sm"><span>inactivo</span></a>
				                <?php endif; ?>
				            </td>
								<td>

									<a href="edit_empresa.php?id=<?php echo $emp->id_empresa; ?>" class="btn  btn-primary btn-sm active"><i class="icon icon-edit"></i></a>
									<a href="delete_empresa.php?id=<?php echo $emp->id_empresa; ?>" class="btn  btn-danger btn-sm active"><i class="icon icon-trash"></i></a>
								</td>
								<td>
									<?php if ($emp->estado > 0): ?>
									<a href="nueva_publicidad.php?id=<?php echo $emp->id_empresa; ?>" class="btn  btn-info btn-sm active"><i class="icon icon-globe"></i></a>
									<?php else: ?>
										<a href="#" class="btn  btn-info btn-sm active"><i class="icon icon-globe"></i></a>

									<?php endif; ?>
								</td>
								<td>
									<a href="mis_public.php?id=<?php echo $emp->id_empresa; ?>" class="btn  btn-dark btn-sm active"><i class="icon icon-eye text text-white"></i></a>
								</td>
						    </tr>
								<?php
							}?>

									<!-- END TR-->

						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
			</div>
		</section>

		<!-- Modal -->
<form action="estado_empresa.php" method="post">
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header bg-info">
	        <h5 class="modal-title text text-white" id="exampleModalLabel">El Estado Empresa</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
					<input type="hidden" name="" value="">
	      </div>
	      <div class="modal-body">
	        <h6>Desea Activar Su Estado de la Empresa?.</h6>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
	        <button type="submit"  class="btn btn-success">Si</button>
	      </div>
	    </div>
	  </div>
	</div>
</form>

<?php include "assets/admin-footer.php"; ?>
