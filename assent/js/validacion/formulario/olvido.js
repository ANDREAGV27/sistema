
function olvido(){
    var correoolvido, expresion;
    correoolvido = document.getElementById("correoolvido").value;
    expresion = /\w+@+\w+\.+[a-z]/;
    
    
    // correo
    // validar que es un correo
    if(correoolvido===""){
        Swal.fire({
          type: 'error',
          title: 'Oops...',
          text: 'Ingrese el correo para continuar',
          footer: ''
        });
        return false;
       }
    
    
    if  (!expresion.test(correoolvido)){
        Swal.fire({
          type: 'error',
          title: 'Oops...',
          text: 'No se encontro el correo',
          footer: ''
        });
        return false;
        }
        
    
        
    
}