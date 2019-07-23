<?php

if(isset($GET['editar'])){

    $editar_usuario = $_GET['editar'];

    $consulta_usuario = "SELECT * FROM registratse WHERE id='$editar_usuario'";

    $ejecutar_usuario = mysqli_query ($conexion, $consulta_usuario);

    $fila_usuario = mysqli_fetch_array ($ejecutar_usuario);


    $nombre  = $fila_usuario ['nombre'];
    $apellido  = $fila_usuario ['apellido'];
    $correo  = $fila_usuario ['correo'];
    $clave  = $fila_usuario ['clave'];
    $telefono  = $fila_usuario ['telefono']; 
}

?>

<br>
<form method="post">

    <input type="text" name="nombre" value="<?php echo $nombre; ?>"> <br>
    <input type="text" name="apellido" value="<?php echo $apellido; ?>"> <br>
    <input type="text" name="correo" value="<?php echo $correo; ?>"> <br>
    <input type="text" name="clave" value="<?php echo $clave; ?>"> <br>
    <input type="text" name="telefono" value="<?php echo $telefono; ?>"> <br>
    <input type="submit" name="actualizar" value="Actualizar datos"> <br>
    
</form>

<?php 
	if(isset($_POST['actualizar'])){
	
		$actualizar_nombre = $_POST['nombre'];
		$actualizar_apellido = $_POST['apellido'];
		$actualizar_correo = $_POST['correo'];
		$actualizar_clave = $_POST['clave'];
		$actualizar_telefono = $_POST['telefono'];
		
		$actualizar = "UPDATE registrarse SET nombre ='$actualizar_nombre', apellido='$actualizar_apellido', correo='$actualizar_correo' , clave='$actualizar_clave', telefono='$actualizar_telefono'  WHERE id='$editar_id'";
		
		$ejecutar = mysqli_query($conexion, $actualizar);
	
		if($ejecutar){
		
		echo "<script>alert('Datos actualizados!')</script>";
		echo "<script>window.open('formulario.php','_self')</script>";
		}
	}
	
	?> 
























