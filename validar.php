
<?php
$correo = $_POST ['correo'];
$password = $_POST ['password'];
// CONECTAR A LA BD
$conexion = mysqli_connect ("localhost", "root", "", "sistema") or die ("No se pudo conectar a la base de datos");
$consulta = "SELECT * FROM registrarse WHERE correo='$correo' and clave='$password'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_num_rows($resultado);

if($filas>0){
    header("location:olvido.html");
}else {
    echo "Error de autenticación";
}

// VALIDACION ADMINISTRADOR
if($correo==="nelson@eventlite.com" && $password==="NelsonDJCR"){
    header("location:dashboard/index.html");
}
//  VALIDACION BARMAN
if($correo==="erika@eventlite.com" && $password==="angel"){
    header("location:barman/index.html");
}
mysqli_free_result ($resultado);
mysqli_close($conexion  )
?>
<?php

    if(isset($_POST['btn'])){

        $correo_admin = $_POST ['correo'];
        $password_admin = $_POST ['password'];

    }
?>