<?php
require "./startbootstrap-sb-admin-gh-pages/startbootstrap-sb-admin-gh-pages/conexion.php";
session_start();

if (isset($_SESSION['id'])) {
    header("Location: index2.html");
            exit();
        }
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuario = mysqli_real_escape_string($conexion, $_POST['usur']);
    $password = $_POST['paswd'];

    $consulta = "SELECT id, usuario, passwords, nombre, tipo FROM usuarios WHERE usuario = '$usuario'";
    $resultado = mysqli_query($conexion, $consulta);
    $num = $resultado->num_rows;

    if ($num > 0) {
        $row = $resultado->fetch_assoc();
        $password_bd = $row['passwords'];
        if ($password == $password_bd) {
            session_start();
            $_SESSION['id'] = $row['id'];
            $_SESSION['nombre'] = $row['nombre'];
            $_SESSION['tipo'] = $row['tipo'];

            header("Location: index2.html");
            exit();
        } else {
            echo '<script language="javascript">alert("Contraseña incorrecta");</script>';
        }
    } else {
        echo '<script language="javascript">alert("Usuario inexistente");</script>';
    
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/login.css">
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
                    <a class="navbar-brand" href="index.html">Hotel Inca</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.html" class="nav_link">Inicio</a></li>
                        <li><a href="nosotros.html" class="nav_link">Nosotros</a></li>
                        <li><a href="habitaciones.html" class="nav_link">habitaciones</a></li>
                        <li><a href="servicios.html" class="nav_link">servicios</a></li>
                        <li><a href="contacto.html" class="nav_link">contacto</a></li>

                        <!-- botones de login y registro -->

                        <li><a href="login.php" class="boton efecto">Iniciar sesion</a></li>
                        <li><a href="registrarse.html" class="boton2 efecto2">Registrarse</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </header>
    <br><br><br>

    <div class="cont-form conte">
        <div class="img-form">

        </div>

        <form class="form" method="post" action="login.php">
            <div class="text-form">
                <h2>Bienvenido de nuevo</h2>
                <p>Inicia sesión con tu cuenta</p>
            </div>
            <div class="inpt_field">
                <input type="email" id="usu" name="usur" required/>
                <span></span>
                <label>Correo electrónico</label>
            </div>
            <div class="inpt_field">
                <input type="password" id="pass" name="paswd" required/>
                <span></span>
                <label>Contraseña</label>
            </div>
            <button type="submit">Iniciar sesión</button>
            <div class="conec">
                <div class="password_conec"><a href="Rcontra.html">¿Olvidaste tu contraseña?</a></div>
                <div class="signup_conec">¿Eres nuevo aquí?&nbsp;<a href="registrarse.html"><br> Registrarse</a> </div>
            </div>
        </form>
    </div>
    <br>
</body>