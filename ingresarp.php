<?php 
    $servidor = "localhost";
    $usuario = "root";
    $password = "12345678";
    $db = "bdunad4";

    $conexion = new mysqli($servidor,$usuario,$password,$db);   

    if($conexion->connect_error){
        die("Conexión fallida: ". $conexion->connect_error);
    }
    if(isset($_POST['codigo']) && isset($_POST['nombre'])  && isset($_POST['marca']) && isset($_POST['precio']) && isset($_POST['cantidad']) ){
        $codigo = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $marca = $_POST['marca'];
        $precio = $_POST['precio'];
        $cantidad = $_POST['cantidad'];

        $insertar = "INSERT INTO tabla4(codigo,nombre,marca,precio,cantidad)
                                  VALUES('$codigo','$nombre','$marca',$precio,$cantidad)";
        
        if($conexion->query($insertar) === true){
            echo "Producto ingresado corréctamente";
        }else{
            die("Error al ingresar el producto: ". $conexion->error);
        }
    }    


?>