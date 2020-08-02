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

    $sentencia_cat = $db->query("SELECT * FROM categoria ;");
    $categoria = $sentencia_cat->fetchAll(PDO::FETCH_OBJ);
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

           <form action="editprocess_empresa.php" method="POST" enctype="multipart/form-data" class="bg-white p-5 contact-form">
             <h5>Formulario de Registro Empresa</h5>
             <hr>
             <div class="form-group">
               <label for="">--Seleccionar Imagen/Logo--</label>
               <input type="file" name="logo" value="<?php echo $edit_emp->logo_empresa;?>" id="file" class="file file-control" placeholder="Logo Empresa">
             </div>
             <div class="form-group">
               <input type="text" name="nombre" value="<?php echo $edit_emp->nom_empresa; ?>"  class="form-control" placeholder="Nombre Empresa">
             </div>
             <div class="form-group">
               <input type="text" name="celular" value="<?php echo $edit_emp->cel_empresa; ?>"  class="form-control" placeholder="Numero Telefonico/Movil">
             </div>
             <div class="form-group">
               <textarea name="direccion" rows="8" cols="80" class="form-control" placeholder="Direccion"><?php echo $edit_emp->dir_empresa;?></textarea>
             </div>
             <div class="form-group">
               <select class="form-control" name="categoria">
                 <?php foreach($categoria as $cat): ?>
                     <option value="<?php echo $cat->id_cat?>"><?php echo $cat->nom_cat ?></option>
                     <?php endforeach; ?>
               </select>
             </div>
             <div class="form-group">
               <input type="hidden" name="oculto">
     					 <input type="hidden" name="id2" value="<?php echo $edit_emp->id_empresa; ?>">
               <input type="reset" value="Cancelar" class="btn btn-danger py-3 px-5">
               <input type="submit"  value="Actualizar Datos" class="btn btn-success py-3 px-5">
             </div>
           </form>

         </div>

         <div class="col-md-6 d-flex">
           <div id="preview" class="bg-white"><img src="image/<?php echo $edit_emp->logo_empresa;?>" alt=""></div>
         </div>
       </div>
     </div>
   </section>

<?php include "assets/admin-footer.php"; ?>
