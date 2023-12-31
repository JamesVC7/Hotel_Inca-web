<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/estilos2.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- CHATBOT -->
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

<body style="background-color: #51555a82;">

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


        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Envoltorio para objetos -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="banner"></div>
                    <div class="carousel-caption">
                        <h2 class="animated bounceInRight" style="animation-delay: 1s">Bienvenido al <span>Hotel Inca</span></h2>
                        <h3 class="animated bounceInLeft" style="animation-delay: 2s">Uno de los mejores hoteles del Perú</h3>
                        <p class="animated bounceInRight" style="animation-delay: 3s"><a href="reservaciones.html">Reservar</a></p>
                    </div>
                </div>
                <div class="item">
                    <div class="banner2"></div>
                    <div class="carousel-caption">
                        <h2 class="animated slideInDown" style="animation-delay: 1s">Bienvenido al <span>Hotel Inca</span></h2>
                        <h3 class="animated fadeInUp" style="animation-delay: 2s">Uno de los mejores hoteles del Perú</h3>
                        <p class="animated zoomIn" style="animation-delay: 3s"><a href="contacto.html">Contactanos</a></p>
                    </div>
                </div>
                <div class="item">
                    <div class="banner3"></div>
                    <div class="carousel-caption">
                        <h2 class="animated zoomIn" style="animation-delay: 1s">Bienvenido al <span>Hotel Inca</span></h2>
                        <h3 class="animated fadeInLeft" style="animation-delay: 2s">Uno de los mejores hoteles del Perú</h3>
                        <p class="animated zoomIn" style="animation-delay: 3s"><a href="reservaciones.html">Reservar</a></p>
                    </div>
                </div>

            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </header>

    <!-- Busquedas recientes -->
    <h2 id="ht">Las reservas mas frecuentes:</h2>
    <div class="contect">
        <div class="frecuente">
            <figure>
            <img src="./img/habitacion familiar.jpg" usemap="#hf"></figure>
            <map name="hf">
                <area shape="rect" coords="1,89,1196,2" href="habitacion4.html" alt="">
            </map>
            <div class="textos">
                <h3>Habitacion Familiar Estandar</h3>
                <li>Estrellas: <i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i></li>
                <li>Disponibilidad: Activa</li>
                <li>Servicio al cuarto: Sí</li>
                <li>Precio: S/442</li>
            </div>
        </div>

        <div class="frecuente">
            <figure>
            <img src="./img/habitacion doble.jpg" usemap="#hd"></figure>
            <map name="hd">
                <area shape="rect" coords="1,89,1199,5" href="habitacion2.html" alt="">
            </map>
            <div class="textos">
                <h3>Habitacion Doble Estandar</h3>
                <li>Estrellas: <i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i></li>
                <li>Disponibilidad: Activa</li>
                <li>Servicio al cuarto: Sí</li>
                <li>Precio: S/342</li>
            </div>
        </div>


        <div class="frecuente">
            <figure>
            <img src="./img/habitacion individual.jpg" usemap="#hi"></figure>
            <map name="hi">
                <area shape="rect" coords="1,0,1277,71" href="habitacion1.html" alt="">
            </map>
            <div class="textos">
                <h3>Habitacion Individual Estandar</h3>
                <li>Estrellas: </i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i><i class="fa-regular fa-star"></i></li>
                <li>Disponibilidad: Activa</li>
                <li>Servicio al cuarto: Sí</li>
                <li>Precio: S/242</li>
            </div>
        </div>
    </div>

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
            <small>&copy; 2022 <b>Hotel Inca</b> - Todos los Derechos Reservados. Desarrollado por el grupo N°2.</small>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Icons -->
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
</body>

</html>