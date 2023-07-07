<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./materialize/css/materialize.css" rel="stylesheet" />
    <script language="Javascript" src="js/jquery-3.6.0.js"></script>
    <script language="Javascript" src="./materialize/js/materialize.js"></script>
    <script language="Javascript" src="js/form.js"></script>
    <link href="./estilos.css" rel="stylesheet" type="text/css"> 
      
    
    <title>.:: Formulario ::. </title>
</head>
<body> 
  
  <a class="botonsin" href="javascript: history.go(-1)">Regresar</a>
  <a class="botonsin" href="../principal/main.html">Inicio</a>
  
  <div class="form-style">
    <div class="row">
      
      <form class="col s12"  id="formulario">  
      <div id="frm">
        <h1>FICHA DE INSCRIPCION/REINSCRIPCION</h1> 
        <br>
    
        <div class="row">
          <div class="input-field col s12">
            <select name="ciclo" id="ciclo" enabled onChange="javascript:ci();" required>
              <option value=""disabled selected>CICLO</option>
              <option value="2022-2023">2022-2023</option>
            </select>
            <label for="ciclo">CICLO</label>
          </div>
          
          <div class="input-field col s12">
            <select name="cendi" id="cendi" enabled onChange="javascript:cdi();" required>
              <option value=""disabled selected>CENDI</option>
              <option value="CENDI Amalia Solorzano de Cardenas">CENDI "Amalia Solórzano de Cárdenas"</option>
              <option value="cendib" disabled="disabled">CENDI "Clementina Batalla de Bassols"</option>
              <option value="cendic" disabled="disabled">CENDI "Eva Sámano de López Mateos"</option>
              <option value="cendid" disabled="disabled">CENDI "Laura Pérez de Bátiz"</option>
              <option value="cendie" disabled="disabled">CENDI "Margarita Salazar de Erro"</option>
            </select>
            <label for="cendi">CENDI</label>
          </div>         
  
          <div class="input-field col s12">
            <input id="folio" name="folio" type="text" class="validate" onChange="javascript:fo();" required>
            <label for="folio">Folio(boleta):</label>
            <br />
            <div id="parrafos">
            
            </div>
          </div>
         
          
          <?php
        $conexiongrupos = mysqli_connect("localhost","root","","grupos")or die("<h2>Error Guardando los datos</h2>");
      ?> 
        <div class="input-field col s12">
          <select name="grupo" id="grupo" enabled onChange="javascript:grp();" required>
            <option value=""disabled selected>Grupo</option>

            <?php
            $selectfechas = "SELECT * FROM laciyii";
            $resultado = mysqli_query($conexiongrupos, $selectfechas);
            $filas =  mysqli_num_rows($resultado);
            if($filas < 10): ?>
                <option value="LacIyII">Lac I-II</option>
            <?php else: ?>
                <option value="LACI-II" disabled>Lac I-II</option>
            <?php endif; ?>

            <?php
            $selectfechas = "SELECT * FROM laciiiymati";
            $resultado = mysqli_query($conexiongrupos, $selectfechas);
            $filas =  mysqli_num_rows($resultado);
            if($filas < 10): ?>
                <option value="LacIIIyMatI">Lac III - Mat I</option>
            <?php else: ?>
                <option value="LacIIIyMatI" disabled>Lac III - Mat I</option>
            <?php endif; ?>

            <?php
            $selectfechas = "SELECT * FROM matiia";
            $resultado = mysqli_query($conexiongrupos, $selectfechas);
            $filas =  mysqli_num_rows($resultado);
            if($filas < 12): ?>
                <option value="MatIIA">Mat IIA</option>
            <?php else: ?>
                <option value="MatIIA" disabled>Mat IIA</option>
            <?php endif; ?>

            <?php
            $selectfechas = "SELECT * FROM matiib";
            $resultado = mysqli_query($conexiongrupos, $selectfechas);
            $filas =  mysqli_num_rows($resultado);
            if($filas < 12): ?>
                <option value="MatIIB">Mat IIB</option>
            <?php else: ?>
                <option value="MatIIB" disabled>Mat IIB</option>
            <?php endif; ?>
            
            <?php
            $selectfechas = "SELECT * FROM pia";
            $resultado = mysqli_query($conexiongrupos, $selectfechas);
            $filas =  mysqli_num_rows($resultado);
            if($filas < 15): ?>
                <option value="PIA">PIA</option>
            <?php else: ?>
                <option value="PIA" disabled>PIA</option>
            <?php endif; ?>

            <?php
            $selectfechas = "SELECT * FROM pib";
            $resultado = mysqli_query($conexiongrupos, $selectfechas);
            $filas =  mysqli_num_rows($resultado);
            if($filas < 15): ?>
                <option value="PIB">PIB</option>
            <?php else: ?>
                <option value="PIB" disabled>PIB</option>
            <?php endif; ?>

            <?php
            $selectfechas = "SELECT * FROM piia";
            $resultado = mysqli_query($conexiongrupos, $selectfechas);
            $filas =  mysqli_num_rows($resultado);
            if($filas < 15): ?>
                <option value="PIIA">PIIA</option>
            <?php else: ?>
                <option value="PIIA" disabled>PIIA</option>
            <?php endif; ?>

            <?php
            $selectfechas = "SELECT * FROM piib";
            $resultado = mysqli_query($conexiongrupos, $selectfechas);
            $filas =  mysqli_num_rows($resultado);
            if($filas < 15): ?>
                <option value="PIIB">PIIB</option>
            <?php else: ?>
                <option value="PIIB" disabled>PIIB</option>
            <?php endif; ?>
            
            <?php
            $selectfechas = "SELECT * FROM piiia";
            $resultado = mysqli_query($conexiongrupos, $selectfechas);
            $filas =  mysqli_num_rows($resultado);
            if($filas < 15): ?>
                <option value="PIIIA">PIIIA</option>
            <?php else: ?>
                <option value="PIIIA" disabled>PIIIA</option>
            <?php endif; ?>

            <?php
            $selectfechas = "SELECT * FROM piiib";
            $resultado = mysqli_query($conexiongrupos, $selectfechas);
            $filas =  mysqli_num_rows($resultado);
            if($filas < 15): ?>
                <option value="PIIIB">PIIIB</option>
            <?php else: ?>
                <option value="PIIIB" disabled>PIIIB</option>
            <?php endif;
            mysqli_close($conexiongrupos); ?>
          </select>
          <label for="grupo">Grupo</label>
        </div>
      </div>        
        
          
        <legend>DATOS DEL NIÑO O DE LA NIÑA</legend>   
        <div class="row">
          <div class="input-field col s6">
            <input placeholder="Primer apellido" name="papellido" id="papellido" type="text" class="validate"  onChange="javascript:pape();" required>
            <label for="papellido">Primer Apellido</label>
          </div>
          <div class="input-field col s6">
            <input placeholder="Segundo apellido" name="sapellido" id="sapellido" type="text" class="validate" onChange="javascript:sap();" required>
            <label for="sapellido">Segundo Apellido</label>
          </div>
          <div class="input-field col s12">
            <input placeholder="Nombre(s)" name="nombres" id="nombres" type="text" class="validate" onChange="javascript:nms();" required>
            <label for="nombres">Nombre(s)</label>
          </div>
          <div class="input-field col s6">
            <input placeholder="Fecha de nacimiento" id="fnacim" name="fnacim" type="date" class="validate"  onChange="javascript:Edad();javascript:fnm()" required>
            <label for="fnacim">Fecha de nacimiento</label>
          </div>
          <div class="input-field col s6">
            <input placeholder="Edad" name="edad" id="edad" type="text" class="validate" onChange="javascript:gt();" required>
            <label for="edad">Edad</label>
          </div>
  
        </div>
      
      <br>
      
        <legend>DATOS DEL O LA DERECHOHABIENTE: </legend> 
        <div class="row">
          <div class="input-field col s6">
            <input placeholder="Primer apellido" name="papellidoda" id="papellidoda" type="text" class="validate" onChange="javascript:paped();" required>
            <label for="papellidoda">Primer Apellido</label>
          </div>
          <div class="input-field col s6">
            <input placeholder="Segundo apellido" name="sapellidoda" id="sapellidoda" type="text" class="validate" onChange="javascript:saped();" required>
            <label for="sapellidoda">Segundo Apellido</label>
          </div>
          <div class="input-field col s12">
            <input placeholder="Nombre(s)" name="nombresda" id="nombresda" type="text" class="validate" onChange="javascript:nmsd();" required>
            <label for="nombresda">Nombre(s)</label>
          </div>
          <p>Domicilio Particular</p>
          <div class="input-field col s6">
            <input placeholder="Calle" name="calle" id="calle" type="text" class="validate" onChange="javascript:str();" required>
            <label for="calle">Calle</label>
          </div>
          <div class="input-field col s3">
            <input placeholder="Numero Ext" name="numerocasaext" id="numerocasaext" type="number" class="validate" onChange="javascript:nomex();" required>
            <label for="numerocasaext">Numero</label>
          </div>
          <div class="input-field col s3">
            <input placeholder="Numero Int" name="numerocasaint" id="numerocasaint" type="number" class="validate" onChange="javascript:nomint();" required>
            <label for="numerocasaint">Numero</label>
          </div>
          <div class="input-field col s6">
            <input placeholder="Colonia" name="colonia" id="colonia" type="text" class="validate" onChange="javascript:cln();" required>
            <label for="colonia">Colonia</label>
          </div>
          <div class="input-field col s6">
            <input placeholder="Alcaldia o municipio" name="alcaldia" id="alcaldia" type="text" class="validate" onChange="javascript:mnc();" required>
            <label for="alcaldia">Alcaldia o municipio</label>
          </div>
          
          <div class="input-field col s6">         
            <select name="entife" id="entife" enabled onChange="javascript:fed();" required>
              <option value=""disabled selected>Entidad Federativa</option>
              <option value="Aguascalientes">Aguascalientes</option>
              <option value="Baja California">Baja California</option>
              <option value="Baja California Sur">Baja California Sur</option>
              <option value="Campeche">Campeche</option>
              <option value="Chiapas">Chiapas</option>
              <option value="Chihuahua">Chihuahua</option>
              <option value="Ciudad de Mexico">Ciudad de México</option>
              <option value="Coahuila">Coahuila</option>
              <option value="Colima">Colima</option>
              <option value="Durango">Durango</option>
              <option value="Estado de Mexico">Estado de México</option>
              <option value="Guanajuato">Guanajuato</option>
              <option value="Guerrero">Guerrero</option>
              <option value="Hidalgo">Hidalgo</option>
              <option value="Jalisco">Jalisco</option>
              <option value="Michoacán">Michoacán</option>
              <option value="Morelos">Morelos</option>
              <option value="Nayarit">Nayarit</option>
              <option value="Nuevo Leon">Nuevo León</option>
              <option value="Oaxaca">Oaxaca</option>
              <option value="Puebla">Puebla</option>
              <option value="Queretaro">Querétaro</option>
              <option value="Quintana Roo">Quintana Roo</option>
              <option value="San Luis Potosí">San Luis Potosí</option>
              <option value="Sinaloa">Sinaloa</option>
              <option value="Sonora">Sonora</option>
              <option value="Tabasco">Tabasco</option>
              <option value="Tamaulipas">Tamaulipas</option>
              <option value="Tlaxcala">Tlaxcala</option>
              <option value="Veracruz">Veracruz</option>
              <option value="Yucatan">Yucatán</option>
              <option value="Zacatecas">Zacatecas</option>
            </select>
            <label for="entife">Entidad Federativa</label>
          </div>
          <div class="input-field col s6">
            <input placeholder="C.P" name="cp" id="cp" type="number" class="validate" onChange="javascript:postal();" required>
            <label for="cp">C.P</label>
          </div>
          <div class="input-field col s6">
            <input placeholder="Telefono fijo" name="tel" id="tel" type="tel" class="validate" onChange="javascript:fij();" required>
            <label for="tel">Telefono fijo</label>
          </div>
          <div class="input-field col s6">
            <input placeholder="Telefono celular" name="cel" id="cel" type="tel" class="validate" onChange="javascript:ncl();" required>
            <label for="cel">Telefono celular</label>
          </div>
          <div class="input-field col s6">
            <input placeholder="Correo Electronico" name="correo" id="correo" type="email" class="validate" onChange="javascript:cro();" required>
            <label for="correo">Correo Electronico</label>
          </div>
          <div class="input-field col s6">
            <select name="ocupacion" id="ocupacion" enabled onChange="javascript:pac();" required>
              <option value=""disabled selected>Ocupacion</option>
              <option value="Docente">Docente</option>
              <option value="PAAE">PAAE</option>
              <option value="Funcionario">Funcionario</option>
            </select>
            <label for="ocupacion">Ocupacion</label>
          </div>
  
          <div class="input-field col s6">
            <input placeholder="CURP" name="curp" id="curp" type="text" class="validate" onChange="javascript:rup();" required>
            <label for="curp">CURP</label>
            <br />
            <div id="parrafos1">
            
            </div>
          </div>
          <div class="input-field col s6">
            <input placeholder="Plaza o Puesto" name="plazaop" id="plazaop" type="text" class="validate" onChange="javascript:pue();" required>
            <label for="plazaop">Nombre de la Plaza o Puesto</label>
          </div>
          <div class="input-field col s6">
            <input placeholder="Sueldo Mensual" name="sueldo" id="sueldo" type="number" class="validate" onChange="javascript:sme();" required>
            <label for="sueldo">Sueldo Mensual</label>
          </div>
          <div class="input-field col s6">
            <input placeholder="Numero de Empleado" name="nempleado" id="nempleado" type="number" class="validate" onChange="javascript:nld();" required>
            <label for="nempleado">Numero de Empleado</label>
          </div>
          <div class="input-field col s6">
            <select name="adscripcion" id="adscripcion" enabled onChange="javascript:dsr();" required>
              <option value=""disabled selected>Adscripcion</option>
              <option value="CECyT 1">CECyT 1</option>
              <option value="CECyT 2">CECyT 2</option>
              <option value="CECyT 3">CECyT 3</option>
              <option value="CECyT 4">CECyT 4</option>
              <option value="CECyT 5">CECyT 5</option>
              <option value="CECyT 6">CECyT 6</option>
              <option value="CECyT 7">CECyT 7</option>
              <option value="CECyT 8">CECyT 8</option>
              <option value="CECyT 9">CECyT 9</option>
              <option value="CECyT 10">CECyT 10</option>
              <option value="CECyT 11">CECyT 11</option>
              <option value="CECyT 12">CECyT 12</option>
              <option value="CECyT 13">CECyT 13</option>
              <option value="CECyT 14">CECyT 14</option>
              <option value="CECyT 15">CECyT 15</option>
              <option value="CECyT 16">CECyT 16</option>
              <option value="CECyT 17">CECyT 17</option>
              <option value="CECyT 18">CECyT 18</option>
              <option value="CECyT 19">CECyT 19</option>
              <option value="Cet 1">Cet 1</option>
              <option value="CICS UST">CICS UST</option>
              <option value="CICS UMA">CICS UMA</option>
              <option value="ENBA">ENBA</option>
              <option value="ENCB">ENCB</option>
              <option value="ENMyH">ENMyH</option>
              <option value="ESCA UST">ESCA UST</option>
              <option value="ESCA UT">ESCA UT</option>
              <option value="ESCOM">ESCOM</option>
              <option value="ESE">ESE</option>
              <option value="ESEO">ESEO</option>
              <option value="ESFM">ESFM</option>
              <option value="ESIME UZ">ESIME UZ</option>
              <option value="ESIME UA">ESIME UA</option>
              <option value="ESIME UC">ESIME UC</option>
              <option value="ESIME UT">ESIME UT</option>
              <option value="ESIQIE">ESIQIE</option>
              <option value="ESIT">ESIT</option>
              <option value="ESIA Tecamachalco">ESIA Tecamachalco</option>
              <option value="ESIA Ticoman">ESIA Ticoman</option>
              <option value="ESIA Azcapotzalco">ESIA Azcapotzalco</option>
              <option value="ESM">ESM</option>
              <option value="EST">EST</option>
              <option value="UPIIC">UPIIC</option>
              <option value="UPIBI">UPIBI</option>
              <option value="UPIIG">UPIIG</option>
              <option value="UPIIZ">UPIIZ</option>
              <option value="UPIIH">UPIIH</option>
              <option value="UPIIP">UPIIP</option>
              <option value="UPIIT">UPIIT</option>
              <option value="UPIICSA">UPIICSA</option>
              <option value="UPIITA">UPIITA</option>
              <option value="UPIEM">UPIEM</option>
              <option value="Area Central">Area Central</option>
            </select>
            <label for="adscripcion">Adscripcion</label>
          </div>
          <div class="input-field col s6">          
            <select name="horario" id="horario" enabled onChange="javascript:hrt();" required>
              <option value=""disabled selected>Horario de Trabajo</option>
              <option value="7:00 a 15:00">7:00 a 15:00</option>
              <option value="8:00 a 15:00">8:00 a 15:00</option>
              <option value="7:00 a 14:00">7:00 a 14:00</option>
              </select>
            <label for="horario">Horario de Trabajo</label>
          </div>
          <div class="input-field col s12">
            <input placeholder="Extension" name="extension" id="extension" type="text" class="validate" onChange="javascript:eci();" required>
            <label for="extension">Extension</label>
          </div>  
          <div class="input-field col s6">
            <label>Tiene cónyuge</label><br><br>
            <input class="botonsc" type="button" onclick="mostrarFormulario()" value="Si"/>
            <input class="botonsc" type="button" onclick="ocultarFormulario()" value="No"/>
          </div>  
        </div>
      
        
        <div class="row" id="formu" style="display: none;">
          <legend>DATOS DEL CÓNYUGE: </legend> 
          <div class="input-field col s6">
            <input placeholder="Primer apellido" name="papellidodc" id="papellidodc" type="text" class="validate" onChange="javascript:papedc();">
            <label for="papellidodc">Primer Apellido</label>
          </div>
          <div class="input-field col s6">
            <input placeholder="Segundo apellido" name="sapellidodc" id="sapellidodc" type="text" class="validate" onChange="javascript:sapedc();">
            <label for="sapellidodc">Segundo Apellido</label>
          </div>
          <div class="input-field col s12">
            <input placeholder="Nombre(s)" name="nombresdc" id="nombresdc" type="text" class="validate" onChange="javascript:nmsdc();">
            <label for="nombresdc">Nombre(s)</label>
          </div>
          <p>Domicilio Particular</p>
          <div class="input-field col s6">
            <input placeholder="Calle" name="callec" id="callec" type="text" class="validate" onChange="javascript:strc();">
            <label for="callec">Calle</label>
          </div>
          <div class="input-field col s3">
            <input placeholder="Numero Ext" name="numerocasaextc" id="numerocasaextc" type="number" class="validate" onChange="javascript:nomexc();">
            <label for="numerocasaextc">Numero Exterior</label>
          </div>
          <div class="input-field col s3">
            <input placeholder="Numero Int" name="numerocasaintc" id="numerocasaintc" type="number" class="validate" onChange="javascript:nomintc();">
            <label for="numerocasaintc">Numero Interior</label>
          </div>
          <div class="input-field col s6">
            <input placeholder="Colonia" name="coloniac" id="coloniac" type="text" class="validate" onChange="javascript:clnc();">
            <label for="coloniac">Colonia</label>
          </div>
          <div class="input-field col s6">
            <input placeholder="Alcaldia o municipio" name="alcaldiac" id="alcaldiac" type="text" class="validate" onChange="javascript:mncc();">
            <label for="alcaldiac">Alcaldia o municipio</label>
          </div>
        
          <div class="input-field col s6">          
            <select name="entifec" id="entifec" enabled onChange="javascript:fedc();">
              <option value=""disabled selected>Entidad Federativa</option>
              <option value="Aguascalientes">Aguascalientes</option>
              <option value="Baja California">Baja California</option>
              <option value="Baja California Sur">Baja California Sur</option>
              <option value="Campeche">Campeche</option>
              <option value="Chiapas">Chiapas</option>
              <option value="Chihuahua">Chihuahua</option>
              <option value="Ciudad de Mexico">Ciudad de México</option>
              <option value="Coahuila">Coahuila</option>
              <option value="Colima">Colima</option>
              <option value="Durango">Durango</option>
              <option value="Estado de Mexico">Estado de México</option>
              <option value="Guanajuato">Guanajuato</option>
              <option value="Guerrero">Guerrero</option>
              <option value="Hidalgo">Hidalgo</option>
              <option value="Jalisco">Jalisco</option>
              <option value="Michoacan">Michoacán</option>
              <option value="Morelos">Morelos</option>
              <option value="Nayarit">Nayarit</option>
              <option value="Nuevo Leon">Nuevo León</option>
              <option value="Oaxaca">Oaxaca</option>
              <option value="Puebla">Puebla</option>
              <option value="Querétaro">Querétaro</option>
              <option value="Quintana Roo">Quintana Roo</option>
              <option value="San Luis Potosí">San Luis Potosí</option>
              <option value="Sinaloa">Sinaloa</option>
              <option value="Sonora">Sonora</option>
              <option value="Tabasco">Tabasco</option>
              <option value="Tamaulipas">Tamaulipas</option>
              <option value="Tlaxcala">Tlaxcala</option>
              <option value="Veracruz">Veracruz</option>
              <option value="Yucatan">Yucatán</option>
              <option value="Zacatecas">Zacatecas</option>
            </select>
            <label for="entifec">Entidad Federativa</label>
          </div>
          <div class="input-field col s6">
            <input placeholder="C.P" name="cpc" id="cpc" type="number" class="validate" onChange="javascript:postalc();">
            <label for="cpc">C.P</label>
          </div>
          <div class="input-field col s6">
            <input placeholder="Telefono fijo" name="telc" id="telc" type="number" class="validate" onChange="javascript:fijc();">
            <label for="telc">Telefono fijo</label>
          </div>
          <div class="input-field col s6">
            <input placeholder="Telefono celular" name="celc" id="celc" type="number" class="validate" onChange="javascript:nclc();">
            <label for="celc">Telefono celular</label>
          </div>
          <div class="input-field col s12">
            <input placeholder="Lugar de Trabajo" name="lugartra" id="lugartra" type="text" class="validate" onChange="javascript:adt();">
            <label for="lugartra">Lugar de Trabajo</label>
          </div>
          <div class="input-field col s12">
            <input placeholder="Domicilio del Trabajo" name="domtra" id="domtra" type="text" class="validate" onChange="javascript:ddt();">
            <label for="domtra">Domicilio del Trabajo</label>
          </div>
          <div class="input-field col s6">
            <input placeholder="Telefono del Trabajo" name="teltra" id="teltra" type="text" class="validate" onChange="javascript:tdt();">
            <label for="teltra">Telefono del Trabajo</label>
          </div>
          <div class="input-field col s6">
            <input placeholder="Extension" name="extensionc" id="extensionc" type="text" class="validate" onChange="javascript:edt();">
            <label for="extensionc">Extension</label>
          
          </div>        
        </div> 
      
        <label><input class="botonsfin" type="reset" value="Limpiar"></input></label> 
        <button class="botonsfin" type="button" onclick="mostrardatos()" >Enviar</button> 
        </div>

        <div id="datos" style="display: none;">
              <p>Ciclo : <input id="cic" type="text" readonly></p>
              <p>Cendi : <input id="cen" type="text" readonly></p>
              <h5>Datos del niño</h5>
              <p>Folio : <input id="fl" type="text" readonly></p>
              <p>Grupo : <input id="gpi" type="text" readonly></p>
              <p>Primer Apellido : <input id="pan" type="text" readonly></p>
              <p>Segundo Apellido : <input id="san" type="text" readonly></p> 
              <p>Nombres : <input id="nomb" type="text" readonly></p>
              <p>Fecha de Nacimiento : <input id="fnac" type="text" readonly></p>
              
              <h5>DATOS DEL O LA DERECHOHABIENTE:</h5>
              <p>Primer Apellido : <input id="pad" type="text" readonly></p>
              <p>Segundo Apellido : <input id="sad" type="text" readonly></p>
              <p>Nombres : <input id="nombd" type="text" readonly></p>
              <p>Calle : <input id="cad" type="text" readonly></p>
              <p>Numero Exterior : <input id="nbext" type="text" readonly></p>
              <p>Numero Interior : <input id="nbint" type="text" readonly></p>
              <p>Colonia : <input id="cni" type="text" readonly></p>
              <p>Alcaldia o municipio : <input id="alcomn" type="text" readonly></p>
              <p>Entidad Federativa : <input id="entf" type="text" readonly></p>
              <p>Codigo Postal : <input id="cod" type="text" readonly></p>
              <p>Telefono Fijo : <input id="telf" type="text" readonly></p>
              <p>Telefono Celular : <input id="celf" type="text" readonly></p>
              
              <p>Correo : <input id="ma" type="text" readonly></p>
              <p>Ocupacion : <input id="ocp" type="text" readonly></p>
              <p>CURP : <input id="crp" type="text" readonly></p>
              <p>Plaza o Puesto : <input id="pop" type="text" readonly></p>
              <p>Sueldo Mensual : <input id="sld" type="text" readonly></p>
              <p>Numero de Empleado : <input id="nue" type="text" readonly></p>
              <p>Adscripcion : <input id="adcr" type="text" readonly></p>
              <p>Horario de Trabajo : <input id="htrab" type="text" readonly></p>
              <p>Extension : <input id="eon" type="text" readonly></p>

              <h5>DATOS DEL CONYUGE:</h5>
              <p>Primer Apellido : <input id="padc" type="text" readonly></p>
              <p>Segundo Apellido : <input id="sadc" type="text" readonly></p>
              <p>Nombres : <input id="nombdc" type="text" readonly></p>
              <p>Calle : <input id="cadc" type="text" readonly></p>
              <p>Numero Exterior : <input id="nbextc" type="text" readonly></p>
              <p>Numero Interior : <input id="nbintc" type="text" readonly></p>
              <p>Colonia : <input id="cnic" type="text" readonly></p>
              <p>Alcaldia o municipio : <input id="alcomnc" type="text" readonly></p>
              <p>Entidad Federativa : <input id="entfc" type="text" readonly></p>
              <p>Codigo Postal : <input id="codc" type="text" readonly></p>
              <p>Telefono Fijo : <input id="telfc" type="text" readonly></p>
              <p>Telefono Celular : <input id="celfc" type="text" readonly></p>
              <p>Lugar de Trabajo : <input id="ltrc" type="text" readonly></p>
              <p>Domicilio del Trabajo : <input id="dtrc" type="text" readonly></p>
              <p>Telefono del Trabajo : <input id="ttrc" type="text" readonly></p>
              <p>Extension : <input id="exo" type="text" readonly></p>

        <button class="botonsfin" type="button" onclick="mostrardatos2()">Editar</button>
        <button class="botonsfin" type="submit" onclick="mostrardatos3()">Enviar</button>
         
        

       </div>
        


              
        

        
          </form>
        
    </div>


    
    <form action="fotos.php" method="post" enctype="multipart/form-data" name="fotos" id="fotos" style="display: none;">
        <h1>Insertar las fotos</h1>    
        <input id="fol" name="fol" type="text" class="validate">
        <label for="fol">Folio(boleta):</label>
        <br>
        <input type="file" name="archivo[]" multiple="multiple">        
        <input type="submit" value="Enviar"  class="trig">
       
    </form>
  </div> 
 
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>   
  <a class="botonsin" href="../pdf/bpdf2.html">Generar PDF</a>
    </body>
</html>
<script src="../CRUD/vista/template/js/functions_persona.js"></script> 