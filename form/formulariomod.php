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

    <link href="./materialize/css/materialize.css" rel="stylesheet" />
    <script language="Javascript" src="js/jquery-3.6.0.js"></script>
    <script language="Javascript" src="./materialize/js/materialize.js"></script>
    <script language="Javascript" src="js/form.js"></script>
    <link href="./estilos.css" rel="stylesheet" type="text/css">
    
    
    
    <title>.:: Formulario ::. </title>
</head>
<body> 
  
  <a class="botonsin" href="https://localhost/pfinal/CRUD/vista/persona/tabla.php" >Tabla de registros</a>
  
  <div class="form-style">
    <div class="row">
      <form class="col s12"  id="formod">  
        <h1>FICHA DE INSCRIPCION/REINSCRIPCION</h1> 
        <br>
    
        <div class="row">
        <input id="idpersona" name="idpersona" type="hidden" required="" >
           
          <div class="input-field col s12">
            <input id="ciclo" name="ciclo" type="text" class="validate" >
            <label for="ciclo"></label>
          </div>
          <div class="input-field col s12">
            <input id="cendi" name="cendi" type="text" class="validate" >
            <label for="cendi"></label>
          </div>            
            
          <div class="input-field col s12">
            <input id="folio" name="folio" type="text" class="validate" >
            <label for="folio"></label>
          </div>
          
          <div class="input-field col s12">
            <input id="grupo" name="grupo" type="text" class="validate">
            <label for="grupo"></label>
          </div>
        </div>        
        
          
        <legend>DATOS DEL NIÑO O DE LA NIÑA</legend>   
        <div class="row">
          <div class="input-field col s6">
            <input placeholder="Primer apellido" name="papellido" id="papellido" type="text" class="validate" >
            <label for="papellido"></label>
          </div>
          <div class="input-field col s6">
            <input placeholder="Segundo apellido" name="sapellido" id="sapellido" type="text" class="validate" >
            <label for="sapellido"></label>
          </div>
          <div class="input-field col s12">
            <input placeholder="Nombre(s)" name="nombres" id="nombres" type="text" class="validate">
            <label for="nombres"></label>
          </div>
          <div class="input-field col s6">
            <input placeholder="Fecha de nacimiento" name="fnacim" id="fnacim" type="text" class="validate" >
            <label for="fnacim"></label>
          </div>
          <div class="input-field col s6">
            <input placeholder="Edad" name="edad" id="edad" type="text" class="validate" >
            <label for="edad"></label>
          </div>
  
        </div>
      
      <br>
      
        <legend>DATOS DEL O LA DERECHOHABIENTE: </legend> 
        <div class="row">
          <div class="input-field col s6">
            <input placeholder="Primer apellido" name="papellidoda" id="papellidoda" type="text" class="validate" >
            <label for="papellidoda"></label>
          </div>
          <div class="input-field col s6">
            <input placeholder="Segundo apellido" name="sapellidoda" id="sapellidoda" type="text" class="validate" >
            <label for="sapellidoda"></label>
          </div>
          <div class="input-field col s12">
            <input placeholder="Nombre(s)" name="nombresda" id="nombresda" type="text" class="validate" >
            <label for="nombresda"></label>
          </div>
          <p>Domicilio Particular</p>
          <div class="input-field col s6">
            <input placeholder="Calle" name="calle" id="calle" type="text" class="validate" >
            <label for="calle"></label>
          </div>
          <div class="input-field col s3">
            <input placeholder="Numero Ext" name="numerocasaext" id="numerocasaext" type="number" class="validate" >
            <label for="numerocasaext"></label>
          </div>
          <div class="input-field col s3">
            <input placeholder="Numero Int" name="numerocasaint" id="numerocasaint" type="number" class="validate" >
            <label for="numerocasaint"></label>
          </div>
          <div class="input-field col s6">
            <input placeholder="Colonia" name="colonia" id="colonia" type="text" class="validate" >
            <label for="colonia"></label>
          </div>
          <div class="input-field col s6">
            <input placeholder="Alcaldia o municipio" name="alcaldia" id="alcaldia" type="text" class="validate" >
            <label for="alcaldia"></label>
          </div>

          <div class="input-field col s6">
            <input placeholder="Entidad Federativa" name="entife" id="entife" type="text" class="validate" >
            <label for="entife"></label>
          </div>          
          
          <div class="input-field col s6">
            <input placeholder="C.P" name="cp" id="cp" type="number" class="validate" >
            <label for="cp"></label>
          </div>
          <div class="input-field col s6">
            <input placeholder="Telefono fijo" name="tel" id="tel" type="tel" class="validate" >
            <label for="tel"></label>
          </div>
          <div class="input-field col s6">
            <input placeholder="Telefono celular" name="cel" id="cel" type="number" class="validate">
            <label for="cel"></label>
          </div>
          <div class="input-field col s6">
            <input placeholder="Correo Electronico" name="correo" id="correo" type="email" class="validate" >
            <label for="correo"></label>
          </div>
          <div class="input-field col s6">
            <input placeholder="Ocupacion" name="ocupacion" id="ocupacion" type="text" class="validate" >
            <label for="ocupacion"></label>
          </div>
            
          <div class="input-field col s6">
            <input placeholder="CURP" name="curp" id="curp" type="text" class="validate">
            <label for="curp"></label>
          </div>
          <div class="input-field col s6">
            <input placeholder="Plaza o Puesto" name="plazaop" id="plazaop" type="text" class="validate" >
            <label for="plazaop"></label>
          </div>
          <div class="input-field col s6">
            <input placeholder="Sueldo Mensual" name="sueldo" id="sueldo" type="number" class="validate" >
            <label for="sueldo"></label>
          </div>
          <div class="input-field col s6">
            <input placeholder="Numero de Empleado" name="nempleado" id="nempleado" type="number" class="validate" >
            <label for="nempleado"></label>
          </div>
          <div class="input-field col s6">
            <input placeholder="Adscripcion" name="adscripcion" id="adscripcion" type="text" class="validate" >
            <label for="adscripcion"></label>
          </div>
          <div class="input-field col s6">
            <input placeholder="horario" name="horario" id="horario" type="text" class="validate" >
            <label for="horario"></label>
          </div>                    
         
          <div class="input-field col s12">
            <input placeholder="Extension" name="extension" id="extension" type="text" class="validate" >
            <label for="extension"></label>
          </div>  
         
        </div>
      
        
        <div class="row" id="formu" >
          <legend>DATOS DEL CÓNYUGE: </legend> 
          <div class="input-field col s6">
            <input placeholder="Primer apellido" name="papellidodc" id="papellidodc" type="text" class="validate">
            <label for="papellidodc"></label>
          </div>
          <div class="input-field col s6">
            <input placeholder="Segundo apellido" name="sapellidodc" id="sapellidodc" type="text" class="validate">
            <label for="sapellidodc"></label>
          </div>
          <div class="input-field col s12">
            <input placeholder="Nombre(s)" name="nombresdc" id="nombresdc" type="text" class="validate">
            <label for="nombresdc"></label>
          </div>
          <p>Domicilio Particular</p>
          <div class="input-field col s6">
            <input placeholder="Calle" name="callec" id="callec" type="text" class="validate">
            <label for="callec"></label>
          </div>
          <div class="input-field col s3">
            <input placeholder="Numero Ext" name="numerocasaextc" id="numerocasaextc" type="number" class="validate">
            <label for="numerocasaextc"></label>
          </div>
          <div class="input-field col s3">
            <input placeholder="Numero Int" name="numerocasaintc" id="numerocasaintc" type="number" class="validate">
            <label for="numerocasaintc"></label>
          </div>
          <div class="input-field col s6">
            <input placeholder="Colonia" name="coloniac" id="coloniac" type="text" class="validate">
            <label for="coloniac"></label>
          </div>
          <div class="input-field col s6">
            <input placeholder="Alcaldia o municipio" name="alcaldiac" id="alcaldiac" type="text" class="validate">
            <label for="alcaldiac"></label>
          </div>

          <div class="input-field col s6">
            <input placeholder="Entidad Federativa" name="entifec" id="entifec" type="text" class="validate">
            <label for="entifec"></label>
          </div>          
          
          <div class="input-field col s6">
            <input placeholder="C.P" name="cpc" id="cpc" type="text" class="validate">
            <label for="cpc"></label>
          </div>
          <div class="input-field col s6">
            <input placeholder="Telefono fijo" name="telc" id="telc" type="text" class="validate">
            <label for="telc"></label>
          </div>
          <div class="input-field col s6">
            <input placeholder="Telefono celular" name="celc" id="celc" type="text" class="validate">
            <label for="celc"></label>
          </div>
          <div class="input-field col s12">
            <input placeholder="Lugar de Trabajo" name="lugartra" id="lugartra" type="text" class="validate">
            <label for="lugartra"></label>
          </div>
          <div class="input-field col s12">
            <input placeholder="Domicilio del Trabajo" name="domtra" id="domtra" type="text" class="validate">
            <label for="domtra"></label>
          </div>
          <div class="input-field col s6">
            <input placeholder="Telefono del Trabajo" name="teltra" id="teltra" type="text" class="validate">
            <label for="teltra"></label>
          </div>
          <div class="input-field col s6">
            <input placeholder="Extension" name="extensionc" id="extensionc" type="text" class="validate">
            <label for="extensionc"></label>
          
          </div>        
        </div>  
        <button class="botonsfin" type="submit">Actualizar</button>
         
      </form>
    </div>
  </div> 
 
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>   
  <script src="https://localhost/pfinal/CRUD/assets/js/functions.js"></script>   
    </body>
</html>
<script src="../CRUD/vista/template/js/functions_persona.js"></script> 

<script>
    let id = "<?= $_GET['p']?>";
    fntMostrar(id);
</script>
