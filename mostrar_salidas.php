<?php 
$inc = include("db.php");
if ($inc) {
	$consulta = "SELECT * FROM registro_sale";
	$resultado = mysqli_query($conexion,$consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
	    $id = $row['id'];
	    $usuario = $row['usuario'];
        $fecha_sale=$row['fecha_sale']
	    ?>
        		<p>
        		    <b>Usuario: </b> <?php echo$usuario ?><br>
                    <b>Fecha de Salida: </b> <?php echo$fecha_sale ?><br>
        		</p>
        	</div>
        </div> 
	    <?php
	    }
	}
}
?>