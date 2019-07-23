// FORMULARIO DE REGISTRARSE
function validar(){
    var nombre, apellido, correo, telefono, expresion;
    nombre = document.getElementById("nombre").value;
    apellido = document.getElementById("apellido").value;
    correo = document.getElementById("correo").value;
    telefono = document.getElementById("telefono").value;
    expresion = /\w+@+\w+\.+[a-z]/;
    

    
    if  (nombre==="" ||  apellido==="" || correo==="" ||  telefono===""  ){
        
        
        Swal.fire(
          'Se detectaron campos vacios',
          'Completa todos los campos para poder continuar',
          'question'
        );
        
        return false;
        }
    
    
    
    //Validar correo
    // VALIDAR CANTIDAD DE CARACTERES
    // Nombre
    if
        (nombre.length>=15){
        Swal.fire({
          type: 'error',
          title: 'Oops...',
          text: 'El nombre ingresado es muy extenso',
          footer: 'Debe tener máximo 15 caracteres'
        }); 
        return false;
        }
    if
        (nombre.length<5){
        Swal.fire({
          type: 'error',
          title: 'Oops...',
          text: 'El nombre ingresado es muy corto',
          footer: 'Debe tener minimo 5 caracteres'
        }); 
        return false;
        }
    // apellido
    if
        (apellido.length>=15){
         Swal.fire({
          type: 'error',
          title: 'Oops...',
          text: 'El apellido ingresado es muy extenso',
          footer: 'Debe tener máximo 15 caracteres'
        });   
        
        return false;
        }
    if
        (apellido.length<5){
        Swal.fire({
          type: 'error',
          title: 'Oops...',
          text: 'El apellido ingresado es muy corto',
          footer: 'Debe tener minimo 5 caracteres'
        }); 
        return false;
        }
    // correo
    // validar que es un correo
    if  (!expresion.test(correo)){
        Swal.fire({
          type: 'error',
          title: 'Oops...',
          text: 'El correo no fué encontrado, intente nuevamente',
          footer: ''
        }); 
        return false;
        }
    if
        (correo.length>=45){
        Swal.fire({
          type: 'error',
          title: 'Correo no valido',
          text: 'El correo es muy extenso, verifique nuevamente',
          footer: ''
        }); 
        return false;
        }
    
    if
        (correo.length<8){
        Swal.fire({
          type: 'error',
          title: 'Correo no valido',
          text: 'El correo ingresado no es un número, debe tener minimo 8 carácteres',
          footer: ''
        }); 
        return false;
        } 
    //Validar que es un número de teléfono
    if  (isNaN(telefono)){
        Swal.fire({
          type: 'error',
          title: 'Oops...',
          text: 'No ingresaste un número',
          footer: ''
        }); 
        return false;
    }
    // telefono
    if
        (telefono.length===10 || telefono.length===7 ){
        return true;
        }else{
        Swal.fire({
          type: 'error',
          title: 'El teléfono no es valido',
          text: 'Recuerde colocar un teléfono fijo o celular',
        }); 
        return false;
        } 
    
}

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




































