<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/estilos2.css"> 
    <link rel="stylesheet" href="css/servicios.css">
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
                    <a class="navbar-brand" href="index.html">Hotel Inca</a>
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
                    <h2><br><br>Servicios</h2>
                    <h4>
                    <font color="white"> <a href="index.php"> <font color="white">&nbsp;Inicio</a></font> >> Servicios</font>
                    </h4></div>
        </div>
        
    </header>
    
    <section class="containers">
        <div class="items item1" style="text-align: center;">
            SERVICIOS DE HABITACION 
            LAS 24 HORAS
            
        </div>
        <div class="items item2" style="text-align: center;">
            SERVICIOS DE RESTAURANTE
        </div>
        <div class="items item3" style="text-align: center;">
            LAVANDERIA
        </div>
        <div class="items item4" style="text-align: center;">
            ESTACIONAMIENTO
        </div>
    </section>
    <br>

    <div class="separacion">
        <img src="./img/inca.png" alt="">
        
    </div>

    <h2 style="font-size: 50px;line-height: 60px;text-align: center" >
        <font face="font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif" color="white">
            Servicios del Hotel
        </font>
    </h2>

    <section class="containers2">
        <div class="id">
            <img src="./img/campana (1).png" class="img" alt="">         
            <h2 style="text-align: center; color: white;">Servicio a habitación</h2>
            <p style="text-align: center; color: white;">
                Consiéntase durante el día pidiendo el servicio de alimentos a su habitación, nuestro personal le atenderá con gusto para que usted se sienta como en casa. Servicio las 24 horas
            </p>
            
        </div>
        <div class="id">
            <img src="./img/wifi (1).png" class="img" alt="">         
            <h2>Internet Inalámbrico</h2>
            <p>
                Contamos con el mejor acceso a Internet de Banda Ancha durante las 24hr todos los días del año, lo cual le permitirá transferir archivos, comunicarse mediante video conferencia
            </p>
        </div>
        <div class="id">
            <img src="./img/jacuzzi (1).png" class="img" alt="">         
            <h2>Jacuzzi en cada cuarto</h2>
            <p>
                Es una invitación a combatir el stress - novedoso sistema de hidromasajes que le hará relajarse de todo el estrés personal que posea, nuestro jacuzzi esta implementado adecuadamente.
            </p>
        </div>
        <div class="id">
            <img src="./img/plato (1).png" class="img" alt="">        
            <h2>Restaurante</h2>
            <p>
                Nuestro Hotel cuenta con un restaurant - Bar, donde le brindamos tragos exóticos y típicos del Perú, así como deliciosos platillos nacionales e internacionales
            </p>
            
        </div>
        <div class="id">
            <img src="./img/taxi (1).png" class="img" alt="">        
            <h2>Recojo de Vuelo o Viaje</h2>
            <p>
                Nuestro servicios de hotel te brinda la opción para que nosotros mismos te recojamos del vuelo o lugar donde estés por un cargo adicional
            </p>
            
        </div>
        <div class="id">
            <img src="./img/estacionamiento (2).png" class="img" alt="">
            <h2>Estacionamiento</h2>
            <p>
                Nuestro Hotel cuenta con su propio lugar de estacionamiento amplio donde podrá dejar a nuestro cuidado su vehículo, podrá estar estacionado el tiempo que este en nuestro hotel
            </p>
            
        </div>    
    </section>
    <br><br><br><br><br><br>
    <footer class="pie-pagina">
        <div class="grupo-2">
            <small>&copy; 2022 <b>Hotel Inca</b> - Todos los Derechos Reservados. Desarrollado por el grupo N°2.</small>
        </div>
    </footer>
    

</body>

</html>