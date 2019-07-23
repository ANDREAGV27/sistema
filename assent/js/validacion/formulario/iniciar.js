

function iniciar(){
    var ciniciar, claveiniciar, expresion;
    ciniciar = document.getElementById("ciniciar").value;
    claveiniciar = document.getElementById("claveiniciar").value;
    expresion = /\w+@+\w+\.+[a-z]/;


    if  (ciniciar==="" || claveiniciar==="" || !expresion.test(ciniciar) || ciniciar.length>=45 || ciniciar.length<8){
        
            Swal.fire({
              type: 'error',
              title: 'Oops...',
              text: 'El usuario y la contraseña son incorrectos, intenta nuevamente',
              footer: '<p class="olvido">¿No tienes cuenta?<a href="registrarse.html">¡Registrate ahora!</a></p>'
            })
            return false;
        
        }

        
    
    
    
     
}
