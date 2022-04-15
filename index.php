<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		LOGIN
	</title>
  <link rel="stylesheet" href="css/css.css">
  
</head>
<body>
  
<div class="login-box">
  <img src="img/descarga.png" class="avatar" alt="Avatar Image">
      
      <form action="validar.php" method="post">
      <?php
        if (isset($errorLogin)){
          echo$errorLogin;
        }
      ?>
        <h1>Ingrese su Usuario</h1>
        <label for="username">Usuario</label>
        <input type="text" placeholder="ingrese su nombre" name="usuario">
        <label for="password">Contraseña</label> 
        <input type="password" placeholder="ingrese su contraseña" name="contraseña">
        <input type="submit" value="Ingresar" name="b1">
        <input type="submit" value="Salir" name="b2">
        <a href="form.php">¿No tienes una cuenta?</a></br>
        <a href="registros.php">Ver registros</a>
      </form>
      
    </div>
</body>
</html>