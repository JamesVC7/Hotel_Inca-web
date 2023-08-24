<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" href="css/estilos2.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="./js/menu.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script> 
    <script>
        window.addEventListener('mouseover', initLandbot, { once: true });
        window.addEventListener('touchstart', initLandbot, { once: true });
        var myLandbot;
        function initLandbot() {
          if (!myLandbot) {
            var s = document.createElement('script');s.type = 'text/javascript';s.async = true;
            s.addEventListener('load', function() {
              var myLandbot = new Landbot.Livechat({
                configUrl: 'https://storage.googleapis.com/landbot.online/v3/H-1400375-2ZENQ6TETF3NAVOM/index.json',
              });
            });
            s.src = 'https://cdn.landbot.io/landbot-3/landbot-3.0.0.js';
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
          }
        }
    </script>

<?php
session_start();
?>

</head>

<body class="back">
    <header id="head">
        <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Hotel Inca</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php" class="nav_link">Inicio</a></li>
                        <li><a href="nosotros.php" class="nav_link">Nosotros</a></li>
                        <li><a href="habitaciones.php" class="nav_link">habitaciones</a></li>
                        <li><a href="servicios.php" class="nav_link">servicios</a></li>
                        <li><a href="contacto.php" class="nav_link">contacto</a></li>
                        <?php
                        // Verifica si el usuario está autenticado
                        if (isset($_SESSION['id'])) {
                            echo '<li><a href="startbootstrap-sb-admin-gh-pages/startbootstrap-sb-admin-gh-pages/index.php" class="nav_link">Admin</a></li>';
                        }
                        ?>
                        <!-- botones de login y registro -->

                        <li><a href="login.php" class="boton efecto">Iniciar sesion</a></li>
                        <li><a href="registrarse.html" class="boton2 efecto2">Registrarse</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="item active">
            <!-- Indicators -->
            <div class="carousel-caption2">
                    <h2><br><br>Contacto</h2>
                    <h4>
                    <font color="white"> <a href="index.html"> <font color="white">&nbsp;Inicio</a></font> >> Contacto</font>
                    </h4></div>
        </div>
        
    </header>

    <h2>
        <font face="georgia" color="white">&nbsp;Ponerse en contacto</font>
    </h2>
    <p>
        <font color="white">&nbsp;Ingrese sus datos para poder contactarnos. Estamos prestos a responder cualquier
            consulta.</font>
    </p>
    <!-- Formulario -->
    <div class="fcontent">
        <form action="php/Contacto.php" method="post" class="formu">
            <fieldset id="field">
                <legend>
                    <font face="arial black" color="white">Contactenos</font>
                </legend>
                <input type="text" name="nombre" id="" size="23" placeholder="Ingrese su nombre y apellidos">
                <br><br>
                <input type="email" name="correo" id="" placeholder="Ingrese su correo">
                <br><br>
                <input type="text" name="telefono" id="" placeholder="Ingrese su telefono">
                <br><br>
                <input type="text" name="asunto" id="" placeholder="Asunto">
                <br><br>
                <label for="">
                    <font color="white">Comentarios</font>
                </label><br>
                <textarea name="textArea" id="text" cols="30" rows="10"></textarea><br>
                <input type="submit" value="Enviar">
            </fieldset>
        </form>
        <div class="textf">
            <div class="textforum">
                <h3>
                    <font face="comic sans ms">Datos de contacto</font>
                </h3>
                <p>Email: ReservasHotelesInca.com</p>
                <p>Telefono: 943 495 886</p>
                <p>WhatsApp: +51 976 899 837</p>
                <p>Direccion: Jr.Wiracocha #170</p>
            </div>

        </div>
        <div class="mapa">
            <h3>
                <font face="tahoma" color="white">Ubicanos aqui</font>
            </h3>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d983.5187391033714!2d-77.17898657085203!3d-9.588807477202948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91a8fe114a86d5ab%3A0xdb7d4f8602cebb18!2sHotel%20Inca!5e0!3m2!1ses!2spe!4v1663202169168!5m2!1ses!2spe"
                width="380" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <br>
        <!--::::Pie de Pagina::::::-->
        <footer class="pie-pagina">
            <div class="grupo-1">
                <div class="box">
                    <figure>
                        <a href="#">
                            <img src="./img/HoteLogo.png" alt="Logo de SLee Dw">
                        </a>
                    </figure>
                </div>
                <div class="box-t">
                    <h2>SOBRE NOSOTROS</h2>
                    <p>Somos un acogedor hotel alejado de la ciudad, cuentas con todos los servicios necesarios para hospedarse.</p>
                    <p>En nuestro hotel usted va a pasar una grata estadía, con un trato cordial y tranquilidad absoluta.</p>
                </div>
                <div class="box-r">
                    <h2>SIGUENOS</h2>
                    <div class="red-social">
                        <a href="https://www.facebook.com/elhotelinca/" target="_blank" class="fa fa-facebook"></a>
                        <a href="https://www.instagram.com/incahotel/?hl=es-la" target="_blank" class="fa fa-instagram"></a>
                        <a href="https://mobile.twitter.com/incahotel" target="_blank" class="fa fa-twitter"></a>
                        <a href="https://www.youtube.com/watch?v=48CH6aDHX7w" target="_blank" class="fa fa-youtube"></a>
                    </div>
                </div>
            </div>
            <div class="grupo-2">
                <small>&copy; 2022 <b>Hotel Inca</b> - Todos los Derechos Reservados. Desarollado por el grupo N°2</small>
            </div>
        </footer>
        <!-- Icons -->
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
</body>

</html>