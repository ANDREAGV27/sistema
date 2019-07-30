<?php
if(isset ($_GET['editar'])){
    $conexion = mysqli_connect ("localhost", "root", "", "sistema") or die ("No se pudo conectar a la base de datos");

    $editar_id = $_GET['editar'];


    $consulta = "SELECT * FROM registrarse WHERE idPersonas='$editar_id'";

    $ejecutar = mysqli_query($conexion, $consulta); 

    $fila=mysqli_fetch_array($ejecutar);

    $idPersonas = $fila['idPersonas']; 
    $nombre = $fila['nombre']; 
    $apellido = $fila['apellido']; 
    $correo = $fila['correo'];
    $clave = $fila['clave'];
    $telefono = $fila['telefono'];
}
?>
<br>
<style>
    *{
        font-family: cursive;
    }
    .caja-formulario{
        background-image: url(../img/textura_formulario.png);
        width: 400px;  
        position: fixed;
        left: 36%;
        border: 5px solid black;
    }
    .caja-titulo{
        background: #444359;
        color: white;
        width: 100%;
        text-align: center;
    }
    .form{
        text-align: center;
    }
    .label{
        font-size: 1.2em;
        color: black;

    }
    .input{
        width: 80%;
        padding: 5px;
    }
    .btn-sub{
        width: 60%;
        background: #02D549;
        font-size: 1em;
        color: white;
        border: 1px solid black;
        border-radius:15px;
        cursor:pointer;
    }
    .btn-sub:hover{
        background: #7DF7A6;
        color:black;
    }
    .btn-cancel:hover{
        background: #FA2828;
        color:black;
    }
    .btn-cancel{
        background: red;
        padding: 2px 53px 2px 53px;
        text-decoration: none;
        color: white;
        font-size: 1.2em;
        border: 1px solid black;
        border-radius:15px;
        cursor:pointer;
    }
    .input_pass{
        padding: 5px;
        width: 60%;
    }
    .input_mostrar{
        width: 20%;
        padding: 5px;
    }

</style>
<script>
        function mostrarContrasena(){
            var tipo = document.getElementById("password");
            if(tipo.type == "password"){
                tipo.type = "text";
            }else{
                tipo.type = "password";
            }
        }
    </script>
<div class="caja-formulario">
    <div class="caja-titulo">
        <h1>ACTUALIZAR DATOS</h1>

    </div>

    <form method="post" action="" class="form" >


        <label class="label" for="">Nombre</label> <br>
        <input class="input" type="text" name="nombre" value="<?php echo $nombre; ?>"><br>
        <label class="label" for="">Apellido</label> <br>
        <input class="input" type="text" name="apellido" value="<?php echo $apellido; ?>"><br>
        <label class="label" for="">Correo</label> <br>
        <input class="input" type="text" name="correo" value="<?php echo $correo; ?>"><br>
        <label class="label" for="">Clave</label> <br>


        <input class="input_pass" type="password" name="password" id="password" value="<?php echo $clave; ?>">

        <button class="input_mostrar" type="button" onclick="mostrarContrasena()">Mostrar</button><br><br>


        <label class="label" for="">Teléfono</label> <br>
        <input class="input" type="text" name="telefono" value="<?php echo $telefono; ?>"><br>
        <br>
        <input  class="btn-sub" type="submit" name="actualizar" value="ACTUALIZAR"/>
        <br>
        <br>
        <a class="btn-cancel" href="usuarios.php">Cancelar</a>
    </form>



</div> 



<?php 
if(isset($_POST['actualizar'])){

    $actualizar_nombre = $_POST['nombre'];
    $actualizar_apellido = $_POST['apellido'];
    $actualizar_correo = $_POST['correo'];
    $actualizar_clave = $_POST['clave'];
    $actualizar_telefono = $_POST['telefono'];

    $actualizar = "UPDATE registrarse SET 
    nombre='$actualizar_nombre', 
    apellido='$actualizar_apellido',
    correo='$actualizar_correo',
    clave='$actualizar_clave',
    telefono='$actualizar_telefono' 

    WHERE idPersonas='$editar_id'";

    $ejecutar = mysqli_query($conexion, $actualizar);

    if($ejecutar){

        echo "<script>alert('Datos actualizados!')</script>";
        echo "<script>window.open('usuarios.php','_self')</script>";
    }
}
?> 