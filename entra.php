<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" >
	<meta name="viewport" content="width=device-width, initial-scale=1" >
  <meta http-equiv= "refresh" contect="3; url=index.php">
	<title>
		LOGIN
	</title>
  <link rel="stylesheet" href="css/css.css">
  
</head>
<body>
  
<div class="login-box">
  <img src="img/descarga.png" class="avatar" alt="Avatar Image">
  <h1>BITACORA</h1>
      <form action="index.php" method="post">
      <label for="username">Usuario</label>
      <?php
        if (isset($get1)){
          echo$get1;
        }
      ?></br></br></br>
      <label for="username">Hora asignada</label>
      <?php
        if (isset($get)){
          echo$get;
        }
      ?></br></br></br></br>
      <input type="submit" value="Ingresar">
      </form>
    </div>
</body>
</html>