
<?php

    /* Clase fpdf */
    include("./fpdf/fpdf.php"); 
    

    class PDF extends FPDF
    {
        
       
        // Cabecera de página
        function Header()
        {
            // Logo
            $this->Image('./Encabezado.png',15,6,185);
            $this->Ln(20);
        }

        // Pie de página
        function Footer()
        {
            // Posición: a 1.5 cm del final
            $this->SetY(-15);
            // Arial italic 8
            $this->SetFont('Arial','I',8);
            // Número de página
            $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
        }
        function TablaFecha(){
                       
            $this->Ln();
            //Cambia el color de la celda
            $this->SetFillColor(224,235,255);
            //Folio
            $this->Cell(125);
            $this->Cell(20,6,"Fecha:",1,0,'C');
            $this->Cell(35,6,date('d/m/Y'),1,0,'C','true'); 
                //Folio
            $this->Ln();
            $this->Ln();
            $this->Ln();
            $this->Ln();
            $this->Cell(125);
            
        }
        function TablaNino($nombre,$edad,$genero){
            //Cambia el color de la celda
            $this->SetFillColor(224,235,255);
            $this->Ln();
            $this->Cell(5);
            //Valores de Primer apellido, Segundo Apellido y Nombres
            
            $this->Cell(180,6,utf8_decode("Nombre del niño"),1,0,'C');           
            $this->Ln();
            $this->Cell(5);
            $this->Cell(180,6,$nombre,1,0,'C','true');        //Primer Apellido (niño)       
            $this->Ln();
            $this->Cell(5);
            //Valores para la fecha de nacimiento, y edad en años y meses 
            $this->Cell(45,6,"Edad:",1,0,'C');           
            $this->Cell(45,6,$edad,1,0,'C','true');   
            $this->Cell(45,6,"Genero:",1,0,'C');           
            $this->Cell(45,6,$genero,1,0,'C','true');                
            $this->Ln();
            $this->Ln(); 
            $this->Ln();
            $this->Ln();       
        }

        function Tablapadre($nombre,$correo,$phone){
            //Cambia el color de la celda
            $this->SetFillColor(224,235,255);
            $this->Ln();
            $this->Cell(5);

            //Valores de Nombre        
            $this->Cell(180,6,"Nombre del padre",1,0,'C');           
            $this->Ln();
            $this->Cell(5);
            $this->Cell(180,6,$nombre,1,0,'C','true');        //Primer Apellido (niño)       
            $this->Ln();
            $this->Cell(5);
            //Valores para la fecha de nacimiento, y edad en años y meses 
            $this->Cell(45,6,"Correo:",1,0,'C');           
            $this->Cell(45,6,$correo,1,0,'C','true');   
            $this->Cell(45,6,"Telefono:",1,0,'C');           
            $this->Cell(45,6,$phone,1,0,'C','true');                
            $this->Ln();
            $this->Cell(5);
            
        }
    }
    $fol = 'migh123';
    $var = "migh123";
    //'Bagel'

    $conexion = mysqli_connect("localhost","root","","registro");
    $sql = "SELECT * FROM persona WHERE usuario = $var ";
    $res = mysqli_query($conexion,$sql);
    $nino = mysqli_fetch_assoc($res);
    
       
    $pdf = new PDF();
    
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Helvetica','B',20);
        
        $pdf->Cell(0,10,'PICTEA',0,1,'C');
        $pdf->Ln(1);
       
        //Tabla fecha
        $pdf->SetFont('Helvetica','',11);
        $pdf->TablaFecha();
        $pdf->Ln();
        
        //Tabla para los datos del infante
        $pdf->SetFont('Helvetica','B',13);
        $pdf->Cell(0,2,'DATOS DEL INFANTE:',0,1,'L');
        $pdf->SetFont('Helvetica','',11);
        $pdf->TablaNino($nino['namen'],$nino['age'],$nino['genero']);
        $pdf->Ln();
        
        //Tabla para el padre
        $pdf->SetFont('Helvetica','B',13);
        $pdf->Cell(0,2,'DATOS DEL PADRE:',0,1,'L');
        $pdf->SetFont('Helvetica','',11);
        $pdf->Tablapadre($nino['namep'],$nino['mail'],$nino['num']);
        $pdf->Ln();
        /*
        //Tabla para el usuario y contraseña
        $pdf->SetFont('Helvetica','B',13);
        $pdf->Cell(0,2,'DATOS DEL CONYUGE:',0,1,'L');
        $pdf->SetFont('Helvetica','',11);
        $pdf->TablaConyuge($alumno['papellidodc'],$alumno['sapellidodc'],$alumno['nombresdc'],$alumno['callec'],$alumno['numerocasaextc'],$alumno['numerocasaintc'],$alumno['coloniac'],$alumno['alcaldiac'],$alumno['entifec'],$alumno['cpc'],$alumno['telc'],$alumno['celc'],$alumno['domtra'],$alumno['teltra'],$alumno['extensionc']);
        $pdf->Ln();*/
    
        
       
    $nombrepdf = $nino['usuario'].".pdf";
    // $pdf->Output($nombrepdf,'D');
    $pdf->Output();
    

?>