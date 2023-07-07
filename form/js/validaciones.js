$(document).ready(function(){

    const formulario = document.getElementById('formulario');
     const inputs = document. querySelectorAll('#formulario input');
    
    
    const expresiones = {
        folio: /^(PE|PP|20)([0-9]{8})$/
    }


    const campos = {
        folio: false
}
const validarFormulario = (e) => {

    switch(e.target.name){
        case "folio":
        validarCampo(expresiones.folio, e.target, 'folio');  
        break;
    }
}

const validarCampo = (expresion, input, campo) => {
 
    if(expresiones.folio.test(e.target.value)){
      document.getElementById(`${campo}`).classList.remove('formulario__grupo-incorrecto');
      document.getElementById(`${campo}`).classList.add('formulario__grupo-correcto');
      document.querySelector(`#${campo} i`).classList.add('fa-check-circle');
      document.querySelector(`#${campo} i`).classList.remove('fa-check-circle');
      document.querySelector(`#${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo')
      campos[campo] = true;
    }
    else{
      document.getElementById(`${campo}`).classList.add('formulario__grupo-incorrecto');
      document.getElementById(`${campo}`).classList.remove('formulario__grupo-correcto');
      document.querySelector(`#${campo}`).classList.add('fa-times-circle');
      document.querySelector(`#${campo}`).classList.remove('fa-check-circle');
      document.querySelector(`#${campo} .formulario__input-error`).classList.add('formulario__input-error-activo')
      campos[campo] = false;  
  }
 }

 inputs.forEach((input) => {
    input.addEventListener('keyup',validarFormulario);
    input.addEventListener('blur',validarFormulario);

 });

 
 formulario.addEventListener('submit', (e) => {
     e.preventDefault();
     

     if(campos.folio){
        formulario.reset();
}

});

})


    


