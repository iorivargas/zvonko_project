<?php

require('fpdf183/fpdf.php');

    $Clientes = simplexml_load_file("Clientes.xml");        
    $pdf=new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $pdf->MultiCell(40,10,'
    Prueba:
    ');
    $pdf->Output();