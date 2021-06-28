<?php
// variables

$servidor = "localhost";
$usuario = "root";
$password = "12345678";
$db = "bdunad4";


$backup_file = "C:\AppServ\www\Backups/"  .$db. "-" .date("Y-m-d-his"). '.sql';

$backup = "C:\AppServ\MySQL\bin\mysqldump.exe -u$usuario -p$password $db >".$backup_file;

system($backup,$output);


if($output === 0){
    echo "Se creó correctamente el backup de la base de datos ".$db;
}else{
    echo "Error al crear el backup de la base de datos ".$db;
}

?>