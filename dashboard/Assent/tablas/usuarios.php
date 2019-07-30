<!DOCTYPE html>
<html lang="en">
    <?php
    $conexion = mysqli_connect ("localhost", "root", "", "sistema") or die ("No se pudo conectar");
        $conexion -> set_charset("utf8");
    ?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css//estilos.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
        <link rel="stylesheet" href="../../../assent/css/font.css">

        <title>Usuarios</title>
    </head>
    <body>
        <div class="container col-sm-12">
            <div  class="table-wrapper">
                <div id="table-id" class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2><b>Lista</b> Usuarios</h2>
                        </div>
                        <div class="col-sm-6">

                        </div>
                    </div>
                </div>



                <table  id="table_id" class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>correo</th>
                            <th>Clave</th>
                            <th>Teléfono</th>
                            <th>Editar</th>
                            <th>borrar</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>

                            <?php 
                            $consulta = "SELECT * FROM registrarse";

                            $ejecutar = mysqli_query($conexion, $consulta);


                            $i = 0;

                            while ($fila = mysqli_fetch_array($ejecutar)){

                                $id = $fila ['idPersonas'];
                                $nombre = $fila ['nombre'];
                                $apellido = $fila ['apellido'];
                                $correo = $fila ['correo'];
                                $clave = $fila ['clave'];
                                $telefono = $fila ['telefono'];
                                $i ++;


                            ?>

                            <td> <?php echo $id ?></td>
                            <td> <?php echo $nombre ?></td>
                            <td> <?php echo $apellido ?></td>
                            <td> <?php echo $correo ?></td>
                            <td> <?php echo $clave ?></td>
                            <td> <?php echo $telefono ?></td>
                            <td><a href="usuarios.php?editar=<?php echo $id; ?>">Editar</a></td>
                            <td><a href="usuarios.php?borrar=<?php echo $id; ?>">Borrar</a></td>

                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!--        EDITAR     -->


        <?php

        if(isset($_GET['editar'])){
            include("editar.php");
        }

        ?>




        <!--         BORRAR         -->
        <?php 
        if(isset($_GET['borrar'])){

            $borrar_id = $_GET['borrar'];

            $borrar = "DELETE FROM registrarse WHERE idPersonas='$borrar_id'";

            $ejecutar = mysqli_query($conexion,$borrar); 

            if($ejecutar){

                echo "<script>alert('El usuario ha sido borrado!')</script>";
                echo "<script>window.open('usuarios.php','_self')</script>";
            }
        }
        ?>



        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
        <script src="js//orden-tabla.js"></script>
        <script src="js//tabla.js"></script>
        <script src="js//descarga-bot.js"></script>
        <script type="text/javascript"  src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script type="text/javascript"  src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript"  src="https://datatables.net/extensions/buttons/examples/initialisation/export.html"></script>
        <script type="text/javascript"  src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
        <script type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>




    </body>
</html>