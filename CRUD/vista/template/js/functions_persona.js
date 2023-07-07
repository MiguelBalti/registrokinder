
async function getPersona(){
    try{
        let resp = await fetch("https://localhost/pfinal/CRUD/controladores/Persona.php?op=listregistros");
        json = await resp.json();
        if(json.status){
            let data = json.data;
            data.forEach((item) => { 
                let newtr = document.createElement("tr");
                newtr.id = "row_"+item.idpersona;
                newtr.innerHTML = `<tr> 
                      <th scope="row">${item.idpersona}</th>
                      <td>${item.folio}</td>   
                      <td>${item.apellidos}</td>  
                      <td>${item.nombres}</td>   
                      <td>${item.grupo}</td>  
                      <td>${item.correo}</td>
                      <td>${item.options}</td>`;
                
                
            document.querySelector("#tblBodyPersonas").appendChild(newtr);
            });
        }
        
    }catch(err){
        console.log("Ocurrio un error: "+err);
    }
}

if(document.querySelector("#tblBodyPersonas")){
    getPersona();
}

function literal(folo) { 
    var expreg = /^(PE|PP|20)([0-9]{8})$/;     
    
    if(expreg.test(folo)){       
        return 1;
      }
              
    else{
        var d = document.getElementById("parrafos");
        // Crea un nuevo elemento de tipo párrafo
        var np = document.createElement("p");
  
        // Inserta el texto en el contenido del nuevo párrafo
        np.textContent = "No cumple";
        // Añade el párrafo al final de los elementos que contenga el div
        d.appendChild(np);
        
        return 0;  
      } 
}
function literal1(folo){ 
    var expreg = /^[A-Z]{4}([0-9][0-9]){3}[A-Z]{6}([A-Z]|[0-9]){2}$/;     
    
    if(expreg.test(folo)||(folo=="")){       
        return 1;
      }
              
    else{
        var d = document.getElementById("parrafos1");
        // Crea un nuevo elemento de tipo párrafo
        var np = document.createElement("p");
  
        // Inserta el texto en el contenido del nuevo párrafo
        np.textContent = "No cumple";
        // Añade el párrafo al final de los elementos que contenga el div
        d.appendChild(np);
        
        return 0;  
      }  

}


if(document.querySelector("#formulario")){
    let frmRegistro = document.querySelector("#formulario");
    frmRegistro.onsubmit = function(e){
        e.preventDefault();
        fntGuardar();
    }
    async function fntGuardar(){
        console.log("Cargando datos...");        
        let ciclo = document.querySelector("#ciclo").value;
        let cendi = document.querySelector("#cendi").value;
        //imagen
        let folio = document.querySelector("#folio").value;
        let grupo = document.querySelector("#grupo").value;
        let papellido = document.querySelector("#papellido").value;
        let sapellido = document.querySelector("#sapellido").value;
        let nombres = document.querySelector("#nombres").value;
        let fnacim = document.querySelector("#fnacim").value;
        let edad = document.querySelector("#edad").value;
        let papellidoda = document.querySelector("#papellidoda").value;
        let sapellidoda = document.querySelector("#sapellidoda").value;
        let nombresda = document.querySelector("#nombresda").value;
        let calle = document.querySelector("#calle").value;
        let numerocasaext = document.querySelector("#numerocasaext").value;
        let colonia = document.querySelector("#colonia").value;
        let alcaldia = document.querySelector("#alcaldia").value;
        let entife = document.querySelector("#entife").value;
        let cp = document.querySelector("#cp").value;
        let tel = document.querySelector("#tel").value;
        let cel = document.querySelector("#cel").value;
        let correo = document.querySelector("#correo").value;
        let ocupacion = document.querySelector("#ocupacion").value;
        let curp = document.querySelector("#curp").value;
        let plazaop = document.querySelector("#plazaop").value;
        let sueldo = document.querySelector("#sueldo").value;
        let nempleado = document.querySelector("#nempleado").value;
        let adscripcion = document.querySelector("#adscripcion").value;
        let horario = document.querySelector("#horario").value;
        let extension = document.querySelector("#extension").value;
        let papellidodc = document.querySelector("#papellidodc").value;
        let sapellidodc = document.querySelector("#sapellidodc").value;
        let nombresdc = document.querySelector("#nombresdc").value;
        let callec = document.querySelector("#callec").value;
        let numerocasaextc = document.querySelector("#numerocasaextc").value;
        let numerocasaintc = document.querySelector("#numerocasaintc").value;
        let coloniac = document.querySelector("#coloniac").value;
        let alcaldiac = document.querySelector("#alcaldiac").value;
        let entifec = document.querySelector("#entifec").value;
        let cpc = document.querySelector("#cpc").value;
        let telc = document.querySelector("#telc").value;
        let celc = document.querySelector("#celc").value;
        let lugartra = document.querySelector("#lugartra").value;
        let domtra = document.querySelector("#domtra").value;
        let teltra = document.querySelector("#teltra").value;
        let extensionc = document.querySelector("#extensionc").value;
        
        //var expreg = /^(PE|PP|20)([0-9]{8})$/;   
        var fo = literal(folio);
        var cu = literal1(curp);


         //Aqui podrian ir las validacion
       // if((folio == "")||(expreg.test(folio)== false)){
        if((folio == "")||(fo == 0)||(cu == 0)){
            

            alert("Tus datos no estan bien escritos");
            
            return;
        }
        
        try{
            const data = new FormData(formulario);
            let resp = await fetch("https://localhost/pfinal/CRUD/controladores/Persona.php?op=registro",{
                method: 'POST',
                mode: 'cors',
                cache: 'no-cache',
                body: data
            });
            json = await resp.json();
            if(json.status){
                swal("Guardar",json.msg,"success");
                frmRegistro.reset();
            } else{
                swal("Guardar",json.msg,"error");
                
            }
            
        }catch(err){
            console.log("Ocurrio un error: "+err);
        }
    }
}

async function fntMostrar(id){
    const formData = new FormData();
    formData.append('idpersona',id);
    try{
        let resp = await fetch("https://localhost/pfinal/CRUD/controladores/Persona.php?op=verregistro",{
            method: 'POST',
            mode: 'cors',
            cache: 'no-cache',
            body: formData
        });
        json = await resp.json();
        if(json.status){
            document.querySelector("#idpersona").value = json.data.idpersona;
            document.querySelector("#ciclo").value = json.data.ciclo;
            document.querySelector("#cendi").value = json.data.cendi;
            document.querySelector("#folio").value = json.data.folio;
            document.querySelector("#grupo").value = json.data.grupo;
            document.querySelector("#papellido").value = json.data.papellido;
            document.querySelector("#sapellido").value = json.data.sapellido;
            document.querySelector("#nombres").value = json.data.nombres;
            document.querySelector("#fnacim").value = json.data.fnacim;
            document.querySelector("#edad").value = json.data.edad;
            document.querySelector("#papellidoda").value = json.data.papellidoda;
            document.querySelector("#sapellidoda").value = json.data.sapellidoda;
            document.querySelector("#nombresda").value = json.data.nombresda;
            document.querySelector("#calle").value = json.data.calle;
            document.querySelector("#numerocasaext").value = json.data.numerocasaext;
            document.querySelector("#numerocasaint").value = json.data.numerocasaint;
            document.querySelector("#colonia").value = json.data.colonia;
            document.querySelector("#alcaldia").value = json.data.alcaldia;
            document.querySelector("#entife").value = json.data.entife;
            document.querySelector("#cp").value = json.data.cp;
            document.querySelector("#tel").value = json.data.tel;
            document.querySelector("#cel").value = json.data.cel;
            document.querySelector("#correo").value = json.data.correo;
            document.querySelector("#ocupacion").value = json.data.ocupacion;
            document.querySelector("#curp").value = json.data.curp;
            document.querySelector("#plazaop").value = json.data.plazaop;
            document.querySelector("#sueldo").value = json.data.sueldo;
            document.querySelector("#nempleado").value = json.data.nempleado;
            document.querySelector("#adscripcion").value = json.data.adscripcion;
            document.querySelector("#horario").value = json.data.horario;
            document.querySelector("#extension").value = json.data.extension;            
            document.querySelector("#papellidodc").value = json.data.papellidodc;
            document.querySelector("#sapellidodc").value = json.data.sapellidodc;
            document.querySelector("#nombresdc").value = json.data.nombresdc;
            document.querySelector("#callec").value = json.data.callec;
            document.querySelector("#numerocasaextc").value = json.data.numerocasaextc;
            document.querySelector("#numerocasaintc").value = json.data.numerocasaintc;
            document.querySelector("#coloniac").value = json.data.coloniac;
            document.querySelector("#alcaldiac").value = json.data.alcaldiac;
            document.querySelector("#entifec").value = json.data.entifec;
            document.querySelector("#cpc").value = json.data.cpc;
            document.querySelector("#telc").value = json.data.telc;
            document.querySelector("#celc").value = json.data.celc;
            document.querySelector("#lugartra").value = json.data.lugartra;
            document.querySelector("#domtra").value = json.data.domtra;
            document.querySelector("#teltra").value = json.data.teltra;
            document.querySelector("#extensionc").value = json.data.extensionc;
        }
        else{
            window.location = 'https://localhost/pfinal/CRUD/vista/persona/tabla.php';
        }

    }catch(err){
        console.log("Ocurrio un error: "+err);
    }

}


if(document.querySelector("#formod")){
    let frmEditar = document.querySelector("#formod");
    frmEditar.onsubmit = function(e){
        e.preventDefault();
        fntEditar();

        
    }
    async function fntEditar(){
        console.log("Cargando datos..."); 
        let idpersona = document.querySelector("#idpersona").value;       
        let ciclo = document.querySelector("#ciclo").value;
        let cendi = document.querySelector("#cendi").value;
        let folio = document.querySelector("#folio").value;
        let grupo = document.querySelector("#grupo").value;
        let papellido = document.querySelector("#papellido").value;
        let sapellido = document.querySelector("#sapellido").value;
        let nombres = document.querySelector("#nombres").value;
        let fnacim = document.querySelector("#fnacim").value;
        let edad = document.querySelector("#edad").value;
        let papellidoda = document.querySelector("#papellidoda").value;
        let sapellidoda = document.querySelector("#sapellidoda").value;
        let nombresda = document.querySelector("#nombresda").value;
        let calle = document.querySelector("#calle").value;
        let numerocasaext = document.querySelector("#numerocasaext").value;
        let colonia = document.querySelector("#colonia").value;
        let alcaldia = document.querySelector("#alcaldia").value;
        let entife = document.querySelector("#entife").value;
        let cp = document.querySelector("#cp").value;
        let tel = document.querySelector("#tel").value;
        let cel = document.querySelector("#cel").value;
        let correo = document.querySelector("#correo").value;
        let ocupacion = document.querySelector("#ocupacion").value;
        let curp = document.querySelector("#curp").value;
        let plazaop = document.querySelector("#plazaop").value;
        let sueldo = document.querySelector("#sueldo").value;
        let nempleado = document.querySelector("#nempleado").value;
        let adscripcion = document.querySelector("#adscripcion").value;
        let horario = document.querySelector("#horario").value;
        let extension = document.querySelector("#extension").value;
        let papellidodc = document.querySelector("#papellidodc").value;
        let sapellidodc = document.querySelector("#sapellidodc").value;
        let nombresdc = document.querySelector("#nombresdc").value;
        let callec = document.querySelector("#callec").value;
        let numerocasaextc = document.querySelector("#numerocasaextc").value;
        let numerocasaintc = document.querySelector("#numerocasaintc").value;
        let coloniac = document.querySelector("#coloniac").value;
        let alcaldiac = document.querySelector("#alcaldiac").value;
        let entifec = document.querySelector("#entifec").value;
        let cpc = document.querySelector("#cpc").value;
        let telc = document.querySelector("#telc").value;
        let celc = document.querySelector("#celc").value;
        let lugartra = document.querySelector("#lugartra").value;
        let domtra = document.querySelector("#domtra").value;
        let teltra = document.querySelector("#teltra").value;
        let extensionc = document.querySelector("#extensionc").value;
        
        // Aqui podrian ir las validacion
        if(folio == ""){
            alert("Todos los campos son requeridos");
            
            return;
        }
        
        try{
            const data = new FormData(formod);
            let resp = await fetch("https://localhost/pfinal/CRUD/controladores/Persona.php?op=actualizar",{
                method: 'POST',
                mode: 'cors',
                cache: 'no-cache',
                body: data
            });
            json = await resp.json();
            if(json.status){
                swal("Actualizar",json.msg,"success");
            } else{
                swal("Actualizar",json.msg,"error");
                
            }
            
        }catch(err){
            console.log("Ocurrio un error: "+err);
        }
    }
}


function fntDelPersona(id){
    swal({
        title: "Estas seguro?",
        text: "",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
          fntDelete(id);
        } 
      });
}

async function fntDelete(id){       
        
    try{
        let formData = new FormData();
        formData.append('idpersona',id);
            let resp = await fetch("https://localhost/pfinal/CRUD/controladores/Persona.php?op=eliminar",{
                method: 'POST',
                mode: 'cors',
                cache: 'no-cache',
                body: formData
            });
            json = await resp.json();
            if(json.status){
                swal("Eliminar",json.msg,"success");
                document.querySelector("#row_"+id).remove();
            } else{
                swal("Eliminar",json.msg,"error");                
            }
            
        }catch(err){
            console.log("Ocurrio un error: "+err);
    }

}


