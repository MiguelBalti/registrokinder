$(document).ready(function(){
    $('select').formSelect();
  });
     
function mostrarFormulario(){ 
    var formulario = document.getElementById("formu");
    formulario.style.display = 'block';  
}
function ocultarFormulario(){ 
    var formulario = document.getElementById("formu");
    formulario.style.display = 'none';  
}

function mostrarFoto(){ 
    var formulario = document.getElementById("fotos");
    formulario.style.display = 'block';  
}

function mostrardatos(){ 
    var form = document.getElementById("datos");
    form.style.display = 'block'; 
    var formulario = document.getElementById("frm");
    formulario.style.display = 'none';  
}

function mostrardatos2(){ 
    var form = document.getElementById("datos");
    form.style.display = 'none'; 
    var formulario = document.getElementById("frm");
    formulario.style.display = 'block';  
}

function mostrardatos3(){ 
    var form = document.getElementById("datos");
    form.style.display = 'none'; 
    var formulario = document.getElementById("frm");
    formulario.style.display = 'block'; 
    var formulario = document.getElementById("fotos");
    formulario.style.display = 'block';  
}

function Edad() {
          
    var FechaNacimiento = document.getElementById('fnacim').value;
 
    var fechaNace = new Date(FechaNacimiento);
    var fechaActual = new Date()
 
    var mes = fechaActual.getMonth();
    var dia = fechaActual.getDate();
    var año = fechaActual.getFullYear();
 
    fechaActual.setDate(dia);
    fechaActual.setMonth(mes);
    fechaActual.setFullYear(año);
 
    dias_tranascurridos = Math.floor(((fechaActual - fechaNace) / (1000 * 60 * 60 * 24) ));
 
     anios = Math.floor(dias_tranascurridos/365);
     meses_1 = dias_tranascurridos % 365;
     meses = Math.floor(meses_1/30);
     dias =meses_1%30;
    document.getElementById('edad').value = anios+"-"+ meses;
 
}

function todas(){
       
    mostrarFoto(); 
}

function ci(){
    document.getElementById('cic').value = document.getElementById('ciclo').value;
}
function cdi(){
    document.getElementById('cen').value = document.getElementById('cendi').value;
}
function fo(){
    document.getElementById('fl').value = document.getElementById('folio').value;
}
function grp(){
    document.getElementById('gpi').value = document.getElementById('grupo').value;
}
function pape(){
    document.getElementById('pan').value = document.getElementById('papellido').value;
}
function sap(){
    document.getElementById('san').value = document.getElementById('sapellido').value;
}
function nms(){
    document.getElementById('nomb').value = document.getElementById('nombres').value;
}
function fnm(){
    document.getElementById('fnac').value = document.getElementById('fnacim').value;
}

function paped(){
    document.getElementById('pad').value = document.getElementById('papellidoda').value;
}
function saped(){
    document.getElementById('sad').value = document.getElementById('sapellidoda').value;
}
function nmsd(){
    document.getElementById('nombd').value = document.getElementById('nombresda').value;
}
function str(){
    document.getElementById('cad').value = document.getElementById('calle').value;
}
function nomex(){
    document.getElementById('nbext').value = document.getElementById('numerocasaext').value;
}
function nomint(){
    document.getElementById('nbint').value = document.getElementById('numerocasaint').value;
}
function cln(){
    document.getElementById('cni').value = document.getElementById('colonia').value;
}
function mnc(){
    document.getElementById('alcomn').value = document.getElementById('alcaldia').value;
}
function fed(){
    document.getElementById('entf').value = document.getElementById('entife').value;
}
function postal(){
    document.getElementById('cod').value = document.getElementById('cp').value;
}
function fij(){
    document.getElementById('telf').value = document.getElementById('tel').value;
}
function ncl(){
    document.getElementById('celf').value = document.getElementById('cel').value;
}

function cro(){
    document.getElementById('ma').value = document.getElementById('correo').value;
}
function pac(){
    document.getElementById('ocp').value = document.getElementById('ocupacion').value;
}
function rup(){
    document.getElementById('crp').value = document.getElementById('curp').value;
}
function pue(){
    document.getElementById('pop').value = document.getElementById('plazaop').value;
}
function sme(){
    document.getElementById('sld').value = document.getElementById('sueldo').value;
}
function nld(){
    document.getElementById('nue').value = document.getElementById('nempleado').value;
}
function dsr(){
    document.getElementById('adcr').value = document.getElementById('adscripcion').value;
}
function hrt(){
    document.getElementById('htrab').value = document.getElementById('horario').value;
}
function eci(){
    document.getElementById('eon').value = document.getElementById('extension').value;
}



function papedc(){
    document.getElementById('padc').value = document.getElementById('papellidodc').value;
}
function sapedc(){
    document.getElementById('sadc').value = document.getElementById('sapellidodc').value;
}
function nmsdc(){
    document.getElementById('nombdc').value = document.getElementById('nombresdc').value;
}
function strc(){
    document.getElementById('cadc').value = document.getElementById('callec').value;
}
function nomexc(){
    document.getElementById('nbextc').value = document.getElementById('numerocasaextc').value;
}
function nomintc(){
    document.getElementById('nbintc').value = document.getElementById('numerocasaintc').value;
}
function clnc(){
    document.getElementById('cnic').value = document.getElementById('coloniac').value;
}
function mncc(){
    document.getElementById('alcomnc').value = document.getElementById('alcaldiac').value;
}
function fedc(){
    document.getElementById('entfc').value = document.getElementById('entifec').value;
}
function postalc(){
    document.getElementById('codc').value = document.getElementById('cpc').value;
}
function fijc(){
    document.getElementById('telfc').value = document.getElementById('telc').value;
}
function nclc(){
    document.getElementById('celfc').value = document.getElementById('celc').value;
}

function adt(){
    document.getElementById('ltrc').value = document.getElementById('lugartra').value;
}
function ddt(){
    document.getElementById('dtrc').value = document.getElementById('domtra').value;
}
function tdt(){
    document.getElementById('ttrc').value = document.getElementById('teltra').value;
}
function edt(){
    document.getElementById('exo').value = document.getElementById('extensionc').value;
}























