<?php
	session_start();
	if (!isset($_GET['id'])) {
		header('Location: empresa.php');
	}

	if (!isset($_SESSION['user'])) {
		header('Location: index.php');
	}elseif(isset($_SESSION['user'])){
		include 'model/conexion.php';
		$id = $_GET['id'];

		$sentencia = $db->prepare("SELECT * FROM empresa WHERE id_empresa = ?;");
		$sentencia->execute([$id]);
		$edit_emp = $sentencia->fetch(PDO::FETCH_OBJ);

		//$sentencia = $db->prepare("SELECT publicidad.id_public, publicidad.nom_servicio, publicidad.desp_servicio, publicidad.precio, publicidad.foto ,publicidad.estado_public FROM publicidad inner join
         //empresa on empresa.id_empresa=publicidad.empresa_id WHERE empresa_id=? ;");
         //$sentencia->execute([$id]);
    //$publicidad = $sentencia->fetchAll(PDO::FETCH_OBJ);
		//print_r($persona);
	}else{
		echo "Error en el sistema";
	}

?>


<?php include "assets/admin-header.php"; ?>

<section class="ftco-section contact-section bg-light">
     <div class="container">
       <div class="row block-9">
         <div class="col-md-6 order-md-last d-flex">

           <form action="insertar_public.php" method="POST" autocomplete="off" enctype="multipart/form-data" class="bg-white p-5 contact-form">
             <h5>Formulario Publicidad Para Afiliado </h5>
             <hr>

               <div class="form-group row">
                  <label for="staticEmail" class="col-sm-2 col-form-label">AFILIADO:</label>
                  <div class="col-sm-10">
                    <input type="text" name="" readonly class="form-control-plaintext"  value="<?php echo $edit_emp->nom_empresa; ?>">
                  </div>
               </div>

             <hr>
             <div class="form-group">
               <label for="" class="text text-dark">--Seleccionar Imagen del Producto--</label>
               <input type="file" name="logo" id="file" class="file file-control" placeholder="Logo Empresa">
             </div>
             <div class="form-group">
               <input type="text" name="titulo" class="form-control" placeholder="Titulo del Servicio">
             </div>

             <div class="form-group">
               <textarea name="descripcion" rows="8" cols="80" class="form-control" placeholder="Descripcion del Servicio"></textarea>
             </div>
             <div class="form-group">
               <input type="number" name="precio" class="form-control" placeholder="Precio">
             </div>
             <div class="form-group">
							 <input type="hidden" name="oculto">
     					 <input type="hidden" name="id2" value="<?php echo $edit_emp->id_empresa; ?>">
               <input type="reset" value="Cancelar" class="btn btn-danger py-3 px-5">
               <input type="submit"  value="Publicar Servicio" class="btn btn-success py-3 px-5">
             </div>
           </form>

         </div>

         <div class="col-md-6 d-flex">
           <div id="preview" class="bg-white"></div>
         </div>
       </div>
     </div>
   </section>

<?php include "assets/admin-footer.php"; ?>
