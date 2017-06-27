<?php

require("conexionBD/datos_conexion.php");

$sql = "insert into usuario(nombre, apellido, email, password, telefono, direccion, rol) values('".$_POST["nombre"]."','".$_POST["apellido"]."','".$_POST["email"]."','".$_POST["password"]."','".$_POST["telefono"]."','".$_POST["direccion"]."','".$_POST["rol"]."');";

if ($conn->query($sql) === TRUE ) { 
   header("location:login.php");
   // echo "<p>Usuario registrado con éxito</p>";
} else {
    echo "Error al registrar usuario " .$conn->error;
}
$conn->close();



?>
