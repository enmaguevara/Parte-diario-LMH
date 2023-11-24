<?php
require_once 'vendor/autoload.php'; // Ajusta la ruta de autoload.php según tu proyecto

// Ruta al archivo de Excel que deseas convertir
$excelFile = 'tu_archivo.xlsx';

// Crea un objeto PHPExcel
$objPHPExcel = PHPExcel_IOFactory::load($excelFile);

// Crea un objeto TCPDF
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// Establece las propiedades del documento PDF
$pdf->SetCreator('Nombre del Creador');
$pdf->SetAuthor('Nombre del Autor');
$pdf->SetTitle('Título del PDF');
$pdf->SetSubject('Asunto del PDF');
$pdf->SetKeywords('Palabras clave del PDF');

// Agrega una página
$pdf->AddPage();

// Agrega contenido del archivo de Excel al PDF
$pdf->writeHTML($objPHPExcel->getActiveSheet()->getHtml());

// Genera el PDF en una ubicación específica o muestra en el navegador
$pdf->Output('tu_archivo.pdf', 'D');

// Limpieza
$pdf->Close();
unset($pdf);
