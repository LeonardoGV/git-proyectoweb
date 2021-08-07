<?php
include "conexion.php" ;
$nombre=$_POST['nombre'];
$username= $_POST['username'];
$password=$_POST['password'];
$sql = "INSERT INTO usuario (nombre, username, password) VALUES ('$nombre', '$username', md5('$password'))";
if (mysqli_query($conexion, $sql)) {
      echo "El registro Se Almacenó";
      header("Location:index.php");
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}
mysqli_close($conexion);
?>