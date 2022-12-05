<?php
$nombre=$_POST['nombre'];
require('./FPDF/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'El Nombre que se escribira en la luna es: '.$nombre);
$pdf->Output();
?>