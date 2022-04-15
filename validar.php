<?php
if(isset($_POST['b1']))
{
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];


session_start();
$_SESSION['usuario']=$usuario;
$conexion=mysqli_connect("localhost","root","","francisco");
$link = mysqli_connect('localhost','root','','francisco') or die(myslq_error($mysqli));
$consulta="SELECT*FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);
if($filas){
 
        $fecha_entra=date("Y-m-d H:i:s");
        $usuario = $_POST['usuario'];
        $consulta="INSERT INTO registro(fecha_entra,usuario)
        VALUES ('$fecha_entra','$usuario')";
        mysqli_query($conexion,$consulta);
	    	mysqli_close($conexion);
        $get="$fecha_entra";
        $get1="$usuario";
        include("entra.php");
}else{
  $errorLogin="Nombre de usuario y/o password es incorrecto";
    ?>
    <?php
    
    include("index.php");

  ?>
  
  <?php
}
mysqli_free_result($resultado);
}else if(isset($_POST['b2']))
{
  $usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];


session_start();
$_SESSION['usuario']=$usuario;
$conexion=mysqli_connect("localhost","root","","francisco");
$link = mysqli_connect('localhost','root','','francisco') or die(myslq_error($mysqli));
$consulta="SELECT*FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);
if($filas){
  
        $fecha_sale=date("Y-m-d H:i:s");
        $usuario = $_POST['usuario'];
        $consulta="INSERT INTO registro_sale(fecha_sale,usuario)
        VALUES ('$fecha_sale','$usuario')";
        mysqli_query($conexion,$consulta);
	    	mysqli_close($conexion);
        $get="$fecha_sale";
        $get1="$usuario";
        include("entra.php");

}else{
  $errorLogin="Nombre de usuario y/o password es incorrecto";
    ?>
    <?php
    
    include("index.php");

  ?>
  
  <?php
}
mysqli_free_result($resultado);

}  