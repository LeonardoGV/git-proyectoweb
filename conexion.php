<?php

    $servidor="localhost"; // nro ip 127.0.0.1
    $usuario="root";
    $pass="";
    $bd="service";
        
    $conexion = new mysqli($servidor,$usuario,$pass,$bd); // implica un OPEN de la BD
    if ($conexion->connect_errno){
     die("La conexion ha fallado".$conexion->connect_errno);
}   
?>