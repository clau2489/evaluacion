<?php
//Conexion a la base de datos
require_once ("../config/db.php");
require_once ("../config/conexion.php");

//Capturo los datos enviados en el formulario
$nombrecapturado = $_POST['nombre'];
$apellidocapturado = $_POST['apellido'];
$emailcapturado = $_POST['email'];
$grupoclientecapturado = $_POST['grupocliente'];
$observacionescapturadas = $_POST['observaciones'];

//Ejecuto la sentencia SQL
$sql = "INSERT INTO cliente (nombre, apellido, email, grupodecliente, observaciones) VALUES ('$nombrecapturado', '$apellidocapturado', '$emailcapturado', '$grupoclientecapturado', '$observacionescapturadas')";

//Creo un condicional que me muestra mensaje de bienvenida si la consulta fue verdadera o mensaje de error si fue falsa.
if ($conexion->query($sql) === TRUE) {
  	header("Location:../msj/success.php");
} else {
  	header("Location:../msj/error.php");
}
?>