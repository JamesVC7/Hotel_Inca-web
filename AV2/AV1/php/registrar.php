<?php   
include 'cn.php';
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$clave1=$_POST['clave1'];
$clave2=$_POST['clave2'];

//conexion a base de datos
$consulta="INSERT INTO registro (nombre, correo, clave1, clave2) VALUES ('$nombre','$correo','$clave1','$clave2')";

$verificar_usu= mysqli_query($conexion, "SELECT * FROM registro WHERE correo='$correo'");
if (mysqli_num_rows($verificar_usu)>0) {
    echo '<script>
    alert("El usuario ya esta registrado")
    window.history.go(-1);
    </script>';
    exit;
}

$resultado=mysqli_query($conexion, $consulta);
if (!$resultado) {
    echo 'Error al registrase';
} else {
    echo '<script>
    alert("Usuario registrado correctamente")
    window.history.go(-1);
    </script>';
}

//Cerrando conexion
mysqli_close($conexion);

?>