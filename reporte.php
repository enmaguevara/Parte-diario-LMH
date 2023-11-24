<?php
require('fpdf.php');
class PDF extends FPDF {


    function Header() {
        $this->SetFont('Arial', 'B', 12);
        $this->Cell(0, 5, 'INSTITUTO DE PREVENCION MILITAR', 0, 1, 'C');
        $this->Cell(0, 5, 'LICEO MILITAR DE HONDURAS', 0, 1, 'C');
        $this->Cell(0, 5, 'SAN PEDRO SULA, CORTES', 0, 1, 'C');

        
    }
    function Footer() {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Página ' . $this->PageNo(), 0, 0, 'C');
    }
}


$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 12); 
$pdf->Image('imagenes/IPM-LOGO.png', 10 ,10, 20 );
$pdf->Image('imagenes/lmh-logo.png', 160, 10, 25 );
$pdf->Cell(0, 25, 'ASUNTO: PARTE DEL CUERPO DE ALUMNOS', 0, 1);
$pdf->Cell(0, 5, 'A  L:  RECTOR DEL LMH', 0, 1);
$pdf->Cell(0, 5, 'CORONEL DE ARTILLERIA D.E.N', 0, 1);
$pdf->Cell(0, 5, 'DON RAUL ALEXIS FUENTES BORJAS', 0, 1);
$pdf->Output();



