<?php 
    $servidor = "localhost";
    $usuario = "root";
    $password = "12345678";

    $conexion = new mysqli($servidor,$usuario,$password);

    if($conexion->connect_error){
        die("Conexión fallida: ". $conexion->connect_error);
    }
    $database = "CREATE DATABASE bdunad4";

    if($conexion->query($database) === true){
        echo "Base de datos creada correctamente";
    }else{
        die("Error al crear la base de datos: ". $conexion->error);
    }


    // $servidor = "localhost";
    // $usuario = "root";
    // $password = "12345678";

    // $conexion = new mysqli($servidor,$usuario,$password);

    // if($conexion->connect_error){
    //     die("Conexión fallida: ". $conexion->connect_error);
    // }
    // $database = "DROP DATABASE bdunad4";

    // if($conexion->query($database) === true){
    //     echo "Base de datos borrada correctamente";
    // }else{
    //     die("Error al borrar la base de datos: ". $conexion->error);
    // }



?>