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

        $Actualizar = "UPDATE tabla4 SET codigo='$codigo', nombre='$nombre', marca='$marca', precio=$precio, cantidad=$cantidad  WHERE codigo='$codigo'";       
    
        if($conexion->query($Actualizar) === true){
            echo "Producto actualizado corréctamente";
        }else{
            die("Error al actualizar el producto: ". $conexion->error);
        }
    }  

?>