<?php
ob_start();
//Conexion a la base de datos
require_once ("../config/db.php");
require_once ("../config/conexion.php");

//Capturo el ID enviado desde el formulario
$id= $_GET['id'];

//Capturo el resto de los datos del formulario
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
	echo "Error: " . $sql . "<br>" . $conn->error; //Redireccion de la página
  	//header("Location:../msj/error.php");
}
$conexion->close();
ob_end_flush();
?>