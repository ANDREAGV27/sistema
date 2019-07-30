

function iniciar(){
    var correo, password;
    correo = document.getElementById("correo").value;
    password = document.getElementById("password").value;


    if  (correo==="" || password===""){
        
            Swal.fire({
              type: 'error',
              title: 'Erro...',
              text: 'Complete todos campos para continuar',
              footer: '<p class="olvido">¿No tienes cuenta?<a href="registrarse.html">¡Registrate ahora!</a></p>'
            })
            return false;
        
        }

        
    
    
    
     
}
