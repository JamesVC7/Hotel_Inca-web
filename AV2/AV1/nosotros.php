<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" href="css/estilos2.css">
    <link rel="stylesheet" href="css/styleNosotros.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
        window.addEventListener('mouseover', initLandbot, { once: true });
        window.addEventListener('touchstart', initLandbot, { once: true });
        var myLandbot;
        function initLandbot() {
            if (!myLandbot) {
                var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
                s.addEventListener('load', function () {
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
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
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
                <h2><br><br>Nosotros</h2>
                <h4>
                    <font color="white"> <a href="index.php">
                            <font color="white">&nbsp;Inicio
                        </a></font> >> Nosotros</font>
                </h4>
            </div>
        </div>

    </header>

    <hr color="#172130">
    <br>

    <!------------ TABLA 1 ------------------>

    <div id="divr">
        <div id="contdiv">
            <div id="div">
                <h2>¿Quienes somos?</h2>
                <div id="divHotel">
                    <div class="fh">
                        <img src="./img/hotel-inca3.jpg">
                    </div>
                    <div class="td1">
                        <p>El Hotel Inca se encuentra en Chavín de Huantar y ofrece jardín y WiFi gratuito.
                            Este hotel de 3 estrellas cuenta con mostrador de información turística.
                            Hay aparcamiento privado gratuito y servicio de alquiler de bicicletas.
                        </p>
                    </div>
                </div>
            </div>
            <div class="estandar">
                <div class="estext">
                    <h2>
                        <font face="consolas">¿Porque elegir el hotel Inca?</font>
                    </h2><br>
                    <i class="fas fa-check"></i>&nbsp;Nuestro hotel proporciona un alojamiento ideal para nuestros
                    visitantes. <br><br>
                    <i class="fas fa-check"></i>&nbsp;El hotel goza de una excelente ubicación, quedando cerca a zonas
                    turísticas.<br><br>
                    <i class="fas fa-check"></i>&nbsp;Contamos con diversos servicios para la comodidad de nuestros
                    clientes.<br><br>
                </div>
                <figure id="imgD">
                    <img src="./img/habitacion doble.jpg">
                </figure>
            </div>
        </div>

        <div class="vxm">
            <h2>Vision</h2>
            <p>Aspiramos a ser reconocidos regionalmente como uno de los grupos de hospitalidad mejor administrados.</p>
            <h2>Mision</h2>
            <p>Nuestra misión es satisfacer las necesidades de todos nuestros huéspedes, ofreciendo un servicio de
                calidad.</p>
        </div><br>
    </div>
    <hr color="black">
    <div class="fest">
        <h2>Dias festivos en chavin de Huantar</h2>
        <p>Ademas, disfrutaras de los dias festivos que se realizan cerca del "Hotel inca".
            Vizualiza en el calendario los festivales y haz tu reserva para esos dias.
        </p>
    </div>

    <div class="Galer">
        <div class="GaleryFest">
            <div class="Fest1">
                <img src="./img/festival1.jpg" class="img1">
                <h3>Evento patronal</h3>
                <p>La fiesta del Señor de los Milagros de San Clemente es una festividad tradicional que se da en el
                    poblado de San Clemente,
                    distrito de Bellavista de la Unión dentro de la provincia de Sechura.
                </p>
            </div>
            <div class="fest2">
                <img src="./img/festival2.jpg" class="img1">
                <h3>Aniversario</h3>
                <p>La fiesta patronal de San Nicolás, es una celebración que se lleva a cabo en el distrito de San
                    Nicolás, dentro de la provincia de Rodríguez de Mendoza,
                    en el departamento y región de Amazonas.
                </p>
            </div>

            <div class="fest3">
                <img src="./img/festival3.jpg" class="img1">
                <h3>Danza tipica</h3>
                <p>El Festival Sine Do End Dari se crea con la finalidad de ir al rescate de las tradiciones que la
                    tierra de Madre Dios tiene presente.
                    El nombre de este festival también puede encontrarse con la esc...
                </p>
            </div>

        </div>
        <div class="calendario">
            <iframe
                src="https://calendar.google.com/calendar/embed?height=260&wkst=1&bgcolor=%23ffffff&ctz=America%2FLima&showTitle=0&showPrint=0&showCalendars=1&showTz=0&showTabs=1&src=amFtZXN2YzIwMDJAZ21haWwuY29t&src=NGMyYWM2ZTlmMDcwNDFkZDJmNGJjMmNlMzg3YjRlYjFkMzQwMDQ0OTBjZDU2MGFlMTY5MWNkYWZlMjc1YThlMEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&src=YWRkcmVzc2Jvb2sjY29udGFjdHNAZ3JvdXAudi5jYWxlbmRhci5nb29nbGUuY29t&src=ZXMucGUjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%23039BE5&color=%23F4511E&color=%2333B679&color=%230B8043"
                style="border:solid 1px #777" width="280" height="260" frameborder="0" scrolling="no"></iframe>
        </div>
    </div>

    <div class="comentarios">

        <h2>Comentarios:</h2>
        <div class="coment">
            <div>
                <h3><i class="fa-solid fa-user"></i> -Rossmery <img src="./img/peru.png"></h3>
                <h5>Excelente servicio</h5>
                <i class="fa-regular fa-star" id="estrella"></i>
                <i class="fa-regular fa-star" id="estrella"></i>
                <i class="fa-regular fa-star" id="estrella"></i>
                <i class="fa-regular fa-star" id="estrella"></i> Hace 3 meses
            </div>

            <div id="c1">
                <h3><i class="fa-solid fa-user"></i> -Carlos <img src="./img/peru.png"></h3>
                <h5>Muy acogedor y limpio</h5>
                <i class="fa-regular fa-star" id="estrella"></i>
                <i class="fa-regular fa-star" id="estrella"></i>
                <i class="fa-regular fa-star" id="estrella"></i>
                <i class="fa-regular fa-star" id="estrella"></i> Hace 1 mes
            </div>
        </div>
    </div><br>
    <footer class="pie-pagina">
        <div class="grupo-2">
            <small>&copy; 2022 <b>Hotel Inca</b> - Todos los Derechos Reservados. Desarrollado por el grupo N°2.</small>
        </div>
    </footer>

</body>

</html>