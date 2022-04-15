<?php 
$inc = include("db.php");
if ($inc) {
	$consulta = "SELECT * FROM usuarios";
	$resultado = mysqli_query($conexion,$consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
	    $id = $row['id'];
	    $nombre = $row['nombre'];
	    $correo = $row['correo'];
	    $usuario = $row['usuario'];
        $fecha=$row['fecha']
	    ?>
        <div>
        	<h2><?php echo $nombre; ?></h2>
        	<div>
        		<p>
        			<b>ID: </b> <?php echo $id ?><br>
        		    <b>Email: </b> <?php echo $correo ?><br>
        		    <b>Usuario: </b> <?php echo$usuario ?><br>
                    <b>Fecha Registro: </b> <?php echo$fecha ?><br>
        		</p>
        	</div>
        </div> 
	    <?php
	    }
	}
}
?>