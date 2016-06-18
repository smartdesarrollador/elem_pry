<?php

require('fpdf.php');

$pdf=new FPDF();
$pdf->AddPage();//adicionar pagina
$pdf->SetFont('Arial','B',16);// tipo de letra
$pdf->Cell(40,10,'bienvenidos,ejemplo de pdf con php');//texto
$pdf->Output();//salida de la impresion



?>