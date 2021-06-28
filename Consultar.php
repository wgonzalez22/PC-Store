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
        $consultar = "SELECT * FROM tabla4 WHERE CODIGO = '$codigo'";
        $resultado = mysqli_query($conexion,$consultar);

        if($resultado){
            while($row = $resultado->fetch_array()){
                $codigo = $row['codigo'];
                $nombre = $row['nombre'];
                $marca = $row['marca'];
                $precio = $row['precio'];
                $cantidad = $row['cantidad'];
                ?>
                <div>
                    <h2><?php echo $codigo; ?> </h2>
                    <div>
                        <p>
                            <strong>Nombre: </strong><?php echo $nombre; ?><br>
                            <strong>Marca: </strong><?php echo $marca; ?><br>
                            <strong>Precio: </strong><?php echo $precio; ?><br>
                            <strong>Cantidad: </strong><?php echo $cantidad; ?><br>
                        </p>
                    </div>
                </div>
                <?php 
            }
        }           
       
    } 
?>


