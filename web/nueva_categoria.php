
<?php include "assets/admin-header.php"; ?>
<section class="ftco-section contact-section bg-light">
     <div class="container">
       <div class="row block-9">
         <div class="col-md-6 order-md-last d-flex">

           <form action="insertar_categoria.php" method="POST" autocomplete="off" enctype="multipart/form-data" class="bg-white p-5 contact-form">
             <h5>Formulario de Registro Categoria</h5>
             <hr>
             <div class="form-group">
               <label for="">--Seleccionar Imagen/Logo--</label>
               <input type="file" name="logo_cat" id="file" class="file file-control" placeholder="Logo Empresa">
             </div>
             <div class="form-group">
               <input type="text" name="txtCategoria" class="form-control" placeholder="Nombre Categoria">
             </div>
             <div class="form-group">
               <input type="text" name="txtTitulo" class="form-control" placeholder="Nombre del Titulo">
             </div>
             <div class="form-group">
               <textarea name="txtDescripcion" rows="8" cols="80" class="form-control" placeholder="Escribe Aqui La Descripcion de la Categoria"></textarea>
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
