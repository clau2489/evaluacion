<?php
	# conexion a la base de datos
    $conexion=@mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if(!$conexion){
        die("No se puede conectar a la base de datos: ".mysqli_error($conexion));
    }
    if (@mysqli_connect_errno()) {
        die("La conexión falló: ".mysqli_connect_errno()." : ". mysqli_connect_error());
    }
?>
