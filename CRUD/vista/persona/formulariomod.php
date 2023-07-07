<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <!--<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>-->
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="../../../form/materialize/css/materialize.css" rel="stylesheet" />
    <script language="Javascript" src="../../../form/js/jquery-3.6.0.js"></script>
    <script language="Javascript" src="../../../form//materialize/js/materialize.js"></script>
    <script language="Javascript" src="../../../form/js/form.js"></script>
    
    
    <title>.:: ModFormulario ::. </title>
</head>
<body> 
  
    <h1>FICHA DE INSCRIPCION</h1> 

  <div class="row">
    <form class="col s12" id="formulario">  
     
      <div class="row">
        <div class="input-field col s12">
          <select name="ciclo" enabled required>
            <option value=""disabled selected>CICLO</option>
            <option value="2022-2023">2022-2023</option>
          </select>
          <label for="ciclo">CICLO</label>
        </div>
        
        <div class="input-field col s12">
          <select name="cendi" enabled required>
            <option value=""disabled selected>CENDI</option>
            <option value="CENDI Amalia Solórzano de Cárdenas">CENDI "Amalia Solórzano de Cárdenas"</option>
            <option value="cendib" disabled="disabled">CENDI "Clementina Batalla de Bassols"</option>
            <option value="cendic" disabled="disabled">CENDI "Eva Sámano de López Mateos"</option>
            <option value="cendid" disabled="disabled">CENDI "Laura Pérez de Bátiz"</option>
            <option value="cendie" disabled="disabled">CENDI "Margarita Salazar de Erro"</option>
          </select>
          <label for="cendi">CENDI</label>
        </div>
        <!--aqui va la foto-->
        <div class="input-field col s12">        
          <p>___________________</p>
          <label for="profile_pic">Cargar fotografia</label>
          <input type="file" name="profile_pic"
                accept=".jpg, .jpeg, .png"  >
          
        </div>

        <div class="input-field col s12">
          <input id="folio" name="folio" type="text" class="validate" required>
          <label for="folio">Folio(boleta):</label>
        </div>
        <!--CREO VA OTRO SELECT-->
        <div class="input-field col s12">
          <input name="grupo" type="text" class="validate" required>
          <label for="grupo">Grupo:</label>
        </div>
      </div>        
      
        
      <legend>DATOS DEL NIÑO O DE LA NIÑA</legend>   
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Primer apellido" name="papellido" type="text" class="validate" required>
          <label for="papellido">Primer Apellido</label>
        </div>
        <div class="input-field col s6">
          <input placeholder="Segundo apellido" name="sapellido" type="text" class="validate" required>
          <label for="sapellido">Segundo Apellido</label>
        </div>
        <div class="input-field col s12">
          <input placeholder="Nombre(s)" name="nombres" type="text" class="validate" required>
          <label for="nombres">Nombre(s)</label>
        </div>
        <div class="input-field col s6">
          <input placeholder="Fecha de nacimiento" name="fnacim" type="date" class="validate" required>
          <label for="fnacim">Fecha de nacimiento</label>
        </div>
        <div class="input-field col s6">
          <input placeholder="Edad" name="edad" type="number" class="validate" required>
          <label for="edad">Edad</label>
        </div>

      </div>
    
    <br>
    
      <legend>DATOS DEL O LA DERECHOHABIENTE: </legend> 
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Primer apellido" name="papellidoda" type="text" class="validate" required>
          <label for="papellidoda">Primer Apellido</label>
        </div>
        <div class="input-field col s6">
          <input placeholder="Segundo apellido" name="sapellidoda" type="text" class="validate" required>
          <label for="sapellidoda">Segundo Apellido</label>
        </div>
        <div class="input-field col s12">
          <input placeholder="Nombre(s)" name="nombresda" type="text" class="validate" required>
          <label for="nombresda">Nombre(s)</label>
        </div>
        <p>Domicilio Particular</p>
        <div class="input-field col s6">
          <input placeholder="Calle" name="calle" type="text" class="validate" required>
          <label for="calle">Calle</label>
        </div>
        <div class="input-field col s3">
          <input placeholder="Numero Ext" name="numerocasaext" type="number" class="validate" required>
          <label for="numerocasaext">Numero</label>
        </div>
        <div class="input-field col s3">
          <input placeholder="Numero Int" name="numerocasaint" type="number" class="validate" required>
          <label for="numerocasaint">Numero</label>
        </div>
        <div class="input-field col s6">
          <input placeholder="Colonia" name="colonia" type="text" class="validate" required>
          <label for="colonia">Colonia</label>
        </div>
        <div class="input-field col s6">
          <input placeholder="Alcaldia o municipio" name="alcaldia" type="text" class="validate" required>
          <label for="alcaldia">Alcaldia o municipio</label>
        </div>
        
        <div class="input-field col s6">         
          <select name="entife" enabled required>
            <option value=""disabled selected>Entidad Federativa</option>
            <option value="Aguascalientes">Aguascalientes</option>
            <option value="Baja California">Baja California</option>
            <option value="Baja California Sur">Baja California Sur</option>
            <option value="Campeche">Campeche</option>
            <option value="Chiapas">Chiapas</option>
            <option value="Chihuahua">Chihuahua</option>
            <option value="Ciudad de México">Ciudad de México</option>
            <option value="Coahuila">Coahuila</option>
            <option value="Colima">Colima</option>
            <option value="Durango">Durango</option>
            <option value="Estado de México">Estado de México</option>
            <option value="Guanajuato">Guanajuato</option>
            <option value="Guerrero">Guerrero</option>
            <option value="Hidalgo">Hidalgo</option>
            <option value="Jalisco">Jalisco</option>
            <option value="Michoacán">Michoacán</option>
            <option value="Morelos">Morelos</option>
            <option value="Nayarit">Nayarit</option>
            <option value="Nuevo León">Nuevo León</option>
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
            <option value="Yucatán">Yucatán</option>
            <option value="Zacatecas">Zacatecas</option>
          </select>
          <label for="entife">Entidad Federativa</label>
        </div>
        <div class="input-field col s6">
          <input placeholder="C.P" name="cp" type="number" class="validate" required>
          <label for="cp">C.P</label>
        </div>
        <div class="input-field col s6">
          <input placeholder="Telefono fijo" name="tel" type="tel" class="validate" required>
          <label for="tel">Telefono fijo</label>
        </div>
        <div class="input-field col s6">
          <input placeholder="Telefono celular" name="cel" type="number" class="validate" required>
          <label for="cel">Telefono celular</label>
        </div>
        <div class="input-field col s6">
          <input placeholder="Correo Electronico" name="correo" type="email" class="validate" required>
          <label for="correo">Correo Electronico</label>
        </div>
        <div class="input-field col s6">
          <select name="ocupacion" enabled required>
            <option value=""disabled selected>Ocupacion</option>
            <option value="Docente">Docente</option>
            <option value="PAAE">PAAE</option>
            <option value="Funcionario">Funcionario</option>
          </select>
          <label for="ocupacion">Ocupacion</label>
        </div>

        <div class="input-field col s6">
          <input placeholder="CURP" name="curp" type="text" class="validate" required>
          <label for="curp">CURP</label>
        </div>
        <div class="input-field col s6">
          <input placeholder="Plaza o Puesto" name="plazaop" type="text" class="validate" required>
          <label for="plazaop">Nombre de la Plaza o Puesto</label>
        </div>
        <div class="input-field col s6">
          <input placeholder="Sueldo Mensual" name="sueldo" type="number" class="validate" required>
          <label for="sueldo">Sueldo Mensual</label>
        </div>
        <div class="input-field col s6">
          <input placeholder="Numero de Empleado" name="nempleado" type="number" class="validate" required>
          <label for="nempleado">Numero de Empleado</label>
        </div>
        <div class="input-field col s6">
          <select name="adscripcion" enabled required>
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
          <select name="horario" enabled required>
            <option value=""disabled selected>Horario de Trabajo</option>
            <option value="7:00 a 15:00">7:00 a 15:00</option>
            <option value="8:00 a 15:00">8:00 a 15:00</option>
            <option value="7:00 a 14:00">7:00 a 14:00</option>
            </select>
          <label for="horario">Horario de Trabajo</label>
        </div>
        <div class="input-field col s12">
          <input placeholder="Extension" name="extension" type="text" class="validate" required>
          <label for="extension">Extension</label>
        </div>  
         
      </div>
    
      
      <div class="row" id="formu">
        <legend>DATOS DEL CÓNYUGE: </legend> 
        <div class="input-field col s6">
          <input placeholder="Primer apellido" name="papellidodc" type="text" class="validate">
          <label for="papellidodc">Primer Apellido</label>
        </div>
        <div class="input-field col s6">
          <input placeholder="Segundo apellido" name="sapellidodc" type="text" class="validate">
          <label for="sapellidodc">Segundo Apellido</label>
        </div>
        <div class="input-field col s12">
          <input placeholder="Nombre(s)" name="nombresdc" type="text" class="validate">
          <label for="nombresdc">Nombre(s)</label>
        </div>
        <p>Domicilio Particular</p>
        <div class="input-field col s6">
          <input placeholder="Calle" name="callec" type="text" class="validate">
          <label for="callec">Calle</label>
        </div>
        <div class="input-field col s3">
          <input placeholder="Numero Ext" name="numerocasaextc" type="number" class="validate">
          <label for="numerocasaextc">Numero Exterior</label>
        </div>
        <div class="input-field col s3">
          <input placeholder="Numero Int" name="numerocasaintc" type="number" class="validate">
          <label for="numerocasaintc">Numero Interior</label>
        </div>
        <div class="input-field col s6">
          <input placeholder="Colonia" name="coloniac" type="text" class="validate">
          <label for="coloniac">Colonia</label>
        </div>
        <div class="input-field col s6">
          <input placeholder="Alcaldia o municipio" name="alcaldiac" type="text" class="validate">
          <label for="alcaldiac">Alcaldia o municipio</label>
        </div>
        <!--MODIFICAR -->
        <div class="input-field col s6">          
          <select name="entifec" enabled>
            <option value=""disabled selected>Entidad Federativa</option>
            <option value="Aguascalientes">Aguascalientes</option>
            <option value="Baja California">Baja California</option>
            <option value="Baja California Sur">Baja California Sur</option>
            <option value="Campeche">Campeche</option>
            <option value="Chiapas">Chiapas</option>
            <option value="Chihuahua">Chihuahua</option>
            <option value="Ciudad de México">Ciudad de México</option>
            <option value="Coahuila">Coahuila</option>
            <option value="Colima">Colima</option>
            <option value="Durango">Durango</option>
            <option value="Estado de México">Estado de México</option>
            <option value="Guanajuato">Guanajuato</option>
            <option value="Guerrero">Guerrero</option>
            <option value="Hidalgo">Hidalgo</option>
            <option value="Jalisco">Jalisco</option>
            <option value="Michoacán">Michoacán</option>
            <option value="Morelos">Morelos</option>
            <option value="Nayarit">Nayarit</option>
            <option value="Nuevo León">Nuevo León</option>
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
            <option value="Yucatán">Yucatán</option>
            <option value="Zacatecas">Zacatecas</option>
          </select>
          <label for="entifec">Entidad Federativa</label>
        </div>
        <div class="input-field col s6">
          <input placeholder="C.P" name="cpc" type="number" class="validate">
          <label for="cpc">C.P</label>
        </div>
        <div class="input-field col s6">
          <input placeholder="Telefono fijo" name="telc" type="number" class="validate">
          <label for="telc">Telefono fijo</label>
        </div>
        <div class="input-field col s6">
          <input placeholder="Telefono celular" name="celc" type="number" class="validate">
          <label for="celc">Telefono celular</label>
        </div>
        <div class="input-field col s12">
          <input placeholder="Lugar de Trabajo" name="lugartra" type="text" class="validate">
          <label for="lugartra">Lugar de Trabajo</label>
        </div>
        <div class="input-field col s12">
          <input placeholder="Domicilio del Trabajo" name="domtra" type="text" class="validate">
          <label for="domtra">Domicilio del Trabajo</label>
        </div>
        <div class="input-field col s6">
          <input placeholder="Telefono del Trabajo" name="teltra" type="text" class="validate">
          <label for="teltra">Telefono del Trabajo</label>
        </div>
        <div class="input-field col s6">
          <input placeholder="Extension" name="extensionc" type="text" class="validate">
          <label for="extensionc">Extension</label>
        
        </div>        
      </div>  
      <label><input type="submit"  value="Actualizar"></input></label>
		  

    </form>
  </div> 
 
  
    </body>
</html>