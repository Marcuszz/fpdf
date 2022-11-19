<?php
include "vendor/autoload.php";

use Fpdf\Fpdf;

class PDF extends FPDF
{
function Header()
{
    global $title;

    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Calculate width of title and position
    $w = $this->GetStringWidth($title)+6;
    $this->SetX((210-$w)/2);
    // Colors of frame, background and text
    $this->SetDrawColor(100,180,280);
    $this->SetFillColor(180,130,100);
    $this->SetTextColor(120,150,150);
    // Thickness of frame (1 mm)
    $this->SetLineWidth(1);
    // Title
    $this->Cell($w,9,$title,1,1,'C',true);
    // Line break
    $this->Ln(10);
}

// function Footer()
// {
//     // Position at 1.5 cm from bottom
//     $this->SetY(-15);
//     // Arial italic 8
//     $this->SetFont('Arial','I',8);
//     // Text color in gray
//     $this->SetTextColor(128);
//     // Page number
//     $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
// }

function ChapterTitle($num, $label)
{
    // Arial 12
    $this->SetFont('Arial','',12);
    // Background color
    $this->SetFillColor(140,120,155);
    // Title
    $this->Cell(0,6,"Chapter $num : $label",0,1,'L',true);
    // Line break
    $this->Ln(4);
}

function ChapterBody($file)
{
    // Read text file
    $txt = file_get_contents($file);
    // Times 12
    $this->SetFont('Times','',12);
    // Output justified text
    $this->MultiCell(0,5,$txt);
    // Line break
    $this->Ln();
    // Mention in italics
    $this->SetFont('','I');
    $this->Cell(0,5,'(end of excerpt)');
}

function PrintChapter($num, $title, $file)
{
    $this->AddPage();
    $this->ChapterTitle($num,$title);
    $this->ChapterBody($file);
}
}

$pdf = new PDF();
$title = 'Florante at Laura';
$pdf->SetTitle($title);
$pdf->SetAuthor('Francisco Balagtas');
$pdf->PrintChapter(1,'Kay Selia','mm1.txt');
$pdf->PrintChapter(2,'Sa Babasa Nito','mm2.txt');
$pdf->PrintChapter(3,'Pambungad na Tagpuan','mm3.txt');
$pdf->PrintChapter(4,'Ang Reynong Albanya','mm4.txt');
$pdf->PrintChapter(5,'Pighati ng Nagmamahal','mm5.txt');
$pdf->Output();
?>