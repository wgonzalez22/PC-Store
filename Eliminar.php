<?php 
    $servidor = "localhost";
    $usuario = "root";
    $password = "12345678";
    $db = "bdunad4";

    $conexion = new mysqli($servidor,$usuario,$password,$db);   

    if($conexion->connect_error){
        die("Conexión fallida: ". $conexion->connect_error);
    }
    if(isset($_POST['codigo'])){
        $codigo = $_POST['codigo'];      

        $borrar = "DELETE FROM tabla4 WHERE CODIGO = '$codigo'";
        
        if($conexion->query($borrar) === true){
            echo "Producto eliminado corréctamente";
        }else{
            die("Error al eliminar el producto: ". $conexion->error);
        }
    }   


?>