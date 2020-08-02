<?php
	session_start();
	if (!isset($_GET['id'])) {
		header('Location: mis_public.php');
	}

	if (!isset($_SESSION['user'])) {
		header('Location: index.php');
	}elseif(isset($_SESSION['user'])){
		include 'model/conexion.php';
		$id = $_GET['id'];

		$sentencia = $db->prepare("SELECT * FROM empresa WHERE id_empresa = ?;");
		$sentencia->execute([$id]);
		$edit_empresa = $sentencia->fetch(PDO::FETCH_OBJ);

    $sentencia = $db->prepare("SELECT * FROM publicidad WHERE id_public=? ;");
         $sentencia->execute([$id]);
    $publicidad = $sentencia->fetch(PDO::FETCH_OBJ);
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

           <form action="editprocess_mispublic.php" method="POST" enctype="multipart/form-data" class="bg-white p-5 contact-form">
             <h5>EDITAR PUBLICACION DE <?php echo $edit_empresa->nom_empresa; ?> </h5>
             <hr>

             <div class="form-group">
               <label for="" class="text text-dark">--Seleccionar Imagen del Producto--</label>
               <input type="file" name="logo" value="<?php echo $publicidad->foto; ?>" id="file" class="file file-control" placeholder="Logo Empresa">
             </div>
             <div class="form-group">
               <input type="text" name="titulo" value="<?php echo $publicidad->nom_servicio; ?>" class="form-control" placeholder="Titulo del Servicio">
             </div>

             <div class="form-group">
               <textarea name="descripcion" rows="8" cols="80" class="form-control" placeholder="Descripcion del Servicio"><?php echo $publicidad->desp_servicio; ?></textarea>
             </div>
             <div class="form-group">
               <input type="number" name="precio" value="<?php echo $publicidad->precio; ?>" class="form-control" placeholder="Precio">
             </div>
             <div class="form-group">
							 <input type="hidden" name="oculto">
     					 <input type="hidden" name="id2" value="<?php echo $publicidad->id_public; ?>">
               <input type="reset" value="Cancelar" class="btn btn-danger py-3 px-5">
               <input type="submit" value="Editar Publicacion" class="btn btn-success py-3 px-5">
             </div>
           </form>

         </div>

         <div class="col-md-6 d-flex">
           <div id="preview" class="bg-white"><img src="image/<?php echo $publicidad->foto; ?>" alt=""></div>
         </div>
       </div>
     </div>
   </section>

<?php include "assets/admin-footer.php"; ?>
