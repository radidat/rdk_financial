<?php
require './fpdf/fpdf.php';

class PDF extends FPDF{ 

          
    public function __construct(){


    }

    public function new_pdf_location( array $data){
        
        $this->SetFont('Arial','B',16);
        $this->Cell(30,10,'Hello '.$data[0]['nom'],1,0,'C');

    }

}



