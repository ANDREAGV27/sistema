<!DOCTYPE html>
<html lang="es">
    <?php
    $conexion = mysqli_connect ("localhost", "root", "", "sistema") or die ("No se pudo conectar a la base de datos");
    ?>
    <head>
        <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum- scale=3.0, minimum-scale=1.0"/>
        <meta charset="UTF-8"/>
        <title>Iniciar Sesión</title>

        <link rel="stylesheet" href="assent/css/iniciar-sesion.css"/>
        <link rel="stylesheet" href="assent/css/font.css"/>
        <link rel="stylesheet" href="assent/css/estilos.css"/>
        <link rel="stylesheet" href="assent/css/registrarse.css"/>

        <!--    Animaciones    -->
        <link rel="stylesheet" href="assent/plugins/animate.css/animate.css"/>
        <link rel="stylesheet" href="assent/plugins/sweetAlert2/sweetalert2.min.css"/>

    </head>
    <body>
        <!--    Header  -->
        <header class="main-header">
            <section>
                <div class="logo-contenedor-registrarse">
                    <img src="assent/img/logo-florentina.png" alt="" class="logo-florentina-register"/>    
                </div>
                <div class="contenedor-datos-registrarse">
                    <p class="phone-registrarse data">
                        <span class="icon-phone">317 368 8389</span>
                    </p>
                    <p class="addres-registrarse data">
                        <span class="icon-location">Av Primera de Mayo N° 69-38</span>
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
        <!--    Barra Local-->
        <!--    Contenido   -->
        <div class="contenedor">
            Iniciar Sesión
        </div>
        <div class="picture">
            <center>
                <div class="caja-circulo">
                    <center>
                        <div class="circulo"></div>
                        <img class="logo-user_in" src="assent/img/logo-user.png" />

                        <form action="validar.php" method="post" class="caja_formulario-iniciar"   onsubmit="return iniciar();" >

                            <input type="text" id="correo" name="correo" placeholder="Correo" class="formulario-iniciar" />
                            <input type="password" id="password" name="password" placeholder="Contraseña" class="formulario-iniciar" />
                            <br/>
                            <a class="olvido__txt" href="olvido.html">¿Olvidate tu contraseña?</a>
                            <input type="submit" value="Ingresar" name="btn" class="boton" id="btn-iniciar-sesion"/>

                        </form>                              
                    </center>
                </div>            
            </center>
            


            <div class="contenedor-img-in">
                <img class="foto" src="assent/img/banner_iniciar.jpg"/>
            </div>    
        </div>
        <div class="barra-abajo">
            <center>   
                <p class="olvido">¿No tienes cuenta?<a href="registrarse.html">¡Registrate ahora!</a></p>
            </center>
        </div>
        <!--    Contenido   -->
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

                    <p class="column__txt"><a href="" class="icon-twitter">Siguenos en Twitter</a> Siguenos en Twitter</p>
                    <p class="column__txt"><a href="" class="icon-youtube"> Visita nuestro canal en YouTube</a></p>
                </div>
                <p class="copy">© 2019 EVENTLITE || SCORPION PRODUCCIONES®</p>
            </div>
        </footer>
        
        <script src="assent/js/app.js"></script>
        <script src="assent/js/menud.js"></script>    
        <script src="assent/js/menu.js"></script>    
        <script src="assent/jquery/jquery-3.3.1.min.js"></script>
        <script src="assent/popper/popper.min.js"></script>
        <script src="assent/plugins/sweetAlert2/sweetalert2.all.min.js"></script>
        <script src="assent/js/validacion/formulario/iniciar.js"></script>

    </body>
</html>

