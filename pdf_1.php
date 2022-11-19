<?php
include "vendor/autoload.php";

use Fpdf\Fpdf;

$pdf = new Fpdf('P', 'mm', 'A5');
$pdf->AddPage();
$pdf->SetFont('Helvetica', 'I', 25);

$pdf->Cell(40, 10, 'Marcus Calaguas');
$pdf->Ln();
$pdf->Cell(40, 10, 'CCS');
$pdf->Ln();
$pdf->Cell(40, 10, 'marcuzcalaguas@gmail.com');
$pdf->Ln();
$pdf->Cell(40, 10, '20-1094-702');


$pdf->Output();