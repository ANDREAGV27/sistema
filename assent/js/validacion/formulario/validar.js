// FORMULARIO DE REGISTRARSE
function validar(){

    var nombre, apellido, correo, clave, claveconfirmar, telefono, expresion;
    nombre = document.getElementById("nombre").value;
    apellido = document.getElementById("apellido").value;
    correo = document.getElementById("correo").value;
    clave = document.getElementById("clave").value;
    claveconfirmar = document.getElementById("claveconfirmar").value;
    telefono = document.getElementById("telefono").value;
    expresion = /\w+@+\w+\.+[a-z]/;



    if  (nombre==="" ||  apellido==="" || correo==="" ||  clave==="" ||  claveconfirmar==="" ||  telefono===""  ){

        Swal.fire(
            'Se detectaron campos vacios',
            'Completa todos los campos para continuar',
            'question'
        );
        return false;
    }

    else if  (clave != claveconfirmar){
        Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: 'Las contraseñas no son correctas',
            footer: ''
        });
        return false;
    } 
    //Validar correo
    // VALIDAR CANTIDAD DE CARACTERES
    // NOMBRE
    else if
        (nombre.length>=15){
            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'El nombre es muy largo, debe tener máximo 15 caracteres',
                footer: ''
            });
            return false;
        }
    else if
        (nombre.length<4){

            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'El nombre es muy corto, debe tener minimo 4 caracteres',
                footer: ''
            });        
            return false;
        }
    // apellido
    else if
        (apellido.length>=15){
            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'El apellido es muy largo, debe tener máximo 15 caracteres',
                footer: ''
            });
            return false;
        }
    else if
        (apellido.length<5){
            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'El apellido es muy corto, debe tener minimo 5 caracteres',
                footer: ''
            });
            return false;
        }
    // CORREO
    // validar que es un correo
    else if  (!expresion.test(correo)){
        Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: 'Correo no encontrado, verifique nuevamente',
            footer: ''
        });
        return false;
    }
    else if
        (correo.length>=30){
            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'El correo ingresado es muy extenso',
                footer: ''
            });
            return false;
        }

    else if
        (correo.length<8){
            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'El correo ingresado es muy corto',
                footer: ''
            });
            return false;
        }
    // clave
    else if
        (clave.length>=20){
            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'Las contraseñas deben tener máximo 20 caracteres',
                footer: ''
            });
            return false;
        }
    else if
        (clave.length<5){
            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'La contrseña debe tener minimo 5 caracteres',
                footer: ''
            });
            return false;
        }  
    //Validar que es un número de teléfono
    else if  (isNaN(telefono)){
        Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: 'No se ingreso un número teléfonico',
            footer: ''
        });
        return false;
    }
    // telefono
    else if
        (telefono.length===10 || telefono.length===7 ){
            return true;
        }else{
            Swal.fire({
                type: 'error',
                title: 'Oops...',
                text: 'El teléfono no es valido recuerde colocar un teléfono fijo o celular',
                footer: ''
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




































