<?php
    /* Clase fpdf */
    include("./fpdf/fpdf.php");

    class PDF extends FPDF
    {
        // Cabecera de página
        function Header()
        {
            // Logo
            $this->Image('./encabezado.fw.png',10,8,200);
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
    }

    //Conexion a la BD y extraccion de la informacion de nuestro interes
    $conexion = mysqli_connect("localhost","root","","sem2022");
    $sql = "SELECT * FROM alumno WHERE boleta = '2020630001'";
    $res = mysqli_query($conexion,$sql);
    $alumno = mysqli_fetch_row($res);

    $contenidoPDF = "$alumno[0] - $alumno[1] $alumno[2] $alumno[3]";

    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Helvetica','',12);
    for($i=1;$i<=40;$i++){
        $pdf->Cell(0,10,"$contenidoPDF./".$i,0,1);
    }
    $pdf->Output();

?>