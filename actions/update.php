<?php
//Conexion a la base de datos
require_once ("../config/db.php");
require_once ("../config/conexion.php");

//Capturo el ID enviado desde el formulario
$id= $_POST['id'];
$nombrecapturado = $_POST['nombre'];
$apellidocapturado = $_POST['apellido'];
$emailcapturado = $_POST['email'];
$grupoclientecapturado = $_POST['grupocliente'];
$observacionescapturadas = $_POST['observaciones'];

//Ejecuto la sentencia SQL
$sql = "UPDATE cliente SET nombre='$nombrecapturado', apellido='$apellidocapturado', email='$emailcapturado', grupodecliente='$grupoclientecapturado', observaciones='$observacionescapturadas' WHERE id='$id'";

//Creo un condicional que me muestra mensaje de bienvenida si la consulta fue verdadera o mensaje de error si fue falsa.
if ($conexion->query($sql) === TRUE) {
  	header("Location:../msj/success.php");
} else {
  	header("Location:../msj/error.php");
}
?>