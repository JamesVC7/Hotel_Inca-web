<?php   
include 'cn.php';

$correo=$_POST['correo'];

//conexion a base de datos
$consulta="INSERT INTO recuperacion_cuentas (correo) VALUES ('$correo')";

$resultado=mysqli_query($conexion, $consulta);
if (!$resultado) {
    echo 'Error al registrar el correo';
} else {
    echo '<script>
    alert("Correo registrado correctamente , en unos minutos se te enviara una confirmacion a tu correo")
    window.history.go(-1);
    </script>';
}

//Cerrando conexion
mysqli_close($conexion);

?>