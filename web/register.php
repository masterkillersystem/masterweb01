<?php
    include 'model/conexion.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="css/login.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }

        #preview {
  border:1px solid #ddd;
  padding:5px;
  border-radius:2px;
  background:#fff;
  max-width:200px;
}

#preview img {width:100%;display:block;}

    </style>
</head>
<body>

  <div id="ContenedorRegistro">

    <div class="content" width="250 "align="center" border="10" vspace="20" hspace="10">
      <div class="row">
        <div class="Icon" id="preview">

        </div>
      </div>
    </div>

      <div class="ContentForm">
 		 	<form action="insert_usu.php" method="post" enctype="multipart/form-data">

        <div class="input-group">

          <input type="file" name="logo" id="file" class="file file-control" placeholder="Logo Empresa">
        </div>
        <br>
 		 		<div class="input-group input-group-lg ">
 				  <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-user"></i></span>
 				  <input type="text" name="usuario" class="form-control form-control-sm"  placeholder="Ingrese su Usuario" id="usuario" aria-describedby="sizing-addon1" required>

      	</div>
        <br>
        <div class="input-group input-group-lg ">
 				  <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-eye-close"></i></span>
 				  <input type="password" name="password" class="form-control form-control-sm"  placeholder="Ingrese password" id="password" aria-describedby="sizing-addon1" required>

      	</div>
        <br>
        <div class="input-group input-group-lg ">
 				  <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-eye-close"></i></span>
 				  <input type="password" name="password2" class="form-control form-control-sm"  placeholder="Repita Su Password" id="password2" aria-describedby="sizing-addon1" required>

      	</div>
 				<br>
 				<div class="input-group input-group-lg">
 				  <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-briefcase"></i></span>
 				  <input type="text" name="empresa"  class="form-control form-control-sm" placeholder="Nombre Empresa" aria-describedby="sizing-addon1" required>

        </div>
        <br>
        <div class="input-group input-group-lg">
 				  <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon glyphicon-earphone"></i></span>
 				  <input type="number" name="telefono" class="form-control form-control-sm" placeholder="Numero de Celular" aria-describedby="sizing-addon1" required>

        </div>
 				<br>
        <div class="input-group input-group-lg">
 				  <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-envelope"></i></span>
 				  <input type="email" name="email"  class="form-control form-control-sm" placeholder="Ingrese su Email" aria-describedby="sizing-addon1" required>
        </div>
 				<br>
        <center class="opcioncontra">
 				<button class="btn btn-primary btn-signin" id="IngresoLog" name="insert" type="submit">Registrar</button>
        <button class="btn btn-danger btn-signin" id="IngresoLog" type="reset">Cancelar</button>
      </center>
 				<div class="opcioncontra"><p>¿Ya tienes una cuenta? <a href="index.php">Ingresa aquí</a>.</p></div>

      </form>
 		 </div>
 </div>


<script src="js/imagen.js"></script>
</body>

</html>
