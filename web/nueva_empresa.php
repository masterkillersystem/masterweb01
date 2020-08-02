
<?php include "assets/admin-header.php"; ?>
<section class="ftco-section contact-section bg-light">
     <div class="container">
       <div class="row block-9">
         <div class="col-md-6 order-md-last d-flex">

           <form action="crud_empresa.php" method="POST" autocomplete="off" enctype="multipart/form-data" class="bg-white p-5 contact-form">
             <h5>Formulario de Registro Empresa</h5>
             <hr>
             <div class="form-group">
               <label for="">--Seleccionar Imagen/Logo--</label>
               <input type="file" name="imagen" id="file" class="file file-control" placeholder="Logo Empresa">
             </div>
             <div class="form-group">
               <input type="text" name="nombre" class="form-control" placeholder="Nombre Empresa">
             </div>
             <div class="form-group">
               <input type="text" name="celular" class="form-control" placeholder="Numero Telefonico/Movil">
             </div>
             <div class="form-group">
               <textarea name="direccion" rows="8" cols="80" class="form-control" placeholder="Direccion"></textarea>
             </div>
             <div class="form-group">
               <select class="form-control" name="categoria">
                 <option value="">--Seleccionar su Categoria--</option>
                 <?php foreach($categoria as $cat): ?>

                     <option value="<?php echo $cat->id_cat?>"><?php echo $cat->nom_cat ?></option>
                     <?php endforeach; ?>
               </select>
             </div>
             <div class="form-group">
               <input type="reset" value="Cancelar" class="btn btn-danger py-3 px-5">
               <input type="submit" name="insert" value="Registrar Empresa" class="btn btn-success py-3 px-5">
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
