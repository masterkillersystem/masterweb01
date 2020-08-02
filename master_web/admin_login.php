<?php
	session_start();
	if (isset($_SESSION['user'])) {
		header('Location: index.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" href="css/login.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>

<body>
	<!--
	<center>
		<form method="POST" action="loginProceso.php">
			<label>Usuario: </label>
			<input type="text" name="txtUsu">
			<br><br>
			<label>Password: </label>
			<input type="password" name="txtPass">
			<br><br>
			<input type="submit" value="Iniciar sesión">
		</form>
	</center>
-->
	<div id="Contenedor">
 		 <div class="Icon">
                     <!--Icono de usuario-->
                    <span class="glyphicon glyphicon-user"></span>
                  </div>
 <div class="ContentForm">
 		 	<form method="POST" action="loginProceso.php">
 		 		<div class="input-group input-group-lg">
 				  <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-user"></i></span>
 				  <input type="text" name="txtUsu" class="form-control" placeholder="Correo" id="Correo" aria-describedby="sizing-addon1" required>
      	</div>
 				<br>
 				<div class="input-group input-group-lg">
 				  <span class="input-group-addon" id="sizing-addon1"><i class="glyphicon glyphicon-lock"></i></span>
 				  <input type="password" name="txtPass" class="form-control" placeholder="******" aria-describedby="sizing-addon1" required>
        </div>
 				<br>
 				<button class="btn btn-lg btn-primary btn-block btn-signin" id="IngresoLog" type="submit">Entrar</button>
 				<div class="opcioncontra"><p>¿No tienes una cuenta? <a href="register.php">Regístrate ahora</a>.</p></div>
 		 	</form>
 		 </div>
 </div>

 </body>
</html>
