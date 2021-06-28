<?php 
    $servidor = "localhost";
    $usuario = "root";
    $password = "12345678";
    $db = "bdunad4";

    $conexion = new mysqli($servidor,$usuario,$password,$db);

    if($conexion->connect_error){
        die("Conexión fallida: ". $conexion->connect_error);
    }
    $table = "CREATE TABLE tabla4(
        codigo VARCHAR(50) NOT NULL PRIMARY KEY,
        nombre VARCHAR(50) NOT NULL,
        marca VARCHAR(50) NOT NULL,
        precio DECIMAL(10) NOT NULL,
        cantidad INT(10) NOT NULL
    )";

    if($conexion->query($table) === true){
        echo "Tabla creada correctamente";
    }else{
        die("Error al crear la tabla: ". $conexion->error);
    }