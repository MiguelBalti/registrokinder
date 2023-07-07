
<?php
 header("Location: https://localhost/pfinal/principal/main.html");

    /* Clase fpdf */
    include("./fpdf/fpdf.php"); 
    require("./phpMailer/class.phpmailer.php");
    include("./phpMailer/class.smtp.php");

    $mes = date("m");
    if($mes=="01")
        $mes="Enero";
    else if($mes=="02")
        $mes="Febrero";
    else if($mes=="03")
        $mes="Marzo";
    else if($mes=="04")
        $mes="Abril";
    else if($mes=="05")
        $mes="Mayo";
    else if($mes=="06")
        $mes="Junio";
    else if($mes=="07")
        $mes="Julio";
    else if($mes=="08")
        $mes="Agosto";
    else if($mes=="09")
        $mes="Septiembre";
    else if($mes=="10")
        $mes="Octubre";
    else if($mes=="11")
        $mes="Noviembre";
    else if($mes=="12")
        $mes="Diciembre";
        
    function GenerarCita($grupo,$folio){
        $conexiongrupos = mysqli_connect("localhost","root","","grupos")or die("<h2>Error Guardando los datos</h2>");
        //Tabla fechas
        $selectfechas = "SELECT * FROM fechas order by id desc limit 1";
        $resultado = mysqli_query($conexiongrupos, $selectfechas);
        $test = mysqli_fetch_row($resultado);
        //Tabla fechasotros
        $selectfechaso = "SELECT * FROM fechasotros order by id desc limit 1";
        $resultadoo = mysqli_query($conexiongrupos, $selectfechaso);
        $testo = mysqli_fetch_row($resultadoo);
        //Numero de filas
        $filaso =  mysqli_num_rows($resultadoo);
        $filas =  mysqli_num_rows($resultado);
        if($grupo == 'LacIyII' &&  $filas == 0 ){
            $dia = 1;
            $horainicio = date('Y-m-d H:i',strtotime(date("Y")."-".date("m")."-".date("d",strtotime("+$dia day"))." 9:00"));
            $horafin = strtotime ( '+2 hour' , strtotime ($horainicio) ) ; 
            $horafin = date('Y-m-d H:i',$horafin);    
            $consulta = "INSERT INTO $grupo(Folio) VALUES('$folio')";
            $consulta2 = "INSERT INTO fechas(Folio,FechaInicio,FechaFin,Grupo,dia) VALUES('$folio','$horainicio','$horafin','$grupo','$dia')";
            mysqli_query($conexiongrupos, $consulta);
            mysqli_query($conexiongrupos, $consulta2);
            mysqli_close($conexiongrupos); 
        }
        else if($grupo == 'LacIyII' &&  $filas > 0 && strtotime($test[2])<strtotime(date("Y")."-".date("m")."-".date("d",strtotime("+$test[5] day"))."12:00")){
            $horainicio = date('Y-m-d H:i',strtotime ($test[2]));
            $horainicio = strtotime ( '+1 hour' , strtotime ($horainicio) ) ; 
            $horainicio = date('Y-m-d H:i',$horainicio); 
            $horafin = strtotime ( '+2 hour' , strtotime ($horainicio) ) ; 
            $horafin = date('Y-m-d H:i',$horafin);    
            $consulta = "INSERT INTO $grupo(Folio) VALUES('$folio')";
            $consulta2 = "INSERT INTO fechas(Folio,FechaInicio,FechaFin,Grupo,dia) VALUES('$folio','$horainicio','$horafin','$grupo','$test[5]')";
            mysqli_query($conexiongrupos, $consulta);
            mysqli_query($conexiongrupos, $consulta2);
            mysqli_close($conexiongrupos); 
        } 
        else if($grupo == 'LacIyII' &&  $filas > 0 && strtotime($test[2])==strtotime(date("Y")."-".date("m")."-".date("d",strtotime("+$test[5] day"))."12:00")){
            $mas =$test[5]+1;
            $horainicio = date('Y-m-d H:i',strtotime(date("Y")."-".date("m")."-".date("d",strtotime("+$mas   day"))." 9:00"));
            $horafin = strtotime ( '+2 hour' , strtotime ($horainicio) ) ; 
            $horafin = date('Y-m-d H:i',$horafin);    
            $consulta = "INSERT INTO $grupo(Folio) VALUES('$folio')";
            $consulta2 = "INSERT INTO fechas(Folio,FechaInicio,FechaFin,Grupo,dia) VALUES('$folio','$horainicio','$horafin','$grupo',$mas)";
            mysqli_query($conexiongrupos, $consulta);
            mysqli_query($conexiongrupos, $consulta2);
            mysqli_close($conexiongrupos); 
        } 


        if($grupo != 'LacIyII' &&  $filaso == 0 ){
            $dia = 1;
            $horainicio = date('Y-m-d H:i',strtotime(date("Y")."-".date("m")."-".date("d",strtotime("+$dia day"))." 9:00"));
            $horafin = strtotime ( '+15 minute' , strtotime ($horainicio) ) ; 
            $horafin = date('Y-m-d H:i',$horafin);    
            $consulta = "INSERT INTO $grupo(Folio) VALUES('$folio')";
            $consulta2 = "INSERT INTO fechasotros(Folio,FechaInicio,FechaFin,Grupo,dia) VALUES('$folio','$horainicio','$horafin','$grupo','$dia')";
            mysqli_query($conexiongrupos, $consulta);
            mysqli_query($conexiongrupos, $consulta2);
            mysqli_close($conexiongrupos); 
        }
        else if($grupo != 'LacIyII' &&  $filaso > 0 && strtotime($testo[2])<strtotime(date("Y")."-".date("m")."-".date("d",strtotime("+$testo[5] day"))."12:45")){
            $horainicio = date('Y-m-d H:i',strtotime ($testo[3]));
            $horafin = strtotime ( '+15 minute' , strtotime ($horainicio) ) ; 
            $horafin = date('Y-m-d H:i',$horafin);    
            $consulta = "INSERT INTO $grupo(Folio) VALUES('$folio')";
            $consulta2 = "INSERT INTO fechasotros(Folio,FechaInicio,FechaFin,Grupo,dia) VALUES('$folio','$horainicio','$horafin','$grupo','$testo[5]')";
            mysqli_query($conexiongrupos, $consulta);
            mysqli_query($conexiongrupos, $consulta2);
            mysqli_close($conexiongrupos); 
        } 
        else if($grupo != 'LacIyII' &&  $filaso > 0 && strtotime($testo[2])==strtotime(date("Y")."-".date("m")."-".date("d",strtotime("+$testo[5] day"))."12:45")){
            $mas =$testo[5]+1;
            $horainicio = date('Y-m-d H:i',strtotime(date("Y")."-".date("m")."-".date("d",strtotime("+$mas   day"))." 9:00"));
            $horafin = strtotime ( '+15 minute' , strtotime ($horainicio) ) ; 
            $horafin = date('Y-m-d H:i',$horafin);    
            $consulta = "INSERT INTO $grupo(Folio) VALUES('$folio')";
            $consulta2 = "INSERT INTO fechasotros(Folio,FechaInicio,FechaFin,Grupo,dia) VALUES('$folio','$horainicio','$horafin','$grupo',$mas)";
            mysqli_query($conexiongrupos, $consulta);
            mysqli_query($conexiongrupos, $consulta2);
            mysqli_close($conexiongrupos); 
        } 
    }
    class PDF extends FPDF    {
        
       
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
        function TablaFolio($folio,$grupo){
                       
            //Cambia el color de la celda
            $this->SetFillColor(224,235,255);
            //Folio
            $this->Cell(125);
            $this->Cell(20,6,"Folio:",1,0,'C');
            $this->Cell(35,6,$folio,1,0,'C','true');       //Folio
            $this->Ln();
            $this->Cell(125);
            //Grupo
            $this->Cell(20,6,"Grupo:",1,0,'C');
            $this->Cell(35,6,$grupo,1,0,'C','true');       //Grupo
            $this->Ln();
        }
        function TablaNino($papellido,$sapellido,$nombres,$dia,$mes,$year,$años,$meses){
            //Cambia el color de la celda
            $this->SetFillColor(224,235,255);
            $this->Ln();
            $this->Cell(5);
            //Valores de Primer apellido, Segundo Apellido y Nombres
            $this->Cell(60,6,$papellido,1,0,'C','true');        //Primer Apellido (niño)       
            $this->Cell(60,6,$sapellido,1,0,'C','true');        //Segundo Apellido (niño)
            $this->Cell(60,6,$nombres,1,0,'C','true');        //Nombres (niño)
            $this->Ln();
            $this->Cell(5);
            $this->Cell(60,6,"Primer Apellido",1,0,'C');
            $this->Cell(60,6,"Segundo Apellido",1,0,'C');
            $this->Cell(60,6,"Nombre(s)",1,0,'C');
            $this->Ln();
            $this->Cell(5);
            //Valores para la fecha de nacimiento, y edad en años y meses 
            $this->Cell(60,6,"Fecha de Nacimiento:",1,0,'C');
            $this->Cell(20,6,utf8_decode("Día"),1,0,'C');
            $this->Cell(20,6,$dia,1,0,'C','true');        //Dia
            $this->Cell(20,6,"Mes",1,0,'C');
            $this->Cell(20,6,$mes,1,0,'C','true');        //Mes
            $this->Cell(20,6,utf8_decode("Año"),1,0,'C');
            $this->Cell(20,6,$year,1,0,'C','true');        //Año
            $this->Ln();
            $this->Cell(5);
            //Valores para la edad y CURP
            $this->Cell(60,6,"Edad:",1,0,'C');  
            $this->Cell(30,6,utf8_decode("Años"),1,0,'C');
            $this->Cell(30,6,$años,1,0,'C','true');        //Años
            $this->Cell(30,6,"Meses",1,0,'C');
            $this->Cell(30,6,$meses,1,0,'C','true');        //Meses
            $this->Ln();
        }
        function TablaDerechohabiente($pape,$sape,$name,$calle,$ne,$ni,$col,$alc,$edo,$cp,$tel,$cel,$cor,$oc,$curp,$pla,$sueldo,$nemp,$ads,$hor,$ext){
            //Cambia el color de la celda
            $this->SetFillColor(224,235,255);
            $this->Ln();
            $this->Cell(5);
            //Valores de Primer apellido, Segundo Apellido y Nombres
            $this->Cell(60,6,$pape,1,0,'C','true');        //Primer apellido (padre)
            $this->Cell(60,6,$sape,1,0,'C','true');        //Segundo Apellido (padre)
            $this->Cell(60,6,$name,1,0,'C','true');        //Nombres (padre)
            $this->Ln();
            $this->Cell(5);
            $this->Cell(60,6,"Primer Apellido",1,0,'C');
            $this->Cell(60,6,"Segundo Apellido",1,0,'C');
            $this->Cell(60,6,"Nombre(s)",1,0,'C');
            $this->Ln();
            //Valores del domicilio particular
            $this->Cell(5);
            $this->Cell(30,6,"Domicilio","LTR",0,'C'); 
            $this->Cell(60,6,$calle,1,0,'C','true');        //Calle 
            $this->Cell(15,6,$ne,1,0,'C','true');        //N. Ext
            $this->Cell(15,6,$ni,1,0,'C','true');        //N. Int
            $this->Cell(60,6,$col,1,0,'C','true');        //Colonia
            $this->Ln();
            $this->Cell(5);
            $this->Cell(30,6,"particular:","LBR",0,'C'); 
            $this->Cell(60,6,"Calle",1,0,'C');
            $this->Cell(15,6,"# Ext",1,0,'C');
            $this->Cell(15,6,"# Int",1,0,'C');
            $this->Cell(60,6,"Colonia",1,0,'C');
            $this->Ln();
            //Estado, y numeros de telefono
            $this->Cell(5);
            $this->Cell(45,6,$alc,1,0,'C','true');        //Alcaldia o Municipio 
            $this->Cell(45,6,$edo,1,0,'C','true');        //Estado
            $this->Cell(20,6,$cp,1,0,'C','true');        //CP
            $this->Cell(35,6,$tel,1,0,'C','true');        //Telefono fijo
            $this->Cell(35,6,$cel,1,0,'C','true');        //Telefono Celular
            $this->Ln();
            $this->Cell(5);
            $this->Cell(45,6,"Alcaldia o Municipio",1,0,'C');
            $this->Cell(45,6,"Entidad Federativa",1,0,'C');
            $this->Cell(20,6,"C.P.",1,0,'C');
            $this->Cell(35,6,"Telefono Fijo",1,0,'C');
            $this->Cell(35,6,"Telefono Celular",1,0,'C');
            $this->Ln();
            //Correo, ocupacion y CURP
            $this->Cell(5);
            $this->Cell(60,6,$cor,1,0,'C','true');        //Correo electronico
            $this->Cell(60,6,$oc,1,0,'C','true');        //Ocupacion
            $this->Cell(60,6,$curp,1,0,'C','true');        //CURP
            $this->Ln();
            $this->Cell(5);
            $this->Cell(60,6,"Correo Electronico",1,0,'C');
            $this->Cell(60,6,"Ocupacion",1,0,'C');
            $this->Cell(60,6,"CURP",1,0,'C');
            $this->Ln();
            //Plaza, sueldo, numero de empleado
            $this->Cell(5);
            $this->Cell(60,6,$pla,1,0,'C','true');        //Plaza
            $this->Cell(60,6,$sueldo,1,0,'C','true');        //Sueldo
            $this->Cell(60,6,$nemp,1,0,'C','true');        //Numero de empleado
            $this->Ln();
            $this->Cell(5);
            $this->Cell(60,6,"Plaza",1,0,'C');
            $this->Cell(60,6,"Sueldo",1,0,'C');
            $this->Cell(60,6,"Numero de Empleado",1,0,'C');
            $this->Ln();
            //Adcripcion
            $this->Cell(5);
            $this->Cell(180,6,$ads,1,0,'C','true');        //Adscripcion
            $this->Ln();
            $this->Cell(5);
            $this->Cell(180,6,"Adscripcion (Secretaria, Coordinacion, Direccion, Centro, Escuela, etc)",1,0,'C');
            $this->Ln();
            //Horario de trabajo y extension
            $this->Cell(5);
            $this->Cell(120,6,$hor,1,0,'C','true');        //Horario de trabajo
            $this->Cell(60,6,$ext,1,0,'C','true');        //Extension
            $this->Ln();
            $this->Cell(5);
            $this->Cell(120,6,"Horario de Trabajo (Ej. PAAE 07:00 - 15:00)",1,0,'C');
            $this->Cell(60,6,"Extension",1,0,'C');
            $this->Ln();
        }
        function TablaConyuge($pap,$sap,$nam,$call,$ne,$ni,$col,$alc,$est,$cpc,$telc,$celc,$dom,$telt,$ext){
            //Cambia el color de la celda
            $this->SetFillColor(224,235,255);
            $this->Ln();
            $this->Cell(5);
            //Valores de Primer apellido, Segundo Apellido y Nombres del conyuge
            $this->Cell(60,6,$pap,1,0,'C','true');        //Primer apellido (conyuge)
            $this->Cell(60,6,$sap,1,0,'C','true');        //Segundo Apellido (conyuge)
            $this->Cell(60,6,$nam,1,0,'C','true');        //Nombres (conyuge)
            $this->Ln();
            $this->Cell(5);
            $this->Cell(60,6,"Primer Apellido",1,0,'C');
            $this->Cell(60,6,"Segundo Apellido",1,0,'C');
            $this->Cell(60,6,"Nombre(s)",1,0,'C');
            $this->Ln();
            //Valores del domicilio particular del conyuge
            $this->Cell(5);
            $this->Cell(30,6,"Domicilio","LTR",0,'C'); 
            $this->Cell(60,6,$call,1,0,'C','true');        //Calle (conyuge)
            $this->Cell(15,6,$ne,1,0,'C','true');        //N. Ext (conyuge)
            $this->Cell(15,6,$ni,1,0,'C','true');        //N. Int (conyuge)
            $this->Cell(60,6,$col,1,0,'C','true');        //Colonia (conyuge)
            $this->Ln();
            $this->Cell(5);
            $this->Cell(30,6,"particular:","LBR",0,'C'); 
            $this->Cell(60,6,"Calle",1,0,'C');
            $this->Cell(15,6,"# Ext",1,0,'C');
            $this->Cell(15,6,"# Int",1,0,'C');
            $this->Cell(60,6,"Colonia",1,0,'C');
            $this->Ln();
            //Estado, y numeros de telefono del conyuge
            $this->Cell(5);
            $this->Cell(45,6,$alc,1,0,'C','true');        //Alcaldia o Municipio (conyuge)
            $this->Cell(45,6,$est,1,0,'C','true');        //Estado (conyuge)
            $this->Cell(20,6,$cpc,1,0,'C','true');        //CP (conyuge)
            $this->Cell(35,6,$telc,1,0,'C','true');        //Telefono fijo (conyuge)
             $this->Cell(35,6,$celc,1,0,'C','true');        //Telefono Celular (conyuge)
            $this->Ln();
            $this->Cell(5);
            $this->Cell(45,6,"Alcaldia o Municipio",1,0,'C');
            $this->Cell(45,6,"Entidad Federativa",1,0,'C');
            $this->Cell(20,6,"C.P.",1,0,'C');
            $this->Cell(35,6,"Telefono Fijo",1,0,'C');
            $this->Cell(35,6,"Telefono Celular",1,0,'C');
            $this->Ln();
            //Domicilio del trabajo 
            $this->Cell(5);
            $this->Cell(60,6,"Domicilio del trabajo ",1,0,'C');
            $this->Cell(120,6,$dom,1,0,'C','true');        //Domicilio del trabajo (conyuge)
            $this->Ln();
            //Telefono celular, del trabajo y religion
            $this->Cell(5);
            $this->Cell(40,6,"Telefono del Trabajo",1,0,'C');
            $this->Cell(50,6,$telt,1,0,'C','true');        //Telefono del trabajo
            $this->Cell(40,6,"Extension",1,0,'C'); 
            $this->Cell(50,6,$ext,1,0,'C','true');     //Extension
            $this->Ln();
        }
        function Fotos0($x,$y,$fo){
            $this->Image('../form/imagenes/'.$fo.'/'.$fo.'0.jpg',$x,$y,25);
        }
        function Fotos1($x,$y,$fo){
            $this->Image('../form/imagenes/'.$fo.'/'.$fo.'1.jpg',$x,$y,25);
        }
        function Fotos2($x,$y,$fo){
            $this->Image('../form/imagenes/'.$fo.'/'.$fo.'2.jpg',$x,$y,25);
        }
        function Fotos3($x,$y,$fo){
            $this->Image('../form/imagenes/'.$fo.'/'.$fo.'3.jpg',$x,$y,25);
        }
    }
    $fol = $_POST['foli'];
    $conexion = mysqli_connect("localhost","root","","form");
    $sql = "SELECT * FROM persona WHERE folio = '$fol'";
    $res = mysqli_query($conexion,$sql);
    $alumno = mysqli_fetch_assoc($res);
    
    $separador = "-";
    $separada = explode($separador,$alumno['fnacim']);
    $separada2 = explode($separador,$alumno['edad']);
   
    $pdf = new PDF();
    
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Helvetica','B',18);
        $pdf->Fotos0(160,25,$alumno['folio']);
        if($alumno['grupo'] == "LacIyII"){
            $pdf->Cell(0,10,'FICHA DE INSCRIPCION',0,1,'C');
        }
        else{
            $pdf->Cell(0,10,'FICHA DE REINSCRIPCION',0,1,'C');
        }
        $pdf->Ln(1);
        $pdf->SetFont('Helvetica','B',12);
        $pdf->Cell(0,10,'Ciclo Escolar '.$alumno['ciclo'],0,1,'C');
        $pdf->Cell(0,10,$alumno['cendi'],0,1,'C');
        //Para la tabla de folio y grupo
        $pdf->SetFont('Helvetica','',11);
        $pdf->TablaFolio($alumno['folio'],$alumno['grupo']);
        //$pdf->TablaFolio();
        $pdf->Ln();
        //Tabla para los datos del infante
        $pdf->SetFont('Helvetica','B',13);
        $pdf->Cell(0,2,'DATOS DEL INFANTE:',0,1,'L');
        $pdf->SetFont('Helvetica','',11);
        $pdf->TablaNino($alumno['papellido'],$alumno['sapellido'],$alumno['nombres'],$separada[2],$separada[1],$separada[0],$separada2[0],$separada2[1]);
        $pdf->Ln();
        //Tabla para los datos del derechohabiente
        $pdf->SetFont('Helvetica','B',13);
        $pdf->Cell(0,2,'DATOS DE EL O LA DERECHOHABIENTE:',0,1,'L');
        $pdf->SetFont('Helvetica','',11);
        $pdf->TablaDerechohabiente($alumno['papellidoda'],$alumno['sapellidoda'],$alumno['nombresda'],$alumno['calle'],$alumno['numerocasaext'],$alumno['numerocasaint'],$alumno['colonia'],$alumno['alcaldia'],$alumno['entife'],$alumno['cp'],$alumno['tel'],$alumno['cel'],$alumno['correo'],$alumno['ocupacion'],$alumno['curp'],$alumno['plazaop'],$alumno['sueldo'],$alumno['nempleado'],$alumno['adscripcion'],$alumno['horario'],$alumno['extension']);
        $pdf->Ln();
        //Tabla para el conyuge
        $pdf->SetFont('Helvetica','B',13);
        $pdf->Cell(0,2,'DATOS DEL CONYUGE:',0,1,'L');
        $pdf->SetFont('Helvetica','',11);
        $pdf->TablaConyuge($alumno['papellidodc'],$alumno['sapellidodc'],$alumno['nombresdc'],$alumno['callec'],$alumno['numerocasaextc'],$alumno['numerocasaintc'],$alumno['coloniac'],$alumno['alcaldiac'],$alumno['entifec'],$alumno['cpc'],$alumno['telc'],$alumno['celc'],$alumno['domtra'],$alumno['teltra'],$alumno['extensionc']);
        $pdf->Ln();
    $pdf->AddPage();
        $pdf->SetFont('Helvetica','B',7);
        $pdf->Cell(0,2,'FOTOGRAFIAS DE EL O LA DERECHOHABIENTE, CONYUGE (PADRE, MADRE) Y LA PERSONA AUTORIZADA PARA RECOGER AL NINO O NINA',0,1,'C');
        $pdf->Fotos1(30,40,$alumno['folio']);
        $pdf->Fotos2(90,40,$alumno['folio']);
        $pdf->Fotos3(150,40,$alumno['folio']);
        //Nombre FEcha y Firma
        $pdf->Ln(45);
        $pdf->SetFont('Helvetica','B',13);
        $pdf->Cell(5);
        $pdf->Cell(60,2,'DERECHOHABIENTE',0,0,'C');
        $pdf->Cell(60,2,'CONYUGE (Padre o Madre)',0,0,'C');
        $pdf->Cell(60,2,'PERSONA AUTORIZADA',0,0,'C');
        $pdf->SetFont('Helvetica','',10);
        $pdf->Ln(30);
        $pdf->Cell(5);
        $pdf->Cell(180,2,'Ciudad de Mexico a '.date("d")." de ".$mes." del ".date("Y"),0,0,'C');
        $pdf->Ln(50);
        $pdf->Line(55,150,155,150);
        $pdf->Cell(5);
        $pdf->Cell(180,2,"Nombre y firma de el o la derechohabiente (firma en color azul)",0,0,'C');
        $pdf->Ln(20);
        $pdf->Cell(5);
        $pdf->SetFont('Helvetica','B',10);
        $conexiongrupos = mysqli_connect("localhost","root","","grupos")or die("<h2>Error Guardando los datos</h2>");
        if($alumno['grupo'] == "LacIyII"){
             //Tabla fechas
            $selectfechas = "SELECT * FROM fechas where Folio='$fol' ";
            $resultado = mysqli_query($conexiongrupos, $selectfechas);
            $filas =  mysqli_num_rows($resultado);
            if($filas == 0){
                GenerarCita($alumno['grupo'],$alumno['folio']);
                $selectfechas = "SELECT * FROM fechas where Folio='$fol'";
                $resultado = mysqli_query($conexiongrupos, $selectfechas);
            }
            $test = mysqli_fetch_row($resultado);
            $pdf->Cell(180,3,utf8_decode("Se deberá presentar el día ".$test[2][8].$test[2][9].$test[2][7].$test[2][5].$test[2][6].$test[2][4].$test[2][2].$test[2][3]." en un horario de ".$test[2][11].$test[2][12].$test[2][13].$test[2][14].$test[2][15]." a ".$test[3][11].$test[3][12].$test[3][13].$test[3][14].$test[3][15]." hrs. a la entrevista"),0,0,'C');
        }
        else{ 
            //tabla fechasotros
            $selectfechaso = "SELECT * FROM fechasotros where Folio = '$fol'";
            $resultadoo = mysqli_query($conexiongrupos, $selectfechaso);
            $filaso =  mysqli_num_rows($resultadoo);
            if($filaso == 0){
                GenerarCita($alumno['grupo'],$alumno['folio']);
                $selectfechaso = "SELECT * FROM fechasotros where Folio = '$fol'";
                $resultadoo = mysqli_query($conexiongrupos, $selectfechaso);
            }
            $testo = mysqli_fetch_row($resultadoo);
            $pdf->Cell(180,3,utf8_decode("Se deberá presentar el día ".$testo[2][8].$testo[2][9].$testo[2][7].$testo[2][5].$testo[2][6].$testo[2][4].$testo[2][2].$testo[2][3]." en un horario de ".$testo[2][11].$testo[2][12].$testo[2][13].$testo[2][14].$testo[2][15]." a ".$testo[3][11].$testo[3][12].$testo[3][13].$testo[3][14].$testo[3][15]." hrs. a entregar los documentos correspondientes"),0,0,'C');
        }
    $pdf->Output();
    $nombrepdf = "./PDFs/".$fol.".pdf";
    $adjunto =  $pdf->Output($nombrepdf,'D');
    $email_user = "web4cm5.mamj@gmail.com"; //OJO. Debes actualizar esta línea con tu información
    $email_password = "lolmxzraxdipcnog"; //OJO. Debes actualizar esta línea con tu información
    
    if($alumno['grupo'] == 'LacIyII'){
        $the_subject = "Ficha de Inscripcion";
    }
    else{
        $the_subject = "Ficha de Reinscricpion";
    }
    $address_to = $alumno['correo']; //OJO. Debes actualizar esta línea con tu información
    $from_name = $alumno['cendi'];
    $phpmailer = new PHPMailer();

    // ---------- datos de la cuenta de Gmail -------------------------------
    $phpmailer->Username = $email_user;
    $phpmailer->Password = $email_password;    
    //-----------------------------------------------------------------------
    // $phpmailer->SMTPDebug = 1;
    $phpmailer->SMTPSecure = 'ssl';
    $phpmailer->IsSMTP(); // use SMTP
    $phpmailer->Host = "smtp.gmail.com"; // GMail
    $phpmailer->Port = '465';
    $phpmailer->SMTPAuth = true;
    $phpmailer->setFrom($phpmailer->Username,$from_name);
    $phpmailer->AddAddress($address_to); // recipients email
    $phpmailer->WordWrap = 50;
    $phpmailer->IsHTML(true);
    $phpmailer->addStringAttachment($adjunto, $fol.'.pdf');
    $phpmailer->Subject = $the_subject;	
    $phpmailer->Body .="<h2 style='color:#3498db;'>Ficha para entregar</h2>";
    $phpmailer->Body .= "<p>Favor de llevar impreso el archivo PDF adjunto en la fecha y hora senalados dentro del mismo documento.</p>";
    $phpmailer->Body .= "<p>El documento debera estar firmado por el derechohabiente con tinta azul.</p>";
    $phpmailer->Send();

    
?>