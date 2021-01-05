<?php
ob_start();
//Conexion a la base de datos
require_once ("../config/db.php");
require_once ("../config/conexion.php");

//Capturo el ID enviado desde el formulario
$id= $_GET['id'];

//Ejecuto la sentencia SQL
$sql = "DELETE FROM cliente WHERE id='$id'";

//Creo un condicional que me muestra mensaje de bienvenida si la consulta fue verdadera o mensaje de error si fue falsa.
if ($conexion->query($sql) === TRUE) {
  	header("Location:../msj/success.php");
} else {
  	header("Location:../msj/error.php");
}

//Cerramos la conexion
$conexion->close();
ob_end_flush();
?>