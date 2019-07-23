
function seleccionar(){  
    
    var correo, telefono, cantidad, expresion;
    correo = document.getElementById("correo").value;
    telefono = document.getElementById("telefono").value;
    cantidad = document.getElementById("cantidad").value;
    expresion = /\w+@+\w+\.+[a-z]/;
    
    
    
    
    if  (cantidad==="" || telefono==="" || cantidad===""){
        Swal.fire(
          'Se detectaron campos vacios',
          'Confirme todos los datos para poder comunicarnos con tigo',
          'question'
        );
        return false;
        }
    
    
    
    // correo
    // validar que es un correo
    if  (!expresion.test(correo)){
        Swal.fire({
          type: 'error',
          title: 'Oops...',
          text: 'Correo no encontrado, verifique nuevamente',
          footer: ''
        });
        return false;
        }
    if
        (correo.length>=45){
        Swal.fire({
          type: 'error',
          title: 'Oops...',
          text: 'El correo ingresado es muy extenso!',
          footer: ''
        });
        return false;
        }
    
    if
        (correo.length<8){
        Swal.fire({
          type: 'error',
          title: 'Oops...',
          text: 'El correo ingresado debe tener minimo 8 caracteres',
          footer: ''
        });
        return false;
        }
    
    
    
    if  (isNaN(telefono)){
        Swal.fire({
          type: 'error',
          title: 'Oops...',
          text: 'No has ingresado un número',
          footer: ''
        });
        return false;
    }
    if
        (telefono.length===10 || telefono.length===7 ){
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
    alert("Gracias por su reserva\nPronto nos comunicaremos con tigo");
}



