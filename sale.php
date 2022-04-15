<?php
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
        VALUES ('$fecha_entra','$usuario')";
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
