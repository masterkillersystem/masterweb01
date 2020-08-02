<?php
	session_start();
	if (!isset($_GET['id'])) {
		header('Location: cat.php');
	}

	if (!isset($_SESSION['user'])) {
		header('Location: index.php');
	}elseif(isset($_SESSION['user'])){
		include 'model/conexion.php';
		$id = $_GET['id'];

		$sentencia = $db->prepare("SELECT * FROM categoria WHERE id_cat = ?;");
		$sentencia->execute([$id]);
		$edit_cat = $sentencia->fetch(PDO::FETCH_OBJ);
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

           <form action="editprocess_categoria.php" method="POST" enctype="multipart/form-data" class="bg-white p-5 contact-form">
             <h5>Formulario de Edtiar Categoria</h5>
             <hr>
             <div class="form-group">
               <label for="">--Seleccionar Imagen/Logo--</label>
               <input type="file" name="logo_cat" value="<?php echo $edit_cat->foto_categoria; ?>" id="file" class="file file-control">
             </div>
             <div class="form-group">
               <input type="text" name="txtCategoria" value="<?php echo $edit_cat->nom_cat; ?>" class="form-control" >
             </div>
             <div class="form-group">
               <input type="text" name="txtTitulo" value="<?php echo $edit_cat->titulo; ?>" class="form-control" >
             </div>
             <div class="form-group">
               <textarea type="text" name="txtDescripcion" rows="8" cols="80" class="form-control"><?php echo $edit_cat->descripcion; ?></textarea>
             </div>
             <div class="form-group">
               <input type="hidden" name="oculto">
     					 <input type="hidden" name="id2" value="<?php echo $edit_cat->id_cat; ?>">
               <input type="reset" value="Cancelar" class="btn btn-danger py-3 px-5">
               <input type="submit" name="insert" value="Registrar Empresa" class="btn btn-success py-3 px-5">
             </div>
           </form>

         </div>

         <div class="col-md-6 d-flex">
           <div id="preview" class="bg-white"><img src="image/<?php echo $edit_cat->foto_categoria;?>" alt=""></div>
         </div>
       </div>
     </div>
</section>

<?php include "assets/admin-footer.php"; ?>
