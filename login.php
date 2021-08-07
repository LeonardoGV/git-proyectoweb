<?php
$username= $_POST['username'];
$password=$_POST['password'];
include ("conexion.php");
$consulta = mysqli_query($conexion, "select * from usuario where username = '$username' and password = md5('$password')");
if($resultado = mysqli_fetch_array($consulta)){
    echo"Bienvenido:".$username;
    header("Location:dashboard.php");
} else{
    echo"Datos Incorrectos:";
}
?>