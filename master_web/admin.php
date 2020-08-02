
<?php include "assets/admin-header.php"; ?>

<section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
					<a href="#" class="btn btn-success" data-toggle="modal" data-target="#exampleModal"><i class="icon icon-plus"></i>  Nueva Empresa</a>
					<a href="<?php echo "publicidad.php"; ?>" class="btn btn-info"><i class="icon icon-book"></i>  Publicidades Activos</a>
					<br><br>
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center bg-info">
						        <th>Num</th>
						        <th>Logo</th>
						        <th>Empresa</th>
						        <th>Direccion</th>
						        <th>Celular</th>
								<th>Estado</th>
								<th>Acciones</th>
								<th>Publicidad</th>
						      </tr>`
						    </thead>
						    <tbody>
						      <tr class="text-center">
						        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>

						        <td class="image-prod"><div class="img" style="background-image:url(images/logo_empresa.jpeg);"></div></td>

						        <td class="product-name">
						        	<h6>Bell Pepper</h6>
						        </td>

						        <td class="price">Av. hereos montes campos de Pinilla N12</td>

						        <td class="quantity">
								<p>72342344</p>
					          	</div>
					          </td>

						        <td>
									<a class="btn  btn-danger btn-sm active">Inactivo</a>
								</td>
								<td>
									<a class="btn  btn-primary btn-sm active"><i class="icon icon-edit"></i></a>
									<a class="btn  btn-danger btn-sm active"><i class="icon icon-trash"></i></a>									
								</td>
								<td>
									<a class="btn  btn-info btn-sm active"><i class="text text-white"></i>Publicar</a>
								</td>
						      </tr><!-- END TR-->

						      <tr class="text-center">
						        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>

						        <td class="image-prod"><div class="img" style="background-image:url(images/product-2.jpg);"></div></td>

						        <td class="product-name">
						        	<p>Bell Pepper</p>
						        </td>

						        <td class="price">Av. hereos montes campos de Pinilla N12</td>

						        <td class="quantity">
								<p>72342344</p>
					          	</div>
					          </td>

						        <td>
									<a class="btn  btn-success btn-sm active">Activo</a>
								</td>
								<td>
									<a class="btn  btn-primary btn-sm active"><i class="icon icon-edit"></i></a>
									<a class="btn  btn-danger btn-sm active"><i class="icon icon-trash"></i></a>
								</td>
						      </tr><!-- END TR-->

						      <tr class="text-center">
						        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>

						        <td class="image-prod"><div class="img" style="background-image:url(images/product-3.jpg);"></div></td>

						        <td class="product-name">
						        	<p>Bell Pepper</p>
						        </td>

						        <td class="price">Av. hereos montes campos de Pinilla N12</td>

						        <td class="quantity">
								<p>72342344</p>
					          	</div>
					          </td>

						        <td>
									<a class="btn  btn-success btn-sm active">Activo</a>
								</td>
								<td>
									<a class="btn  btn-primary btn-sm active"><i class="icon icon-edit"></i></a>
									<a class="btn  btn-danger btn-sm active"><i class="icon icon-trash"></i></a>
								</td>
						      </tr><!-- END TR-->

						      <tr class="text-center">
						        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>

						        <td class="image-prod"><div class="img" style="background-image:url(images/product-4.jpg);"></div></td>

						        <td class="product-name">
						        	<p>Bell Pepper</p>
						        </td>

						        <td class="price">Av. hereos montes campos de Pinilla N12</td>

						        <td class="quantity">
								<p>72342344</p>
					          	</div>
					          </td>

						        <td>
									<a class="btn  btn-success btn-sm active">Activo</a>
								</td>
								<td>
									<a class="btn  btn-primary btn-sm active"><i class="icon icon-edit"></i></a>
									<a class="btn  btn-danger btn-sm active"><i class="icon icon-trash"></i></a>
								</td>
						      </tr><!-- END TR-->

						      <tr class="text-center">
						        <td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>

						        <td class="image-prod"><div class="img" style="background-image:url(images/product-5.jpg);"></div></td>

						        <td class="product-name">
						        	<p>Bell Pepper</p>
						        </td>

						        <td class="price">Av. hereos montes campos de Pinilla N12</td>

						        <td class="quantity">
								<p>72342344</p>
					          	</div>
					          </td>

						        <td>
									<a class="btn  btn-success btn-sm active">Activo</a>
								</td>
								<td>
									<a class="btn  btn-primary btn-sm active"><i class="icon icon-edit"></i></a>
									<a class="btn  btn-danger btn-sm active"><i class="icon icon-trash"></i></a>
								</td>
						      </tr><!-- END TR-->
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>
			</div>
		</section>
	
		<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<?php include "assets/admin-footer.php"; ?>