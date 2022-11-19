<?php
require "vendor/autoload.php";
use Fpdf\Fpdf;

$pdf = new Fpdf('p', 'mm', 'A4');



$pdf->AddPage();
$pdf->SetFont('helvetica','B',15);
$pdf->Write(10,'Religion, ideology, resources, land, spite, love or just because no matter how pathetic the reason, it’s enough to start war. War will never cease to exist… reasons can be thought up after the fact. Human nature pursues strife.');
$pdf->Ln();
$pdf->SetFont('courier','',15);
$pdf->Write(10,'-Pain (Naruto Shippuden)');
$pdf->Ln(20);



$pdf->SetFont('times','',15);
$pdf->Write(10,'The world isn’t perfect. But it’s there for us, doing the best it can… that’s what makes it so damn beautiful.');
$pdf->Ln();
$pdf->SetFont('symbol','',15);
$pdf->Write(10,'-Roy Mustang (Full Metal Alchemist)');
$pdf->Ln();


$pdf->Output();
?>