<!DOCTYPE html>
<html lang="es">
    <head>
        <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0"/>
        <meta charset="UTF-8"/>
        <title>Registrarse</title>
        <link rel="stylesheet" href="assent/css/registrarse.css"/>
        <link rel="stylesheet" href="assent/css/font.css"/>
        <link rel="stylesheet" href="assent/css/estilos.css"/> 
        <script src="assent/js/validacion/formulario/validar.js"></script>  
        <link rel="stylesheet" href="assent/plugins/animate.css/animate.css"/>
        <link rel="stylesheet" href="assent/plugins/sweetAlert2/sweetalert2.min.css"/>
    </head>
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "sistema") or die ("No conecto");
    ?>
    <body>
        <!--    Header  -->
        <header class="main-header">
            <section>
                <div class="logo-contenedor-registrarse">
                    <img src="assent/img/logo-florentina.png" alt="" class="logo-florentina-register"/>    
                </div>
                <div class="contenedor-datos-registrarse">
                    <p class="phone-registrarse data">
                        <span class="icon-phone">999-9999</span>
                    </p>
                    <p class="addres-registrarse data">
                        <span class="icon-location">Bogotá D.C., Colombia</span>
                    </p>
                </div>   
                <h1 class="title-registrarse">
                    Registrate para mejor contenido
                </h1>
                <div class="banner-registrarse">
                    <img src="assent/img/banner.jpg" alt="" class="banner-registrar-img"/>
                </div>
            </section>        
        </header>
        <!--    Header -->
        <!--    Barra Local-->
        <nav class="main-nav">
            <div class="container container--flex">  
                <span class="icon-menu" id="btnmenu"></span>
                <ul class="menu" id="menu">
                    <li class="menu__item"><a href="index.html" class="menu__link ">Inicio</a></li>
                    <li class="menu__item"><a href="nosotros.html" class="menu__link">Nosotros</a></li>
                    <li class="menu__item"><a 
                                              href="galeria.html" class="menu__link">Galería</a></li>
                    <li class="menu__item"><a href="contacto.html" class="menu__link">Contactenos</a></li>
                </ul>          

            </div>
        </nav>   
        <!--Formulario -->
        <div class="caja-padre-register">   
            <div class="caja-formulario">
                <div class="caja-barra">   
                    <div class="barra-superior">
                        <h1>¡Regístrate!</h1>
                    </div>  
                </div>
                <div class="caja-padre_img">
                    <div class="before_img-register">
                        <img class="img-register" src="assent/img/banner_iniciar.jpg"/>
                    </div>    

                    <form action="registrarse.php" action="enviar.php" method="post" class="form-register" onsubmit="return validar();">
                        <h2 class="form__titulo">Formulario de Registro</h2>
                        <div class="contenedor-inputs">
                            <input type="text" id="nombre" name="nombre" placeholder="Nombre" class="input-48 input primary" onkeypress="return sololetras(event)" onpaste="return false" />

                            <input type="text" id="apellido" name="apellido" placeholder="Apellido" class="input-48 input primary" onkeypress="return sololetras(event)" onpaste="return false" />

                            <input type="email" id="correo" name="correo" placeholder="Correo" class="input-100 input"  />

                            <input type="password" id="clave" name="clave" placeholder="Contraseña" class="input-48 input"  />

                            <input type="password" id="claveconfirmar" name="clavecom" placeholder="Confirmar contraseña" class="input-48 input"  />

                            <input type="text" id="telefono" name="telefono" placeholder="Teléfono" class="input-100 input"  />

                            <input type="submit" value="Registrar" class="btn-enviar" name="btn"/>

                            <p class="form__link">¿Ya tienes una cuenta?<a href="iniciar-sesion.html">Ingresa aquí</a></p>
                        </div>
                    </form>
                </div>
            </div>
            <div class="caja-barra-bottom">
                <div class="barra-inferior">
                    <h1 class="txt-barra_inferior">.</h1>
                </div>
            </div>
        </div>    
        <!--    Formulario -->
        <!--    Botón Volver   -->
        <div class="caja-btn-volver">
            <button>
                <a class="btn-volver" href="index.html">Volver</a> 
            </button>
        </div>
        <!--    Botón Volver   -->
        <footer class="main-footer">
            <div class="container container--flex">
                <div class="column column--33">
                    <h2 class="column__title">¿Por qué visitarnos?</h2>
                    <p class="column__txt why">Brindamos el mejor servicio en el montaje y logística de eventos en Bogota, contamos con un gran repertorio de artistas y shows según el gusto musical de cada cliente, atención personalizada y profesionalismo.</p>
                </div>
                <div class="column column--33">
                    <h2 class="column__title">Contactanos</h2>
                    <p class="column__txt"><a href="" class="icon-location"></a>Av Primera de Mayo N° 69-38. </p>
                    <p class="column__txt"><a href="" class="icon-phone"></a>317 368 8389</p>
                    <p class="column__txt"><a href="" class="icon-mail"></a> escorpionproducciones2017@gmail.com </p>
                </div>
                <div class="column column--33">
                    <h2 class="column__title">Siguenos en:</h2>

                    <p class="column__txt"><a href="https://www.facebook.com/sp.sas.583" class="icon-facebook">Facebook</a> </p>

                    <p class="column__txt"><a href="" class="icon-twitter">Siguenos en Twitter</a> </p>
                    <p class="column__txt"><a href="" class="icon-youtube"> Visita nuestro canal en YouTube</a></p>
                </div>
                <p class="copy">© 2019 EVENTLITE || SCORPION PRODUCCIONES®</p>
            </div>
        </footer>

        <?php
        $nombre = $_POST["nombre"];
        $correo = $_POST["correo"];

        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;

        require 'PHPMailerr/Exception.php';
        require 'PHPMailerr/PHPMailer.php';
        require 'PHPMailerr/SMTP.php';


        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->CharSet =  'UTF-8';
            $mail->SMTPDebug = 0;                                       // Enable verbose debug output
            $mail->isSMTP();                                            // Set mailer to use SMTP
            $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = 'eventlite.software@gmail.com';                     // SMTP username
            $mail->Password   = 'PASSWORD001';                               // SMTP password
            $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
            $mail->Port       = 587;                                    // TCP port to connect to

            // Quien envía
            $mail->setFrom('eventlite.software@gmail.com', $nombre);
            // ¿A qué correo se envia?
            $mail->addAddress($correo);  
            //
            //    // Attachments       
            //    $mail->addAttachment('assent/img/bienvenido.jpg', 'Binevenido');    

            // Content
            $mail->isHTML(true);     
            // TITULO
            $mail->Subject = 'Bienvenido';

            $mail->Body    = ' Te damos la bienvenida <br>Tendras los siguientes beneficios:<br>-Descuentos<br>-Promociones<br>-Regalos<br>-Beneficios';
            //    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            $mail->send();

        } catch (Exception $e) {
            echo "Error: {$mail->ErrorInfo}";
        }

        
        

        
        
        
        ?>
        <?php
        if(isset($_POST['btn'])){

            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $correo = $_POST['correo'];
            $clave = $_POST['clave'];
            $telefono = $_POST['telefono'];


            $insertar = "INSERT INTO registrarse (nombre, apellido, correo, clave, telefono) values ('$nombre', '$apellido', '$correo', '$clave', '$telefono')";


            $verificar_usuario = mysqli_query ($conexion, "SELECT * FROM registrarse WHERE correo = '$correo'");
            if(mysqli_num_rows($verificar_usuario) > 0 ){
                echo "<script>  alert('El ususario ya esta registrado');</script> ";
                exit;
            }



            $ejecutar = mysqli_query ($conexion, $insertar);

            if($ejecutar){
                echo "<script>  alert('Registro exitoso') </script> ";
            }
        } 
        ?>





        <script src="assent/js/form.js"></script>
        <script src="assent/js/app.js"></script>
        <script src="assent/js/menud.js"></script>    
        <script src="assent/js/menu.js"></script>
        <script src="assent/jquery/jquery-3.3.1.min.js"></script>
        <script src="assent/popper/popper.min.js"></script>  
        <script src="assent/plugins/sweetAlert2/sweetalert2.all.min.js"></script>
    </body>

</html>


