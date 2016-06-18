<?php
require('fpdf.php');

$pdf=new FPDF();
$pdf->AddPage(); //adicionar pagina
$pdf->SetFont('Arial','B','16'); //tipo de letra
$pdf->cell(40,10,'¡Bienvenidos, Ejemplo de PDF con PHP!'); //texto
$pdf->output(); // salida de la impresion
?>