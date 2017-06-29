<?php

require("conexionBD/datos_conexion.php");                   
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "update usuario set nombre='".$_POST["nombre"].
	   "',apellido='".$_POST["apellido"].
	   "',direccion='".$_POST["direccion"].
	   "',telefono='".$_POST["telefono"].
	   "',email='".$_POST["email"].
	   "',password='".$_POST["password"].	   
	   "' where idusuario='".$_POST["id"]."';";

if ($conn->query($sql) === TRUE ) {	
	echo "<p>Usuario editado con éxito</p>";
	header("location:listaUsers.php?id=1");
} else {
    echo "Error al registrar usuario ".$conn->error;
}
$conn->close();



?>