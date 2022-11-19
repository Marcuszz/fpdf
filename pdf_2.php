<?php
include "vendor/autoload.php";


use Fpdf\Fpdf;

class PDF extends Fpdf
{
    // Page header
    function Header()
    {
        // Logo
        $this->Image('https://www.auf.edu.ph/images/auf-logo.png', 23, 6, 17);
        // Arial bold 15
        $this->SetFont('Arial', 'I', 15);
        // Move to the right
        $this->Cell(50);
        // Title
        $this->Cell(90, 10, 'Angeles University Foundation', 1, 0, 'C');
        // Line break
        $this->Ln(25);
        $this->SetFont('Helvetica', '', 10);
        $this->Cell(10,10,' AUF was incorporated under Republic Act No. 6055, otherwise known as the Foundation Law, and became');
        $this->Ln();
        $this->Cell(10,10,'tax-exempt institution approved by the Philippine government. All donations and bequests given to the AUF are'); 
        $this->Ln();
        $this->Cell(10,10,'tax deductible. On February 14, 1978, AUF was converted to a Catholic University.');
    }
}


$pdf = new PDF();

$pdf->Output();