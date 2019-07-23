// FORMULARIO DE REGISTRARSE
function validar(){
    var claveanterior, clave, claveconfirmar;
    clave = document.getElementById("clave").value;
    claveconfirmar = document.getElementById("claveconfirmar").value;
    claveanterior = document.getElementById("claveanterior").value;
    

    
    if  (clave==="" ||  claveconfirmar==="" ||  claveanterior===""){
        Swal.fire(
          'No has ingresado ninguna contraseña',
          'Completa todos los campos para continuar',
          'question'
        );
        return false;
        }
    else if  (clave != claveconfirmar){
        Swal.fire({
          type: 'error',
          title: 'Oops...',
          text: 'Lo sentimos las contraseñas no son correctas!',
          footer: ''
        });

        return false;
        }   
    // clave
    if
        (clave.length>=20){
            
        Swal.fire({
          type: 'error',
          title: 'Oops...',
          text: 'Contraseña no valida, debe tener máximo 20 caracteres',
          footer: ''
        });
        return false;
        }
    if
        (clave.length<5){
            Swal.fire({
          type: 'error',
          title: 'Oops...',
          text: 'Contraseña no valida, debe tener minimo 5 caracteres',
          footer: ''
        });
       
        return false;
        }  
    
    
}



































    