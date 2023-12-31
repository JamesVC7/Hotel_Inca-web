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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

<body>
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
                            <li><a href="habitaciones.php" class="nav_link">Habitaciones</a></li>
                            <li><a href="servicios.php" class="nav_link">Servicios</a></li>
                            <li><a href="contacto.php" class="nav_link">Contacto</a></li>
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
                    
                </div> 
                <div class="carousel-caption2">
                        <h2><br><br>Habitaciones</h2>
                        <h4>
                        <font color="white"> <a href="index.php"> <font color="white">&nbsp;Inicio</a></font> >> Habitaciones</font>
                        </h4>
                </div>
            </div>
    </header>

    <h2 align="center">
        <font face="Cambria" color="white">¡Explora nuestras habitaciones!</font>
    </h2>

    <section id="cards">
        <div class="card">
            <img src="./img/habitacion individual.jpg">
            <h3>Habitacion individual estandar</h3>
            <p>Esta habitacion individual cuenta con entrada privada, vistas al jardín y un patio,
                recomendable para una sola persona, ademas de tener acceso a los servicios dispuestos en el hotel.
            </p>
            <div class="botones">
            <a href="habitacion1.html">Ver más</a>
            <a href="reservaciones.html">Reservar</a>
            </div>
        </div>
        <div class="card">
            <img src="./img/habitacion doble.jpg">
            <h3>Habitacion doble estandar</h3>
            <p>Esta habitación doble cuenta con patio, entrada privada y TV por cable, recomendable para un maximo
                de 3 personas (2 adultos y un niño), ademas de tener acceso a todos los servicios dispuestos en el hotel.
            </p>
            <div class="botones">
            <a href="habitacion2.html">Ver más</a>
            <a href="reservaciones.html">Reservar</a>
            </div>
        </div>
        <div class="card">
            <img src="./img/habitacion doble2.jpg">
            <h3>Habitacion doble con balcon</h3>
            <p>Esta habitación doble cuenta con patio, entrada privada y TV por cable y un balcon con vista al jardin, 
                recomendable para un maximo de 3 personas (2 adultos y un niño), ademas de tener acceso a todos los servicios dispuestos en el hotel.
            </p>
            <div class="botones">
            <a href="habitacion3.html">Ver más</a>
            <a href="reservaciones.html">Reservar</a>
            </div>
        </div>
    </section>
    <br>
    <section id="cards2">
        <div class="card2">
            <img src="./img/habitacion familiar.jpg">
            <h3>Habitacion familiar estandar</h3>
            <p>Esta habitación familiar ofrece vistas a la montaña, entrada privada y patio. Recomendado para 4
                personas maximo, ademas de tener acceso a todos los servicios dispuestos en el hotel.
            </p>
            <div class="botones">
            <a href="habitacion4.html">Ver más</a>
            <a href="reservaciones.html">Reservar</a>
            </div>
        </div>
        <div class="card2">
            <img src="./img/habitacion matrimonial.jpg">
            <h3>Habitacion matrimonial</h3>
            <p>Esta habitacion matrimonial cuenta con entrada privada, vistas al jardín y un patio,
                recomendable para parejas, ademas de tener acceso a los servicios dispuestos en el hotel.
            </p>
            <div class="botones">
            <a href="habitacion5.html">Ver más</a>
            <a href="reservaciones.html">Reservar</a>
            </div>
        </div>
    </section>
    <br>
    <footer class="pie-pagina">
        <div class="grupo-2">
            <small>&copy; 2022 <b>Hotel Inca</b> - Todos los Derechos Reservados. Desarrollado por el grupo N°2.</small>
        </div>
    </footer>
</body>

</html>