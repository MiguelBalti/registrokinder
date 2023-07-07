<?php
    require_once "../librerias/conexion.php";
       
    class PersonaModel{
        private $conexion;
        function __construct(){
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->conect(); 
                   
        }
     
    public function getPersonas(){
        $arrRegistros = array();
        //$rs = $this->conexion->query("select * from persona");
        $rs = $this->conexion->query("select idpersona,folio,concat(papellido,' ',sapellido)AS apellidos,nombres,grupo,correo from persona");    
         
        while($obj = $rs->fetch_object()){
            array_push($arrRegistros,$obj);
        }        
        return $arrRegistros;
    }
     
    public function insertPersona($ciclo,$cendi,$folio,$grupo,$papellido,$sapellido, $nombres,$fnacim,$edad,$papellidoda,$sapellidoda,$nombresda,$calle,$numerocasaext,$numerocasaint,$colonia,$alcaldia,$entife,$cp,$tel,$cel,$correo,$ocupacion,$curp,$plazaop,$sueldo,$nempleado,$adscripcion,$horario,$extension,$papellidodc,$sapellidodc,$nombresdc,$callec,$numerocasaextc,$numerocasaintc,$coloniac,$alcaldiac,$entifec,$cpc,$telc,$celc,$lugartra,$domtra,$teltra,$extensionc){

        $sql = $this->conexion->query("CALL insert_persona('{$ciclo}','{$cendi}','{$folio}','{$grupo}','{$papellido}','{$sapellido}','{$nombres}','{$fnacim}','{$edad}',
        '{$papellidoda}','{$sapellidoda}','{$nombresda}','{$calle}','{$numerocasaext}','$numerocasaint','$colonia',
        '{$alcaldia}','{$entife}','{$cp}','{$tel}','{$cel}','{$correo}','{$ocupacion}','{$curp}','{$plazaop}','{$sueldo}','{$nempleado}','{$adscripcion}','{$horario}','{$extension}',
            '{$papellidodc}','{$sapellidodc}','{$nombresdc}','{$callec}','{$numerocasaextc}','{$numerocasaintc}','{$coloniac}','{$alcaldiac}','{$entifec}','{$cpc}','{$telc}','{$celc}','{$lugartra}','{$domtra}','{$teltra}','{$extensionc}')");
        $sql = $sql->fetch_object();
        return $sql;
        
    }

    public function getPersona(int $idpersona){
        $sql = $this->conexion->query("CALL select_persona('{$idpersona}')");
        $sql = $sql->fetch_object();
        return $sql;

    }
    public function updatePersona($idpersona,$ciclo,$cendi,$folio,$grupo,$papellido,$sapellido, $nombres,$fnacim,$edad,$papellidoda,$sapellidoda,$nombresda,$calle,$numerocasaext,$numerocasaint,$colonia,$alcaldia,$entife,$cp,$tel,$cel,$correo,$ocupacion,$curp,$plazaop,$sueldo,$nempleado,$adscripcion,$horario,$extension,$papellidodc,$sapellidodc,$nombresdc,$callec,$numerocasaextc,$numerocasaintc,$coloniac,$alcaldiac,$entifec,$cpc,$telc,$celc,$lugartra,$domtra,$teltra,$extensionc){
        $sql = $this->conexion->query("CALL update_persona('{$idpersona}','{$ciclo}','{$cendi}','{$folio}','{$grupo}','{$papellido}','{$sapellido}','{$nombres}','{$fnacim}','{$edad}',
        '{$papellidoda}','{$sapellidoda}','{$nombresda}','{$calle}','{$numerocasaext}','{$numerocasaint}','{$colonia}',
        '{$alcaldia}','{$entife}','{$cp}','{$tel}','{$cel}','{$correo}','{$ocupacion}','{$curp}','{$plazaop}','{$sueldo}','{$nempleado}','{$adscripcion}','{$horario}','{$extension}',
            '{$papellidodc}','{$sapellidodc}','{$nombresdc}','{$callec}','{$numerocasaextc}','{$numerocasaintc}','{$coloniac}','{$alcaldiac}','{$entifec}','{$cpc}','{$telc}','{$celc}','{$lugartra}','{$domtra}','{$teltra}','{$extensionc}')");
        $sql = $sql->fetch_object();
        return $sql;

    }

    public function delPersona(int $idpersona){
        $sql = $this->conexion->query("CALL delete_persona('{$idpersona}')");
        $sql = $sql->fetch_object();
        return $sql;
    }
} 


?>