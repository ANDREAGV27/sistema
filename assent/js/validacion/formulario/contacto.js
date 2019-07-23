function sololetras(e) {
  key=e.keyCode || e.which;
 
  teclado=String.fromCharCode(key).toLowerCase();
 
  letras="qwertyuiopasdfghjklñzxcvbnm ";
 
  especiales="8-37-38-46-164";
 
  teclado_especial=false;
 
  for(var i in especiales){
    if(key==especiales[i]){
      teclado_especial=true;
      break;
    }
  }
 
  if(letras.indexOf(teclado)==-1 && !teclado_especial){
    return false;
  }
 
}


function contacto(){
    var nombrecontacto, correocontacto, telefonocontacto, mensajecontacto, expresion;
    nombrecontacto = document.getElementById("nombrecontacto").value;
    correocontacto = document.getElementById("correocontacto").value;
    telefonocontacto = document.getElementById("telefonocontacto").value;
    mensajecontacto = document.getElementById("mensajecontacto").value;
    expresion = /\w+@+\w+\.+[a-z]/;
    
    if  (nombrecontacto==="" ||  correocontacto==="" || telefonocontacto==="" ||  mensajecontacto===""){
        
        Swal.fire(
          'Se detectaron campos vacios',
          'Completa todos los campos para poder continuar',
          'question'
        );
        return false;
        }
    // Nombre
    if
        (nombrecontacto.length>20){   
        Swal.fire({
          type: 'error',
          title: 'Oops...',
          text: 'El nombre ingresado no es valido, debe tener máximo 20 caractere',
          footer: ''
        });
        return false;
        }
    if
        (nombrecontacto.length<5){
        Swal.fire({
          type: 'error',
          title: 'Oops...',
          text: 'El nombre ingresado no es valido, debe tener minimo 5 caractere',
          footer: ''
        });
        return false;
        }
    // correo
    // validar que es un correo
    if  (!expresion.test(correocontacto)){
        Swal.fire({
          type: 'error',
          title: 'Oops...',
          text: 'El correo no fué encontrado, verfique nuevamente.',
          footer: ''
        });
        return false;
        }
    if
        (correocontacto.length>=45){
        Swal.fire({
          type: 'error',
          title: 'Oops...',
          text: 'El correo no es valido, es muy extenso',
          footer: ''
        });
        return false;
        }
    
    if
        (correocontacto.length<8){
            
        Swal.fire({
          type: 'error',
          title: 'Oops...',
          text: 'El correo debe tener minimo 8 caracteres',
          footer: ''
        });
        return false;
        }else if  (telefonocontacto.length===10 || telefonocontacto.length===7 ){
        return true;
        }else{
        Swal.fire({
          type: 'error',
          title: 'Oops...',
          text: 'El teléfono no es valido, recuerde colocar un teléfono fijo o celular',
          footer: ''
        });
        return false;
        }
    
        if (mensajecontacto.length>500){
//        Swal.fire({
//          type: 'error',
//          title: 'Oops...',
//          text: 'El mensaje debe tener máximo 500 caracteres',
//          footer: ''
//        });
//        return false;
            alert("No valido");
        }else if
        (nombrecontacto.length<5){
//        Swal.fire({
//          type: 'error',
//          title: 'Oops...',
//          text: 'El mensaje debe tener minimo 5 caracteres',
//          footer: ''
//        }); 
            alert("No valido");
        return false;
        }
    
    
    
}



































