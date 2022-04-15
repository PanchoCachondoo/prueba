<?php 
$inc = include("db.php");
if ($inc) {
	$consulta = "SELECT * FROM registro";
	$resultado = mysqli_query($conexion,$consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
	    $id = $row['id'];
	    $usuario = $row['usuario'];
        $fecha_entra=$row['fecha_entra']
	    ?>
        		<p>
        		    <b>Usuario: </b> <?php echo$usuario ?><br>
                    <b>Fecha Registro: </b> <?php echo$fecha_entra ?><br>
        		</p>
        	</div>
        </div> 
	    <?php
	    }
	}
}
?>