<?php 
    $servidor = "localhost";
    $usuario = "root";
    $password = "12345678";
    $db = "bdunad4";

    $conexion = new mysqli($servidor,$usuario,$password,$db);   

    if($conexion->connect_error){
        die("Conexión fallida: ". $conexion->connect_error);
    }  

?>