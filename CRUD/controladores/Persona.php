    <?php

    require_once "../modelos/PersonaModel.php";

    $option = $_REQUEST['op'];
    $objPersona = new PersonaModel();

    if($option == "listregistros"){
        $arrResponse = array('status' => false, 'data' => "");
        $arrPersona = $objPersona->getPersonas();

        if(!empty($arrPersona)){
            for($i=0;$i<count($arrPersona);$i++){ 
                $idpersona = $arrPersona[$i]->idpersona;
                $options = '<a href="https://localhost/pfinal/form/formulariomod.php?p='.$idpersona.'" class="btn btn-outline-primary btn-sm" title="Editar registro"><i class="fa-solid fa-user-pen"></i></a>
                <button class="btn btn-outline-danger btn-sm" title="Eliminar registro" onclick="fntDelPersona('.$idpersona.')"><i class="fa-solid fa-user-xmark"></i></button>';
                /*$options = '<a href="'.BASE_URL.'/vista/persona/formulariomod.php?p='.$idpersona.'" class="btn btn-outline-primary btn-sm" title="Editar registro"><i class="fa-solid fa-user-pen"></i></a>
                <button class="btn btn-outline-danger btn-sm" title="Eliminar registro" onclick="fntDelPersona('.$idpersona.')"><i class="fa-solid fa-user-xmark"></i></button>';*/
                $arrPersona[$i]->options = $options;
            }
            $arrResponse['status'] = true;
            $arrResponse['data'] = $arrPersona;
        }
        echo json_encode($arrResponse);
        

        die();
        
    }

    if($option == "registro"){

        if($_POST){
            $ciclo = $_POST['ciclo'];
            $cendi = $_POST['cendi'];
            $folio = $_POST['folio'];
            $grupo = $_POST['grupo'];
            $papellido = $_POST['papellido'];
            $sapellido = $_POST['sapellido'];
            $nombres = $_POST['nombres'];
            $fnacim = $_POST['fnacim'];
            $edad = $_POST['edad'];
            //Datos del derechohabiente
            $papellidoda = $_POST['papellidoda'];
            $sapellidoda = $_POST['sapellidoda'];
            $nombresda = $_POST['nombresda'];
            $calle = $_POST['calle'];
            $numerocasaext = $_POST['numerocasaext'];
            $numerocasaint = $_POST['numerocasaint'];
            $colonia = $_POST['colonia'];
            $alcaldia = $_POST['alcaldia'];
            $entife = $_POST['entife'];
            $cp = $_POST['cp'];
            $tel = $_POST['tel'];
            $cel = $_POST['cel'];
            $correo = $_POST['correo'];
            $ocupacion = $_POST['ocupacion'];
            $curp = $_POST['curp'];
            $plazaop = $_POST['plazaop'];
            $sueldo = $_POST['sueldo'];
            $nempleado = $_POST['nempleado'];
            $adscripcion = $_POST['adscripcion'];
            $horario = $_POST['horario'];
            $extension = $_POST['extension'];
            //Conyuge
            $papellidodc = $_POST['papellidodc'] ?? '';
            $sapellidodc = $_POST['sapellidodc'] ?? '';
            $nombresdc = $_POST['nombresdc'] ?? '';
            $callec = $_POST['callec'] ?? '';
            $numerocasaextc = $_POST['numerocasaextc'] ?? '';
            $numerocasaintc = $_POST['numerocasaintc'] ?? '';
            $coloniac = $_POST['coloniac'] ?? '';
            $alcaldiac = $_POST['alcaldiac'] ?? '';
            $entifec = $_POST['entifec'] ?? '';
            $cpc = $_POST['cpc'] ?? '';
            $telc = $_POST['telc'] ?? '';
            $celc = $_POST['celc'] ?? '';
            $lugartra = $_POST['lugartra'] ?? '';
            $domtra = $_POST['domtra'] ?? '';
            $teltra = $_POST['teltra'] ?? '';
            $extensionc = $_POST['extensionc'] ?? '';

            
            $arrPersona = $objPersona->insertPersona($ciclo,$cendi,$folio,$grupo,$papellido,$sapellido,$nombres,$fnacim,$edad,$papellidoda,$sapellidoda,$nombresda,$calle,$numerocasaext,$numerocasaint,$colonia,$alcaldia,$entife,$cp,$tel,$cel,$correo,$ocupacion,$curp,$plazaop,$sueldo,$nempleado,$adscripcion,$horario,$extension,$papellidodc,$sapellidodc,$nombresdc,$callec,$numerocasaextc,$numerocasaintc,$coloniac,$alcaldiac,$entifec,$cpc,$telc,$celc,$lugartra,$domtra,$teltra,$extensionc);

            if($arrPersona->id > 0){
                $arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente');
            }
            else{
                $arrResponse = array('status' => false, 'msg' => 'Error al guardar datos');
            }   
            echo json_encode($arrResponse);
    } 
    die();
    }       

    if($option == "verregistro"){
        if($_POST){
            $idpersona = intval($_POST['idpersona']);
            $arrPersona = $objPersona->getPersona($idpersona);
            if(empty($arrPersona)){
                $arrResponse = array('status' => false, 'msg' => 'Datos no encontrados');
            }
            else{
                $arrResponse = array('status' => true, 'msg' => 'Datos encontrados','data' =>$arrPersona);
            }
            echo json_encode($arrResponse);
        }
        die(); 
    }
    if($option == "actualizar"){
        if($_POST){
            $idpersona = intval($_POST['idpersona']);
            $ciclo = $_POST['ciclo'];
            $cendi = $_POST['cendi'];
            $folio = $_POST['folio'];
            $grupo = $_POST['grupo'];
            $papellido = $_POST['papellido'];
            $sapellido = $_POST['sapellido'];
            $nombres = $_POST['nombres'];
            $fnacim = $_POST['fnacim'];
            $edad = $_POST['edad'];
            //Datos del derechohabiente
            $papellidoda = $_POST['papellidoda'];
            $sapellidoda = $_POST['sapellidoda'];
            $nombresda = $_POST['nombresda'];
            $calle = $_POST['calle'];
            $numerocasaext = $_POST['numerocasaext'];
            $numerocasaint = $_POST['numerocasaint'];
            $colonia = $_POST['colonia'];
            $alcaldia = $_POST['alcaldia'];
            $entife = $_POST['entife'];
            $cp = $_POST['cp'];
            $tel = $_POST['tel'];
            $cel = $_POST['cel'];
            $correo = $_POST['correo'];
            $ocupacion = $_POST['ocupacion'];
            $curp = $_POST['curp'];
            $plazaop = $_POST['plazaop'];
            $sueldo = $_POST['sueldo'];
            $nempleado = $_POST['nempleado'];
            $adscripcion = $_POST['adscripcion'];
            $horario = $_POST['horario'];
            $extension = $_POST['extension'];
            //Conyuge
            $papellidodc = $_POST['papellidodc'] ?? '';
            $sapellidodc = $_POST['sapellidodc'] ?? '';
            $nombresdc = $_POST['nombresdc'] ?? '';
            $callec = $_POST['callec'] ?? '';
            $numerocasaextc = $_POST['numerocasaextc'] ?? '';
            $numerocasaintc = $_POST['numerocasaintc'] ?? '';
            $coloniac = $_POST['coloniac'] ?? '';
            $alcaldiac = $_POST['alcaldiac'] ?? '';
            $entifec = $_POST['entifec'] ?? '';
            $cpc = $_POST['cpc'] ?? '';
            $telc = $_POST['telc'] ?? '';
            $celc = $_POST['celc'] ?? '';
            $lugartra = $_POST['lugartra'] ?? '';
            $domtra = $_POST['domtra'] ?? '';
            $teltra = $_POST['teltra'] ?? '';
            $extensionc = $_POST['extensionc'] ?? '';


            $arrPersona = $objPersona->updatePersona($idpersona,$ciclo,$cendi,$folio,$grupo,$papellido,$sapellido,$nombres,$fnacim,$edad,$papellidoda,$sapellidoda,$nombresda,$calle,$numerocasaext,$numerocasaint,$colonia,$alcaldia,$entife,$cp,$tel,$cel,$correo,$ocupacion,$curp,$plazaop,$sueldo,$nempleado,$adscripcion,$horario,$extension,$papellidodc,$sapellidodc,$nombresdc,$callec,$numerocasaextc,$numerocasaintc,$coloniac,$alcaldiac,$entifec,$cpc,$telc,$celc,$lugartra,$domtra,$teltra,$extensionc);
            if($arrPersona->idp > 0){
                $arrResponse = array('status' => true, 'msg' => 'Datos actualizados correctamente');
            }
            else{
                $arrResponse = array('status' => false, 'msg' => 'Error al actualizar datos');
            }   
            echo json_encode($arrResponse);
    } 
    die();
    }

    if($option == "eliminar"){
        if($_POST){
            if(empty($_POST['idpersona'])){
                $arrResponse = array('status' => false, 'msg' => 'Error de datos');
            }else{
                $idpersona = intval($_POST['idpersona']);
                $arrInfo = $objPersona->delPersona($idpersona);
                if($arrInfo->id){
                    $arrResponse = array('status' => true, 'msg' => 'Registro eliminado');
                }else{
                    $arrResponse = array('status' => false, 'msg' => 'Error al eliminar');
                }
            }
            echo json_encode($arrResponse);
        }
    }

    die();


?>