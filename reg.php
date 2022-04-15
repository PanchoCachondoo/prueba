<?php

	
	$link = mysqli_connect('localhost','root','','francisco') or die(myslq_error($mysqli));

	//Function diferencia($link){
	//	if(isset($_POST['enviar'])){
	//		usuario($link);
	//	}if(isset($_POST['eliminar'])){
	//		eliminar($link);
	//	}
	//}

    usuarios($link);
	function usuarios($link){

	//obtenemos los valores del formulario
	
	$usuario = $_POST['Usuario'];
	$contraseña = $_POST['contraseñaUsuario'];
	$nombre = $_POST['nombre'];
	$correo = $_POST['correoUsuario'];
	$fecha=date("Y-m-d H:i:s");

        $consulta="INSERT INTO usuarios(nombre,usuario,correo,contraseña,fecha)
        VALUES ('$nombre','$usuario','$correo','$contraseña','$fecha')";
        mysqli_query($link,$consulta);
		mysqli_close($link);
    }

	//function eliminar ($link){
	//	$usuario = $_POST['Usuario'];
	//	$consulta="DELETE FROM  usuarios WHERE Usuario = '$usuario'";
	//	mysqli_query($link,$consulta);
	//	mysqli_close($link);
	//}

//	function cargarTabla($link){
//		$consulta ="SELECT * FROM usuario";
//		$resultados = mysqli_query($link,$consulta);
//		while($fila = mysqli_fetc_array($resultados)){
//			echo"<tr>";
//			echo"<td>".$fila['id'];
//			echo"<td>".$fila['usuario'];
//			echo"<td>".$fila['nombre'];
//			echo"<td>".$fila['correo'];
//			echo"<tr>";
//		}
//	}
?>
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
      <form action="index.php" method="post"></br></br></br></br></br>
      <label>Usuario registrado exitosamente</label></br></br></br></br></br>
	  <input type="submit" value="Regresar" name="b2">
      </form>
    </div>
</body>
</html>