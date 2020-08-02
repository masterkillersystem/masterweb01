<?php

        include 'model/conexion.php';

        $sentencia_adm = $db->query("SELECT * FROM administrador ;");
        $administrador = $sentencia_adm->fetchAll(PDO::FETCH_OBJ);

?>


<?php include "assets/admin-header.php"; ?>
<section class="ftco-section contact-section bg-light">
  <div class="container">
    <div class="row justify-content-center mb-3 pb-3">
      <div class="col-md-12 heading-section text-center ftco-animate">
        <h1 class="mb-4 text text-primary">Bienvenido <?php echo $_SESSION['user'] ?> al Sitio Web Administrativo </h1>
      </div>
    </div>
  </div>
     <div class="container">
       <div class="row block-9">
         <div class="col-md-6 order-md-last d-flex">

           <form action="#" method="POST" enctype="multipart/form-data" class="bg-white p-5 contact-form">
             <h3>Datos del Perfil Administrador</h3>
             <hr>
             <?php foreach($administrador as $adm): ?>
             <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Usuario:</label>
                <div class="col-sm-10">
                  <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $adm->user;?>">
                </div>
             </div>
             <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Empresa:</label>
                <div class="col-sm-10">
                  <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $adm->nom_empresa;?>">
                </div>
             </div>
             <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Celular:</label>
                <div class="col-sm-10">
                  <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $adm->celular;?>">
                </div>
             </div>
             <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email:</label>
                  <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="<?php echo $adm->correo;?>">
                  <div class="col-sm-10">
                </div>
             </div>

             <div class="form-group">
               <a href="edit_perfil.php?id=<?php echo $adm->id_admin;?>" class="btn btn-info btn-block btn-lg">Editar Perfil</a>
             </div>

           </form>

         </div>

         <div class="col-md-6 d-flex">
           <div id="preview"  class="bg-white">
             <img src="image/<?php echo $adm->logo;?>" alt="">
           </div>
         </div>

         <?php endforeach; ?>

       </div>
     </div>
   </section>

<?php include "assets/admin-footer.php"; ?>
