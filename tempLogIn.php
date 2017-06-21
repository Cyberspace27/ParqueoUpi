<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Home Parqueo</title>
</head>
<body>

<?php
$usuarios = array();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "parqueoupi";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  echo "error";
} else{
  echo "Connected successfully!!";
}
/*
$sql = "SELECT * FROM estudiantes";

$result = $conn->query($sql);
*/
$usuarioTemp = htmlentities(addslashes($_POST["nombre"]));
 
 $password = htmlentities(addslashes($_POST["password"]));

$sql = "select * from usuario where nombre='$usuarioTemp'";

$result = $conn->query($sql);

if ($result->num_rows > 0 ) { 
  $usuarioGuardado = mysqli_fetch_array($result);
 
  if ($usuarioGuardado["password"]==$password) {

    
    if ($usuarioGuardado["rol"]==1) {
      echo "Usuario Admin  $usuarioTemp" ;
      include("indexAdmin.php");
    }else if($usuarioGuardado["rol"]==2){
      echo "Usuario Estud $usuarioTemp";
      include("indexUsers.php");

    }
    //faltan angregar algunos usiarios

   
   }
  
} else {
    //echo "Usuario no existente";
  header("location:login.php");
}

$conn->close();



?>


</body>
</html>