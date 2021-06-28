<?php

require('fpdf183/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
    function Header()
    {
        // Arial bold 15
        $this->SetFont('Arial','B',18);
        // Movernos a la derecha
        $this->Cell(60);
        // Título
        $this->Cell(70,10,'Reporte de productos',0,0,'C');
        // Salto de línea
        $this->Ln(20);
        $this->cell(40,10,utf8_decode('CÓDIGO'),1,0,'C',0);
        $this->cell(60,10,'NOMBRE',1,0,'C',0);
        $this->cell(40,10,'MARCA',1,0,'C',0);            
        $this->cell(40,10,'CANTIDAD',1,1,'C',0);  
    }

// Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Número de página
        $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
    }
}

$servidor = "localhost";
$usuario = "root";
$password = "12345678";
$db = "bdunad4";

$conexion = new mysqli($servidor,$usuario,$password,$db); 

if($conexion->connect_error){
    die("Conexión fallida: ". $conexion->connect_error);
}


$consulta = "SELECT * FROM tabla4";
$resultado = $conexion->query($consulta);


if($resultado){
    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','',12);



   while($row = $resultado->fetch_assoc()){
            $pdf->cell(40,10,$row['codigo'],1,0,'',0);
            $pdf->cell(60,10,$row['nombre'],1,0,'',0);
            $pdf->cell(40,10,$row['marca'],1,0,'',0);            
            $pdf->cell(40,10,$row['cantidad'],1,1,'',0);    
   }   


 $pdf->Output();

}else{
    die("Error al generar el reporte: " .$conexion->error);
}

?>

