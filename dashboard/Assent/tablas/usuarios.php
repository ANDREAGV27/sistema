<!DOCTYPE html>
<html lang="en">
    <?php
    $conexion = mysqli_connect ("localhost", "root", "", "sistema") or die ("No se pudo conectar");
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
                            $sql = "SELECT * FROM registrarse";
                            $resultado = mysqli_query($conexion, $sql);


                            while ($mostrar = mysqli_fetch_array($resultado)){
                            ?>
                            <td> <?php echo $mostrar ['idPersonas'] ?></td>
                            <td> <?php echo $mostrar ['nombre'] ?></td>
                            <td> <?php echo $mostrar ['apellido'] ?></td>
                            <td> <?php echo $mostrar ['correo'] ?></td>
                            <td> <?php echo $mostrar ['clave'] ?></td>
                            <td> <?php echo $mostrar ['telefono'] ?></td>

                            <td>
                                <a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i><br></a>

                            </td>
                            <td>
                                <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i><br></a>
                            </td>

                        </tr>
                        <?php } ?>
                    </tbody>


                </table>

            </div>
        </div>






        <!-- eliminar Modal HTML -->
        <div id="deleteEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">						
                            <h4 class="modal-title">Delete Event</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">					
                            <p>Are you sure you want to delete these Records?</p>
                            <p class="text-warning"><small>This action cannot be undone.</small></p>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </div>
                    </form>
                </div>
            </div>
        </div>



        <!-- Editar evento, Modal HTML -->
        <div id="editEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form >
                        <div class="modal-header">						
                            <h4 class="modal-title">Actualizar usuario</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">					

                            <div class="form-group">
                                <label>Nombre</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Apellido</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Correo</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Clave</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Teléfono</label>
                                <input type="text" class="form-control" required>
                            </div>
                        </div>  
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-info" value="Save">
                        </div>
                    </form>
                </div>
            </div>






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