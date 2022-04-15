<!DOCTYPE html>
<html>
<head>
	<title>Crear Usuario</title>
  <link rel="stylesheet" href="css/css.css">
</head>
<body>


<div class="login-box">
  <img src="img/descarga.png" class="avatar" alt="Avatar Image">
  <h1>Login Here</h1>
      <form action="reg.php" method="post">
      <label form>Nombre Completo</label>
      <input type="text" name="nombre" placeholder="NOMBRE"/>
      <label>Usuario</label>
      <input type="text" name="Usuario" placeholder="USUARIO"/>
      <label>Correo Electronico</label>
      <input type="text" name="correoUsuario" placeholder="example@mail.com"/>
      <label>Contraseña</label>
      <input type="text" name="contraseñaUsuario" placeholder="********"/>
      <label><input type="submit" value="Registrarme"></input></label>
</form>
</div>
</body>
</html>