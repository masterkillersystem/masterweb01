<?php
	session_start();
	if (!isset($_GET['id'])) {
		header('Location: perfil.php');
	}

	if (!isset($_SESSION['user'])) {
		header('Location: index.php');
	}elseif(isset($_SESSION['user'])){
		include 'model/conexion.php';
		$id = $_GET['id'];

		$sentencia = $db->prepare("SELECT * FROM administrador WHERE id_admin = ?;");
		$sentencia->execute([$id]);
		$edit_perfil = $sentencia->fetch(PDO::FETCH_OBJ);
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

           <form action="editprocess_perfil.php" method="POST" enctype="multipart/form-data" class="bg-white p-5 contact-form">
             <h5>Formulario de Edtiar Perfil de administrador</h5>
             <hr>
             <div class="form-group">
               <label for="">--Seleccionar Imagen/Logo--</label>
               <input type="file" name="logo" value="<?php echo $edit_perfil->logo; ?>" id="file" class="file file-control">
             </div>
             <div class="form-group">
               <input type="text" name="user" value="<?php echo $edit_perfil->user; ?>" class="form-control" >
             </div>
             <div class="form-group">
               <input type="text" name="empresa" value="<?php echo $edit_perfil->nom_empresa; ?>" class="form-control" >
             </div>
             <div class="form-group">
               <input type="text" name="celular" value="<?php echo $edit_perfil->celular; ?>" class="form-control" >
             </div>
             <div class="form-group">
               <input type="text" name="email" value="<?php echo $edit_perfil->correo; ?>" class="form-control" >
             </div>
             <div class="form-group">
               <input type="hidden" name="oculto">
     					 <input type="hidden" name="id2" value="<?php echo $edit_perfil->id_admin; ?>">
               <input type="reset" value="Cancelar" class="btn btn-danger py-3 px-5">
               <input type="submit" value="Actualizar Datos" class="btn btn-success py-3 px-5">
             </div>
           </form>

         </div>

         <div class="col-md-6 d-flex">
           <div id="preview" class="bg-white"><img src="image/<?php echo $edit_perfil->logo;?>" alt=""></div>
         </div>
       </div>
     </div>
   </section>

<?php include "assets/admin-footer.php"; ?>
