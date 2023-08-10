<?php
include 'cn.php';
    $nombre= $_POST['nombre'];
    $correo=$_POST['correo'];
    $telefono=$_POST['telefono'];
    $asunto=$_POST['asunto'];
    $textArea=$_POST['textArea'];

//conexion a base de datos
$consulta="INSERT INTO contacto (nombre, correo, telefono, asunto, comentario) VALUES ('$nombre','$correo','$telefono','$asunto','$textArea')";
$resultado=mysqli_query($conexion, $consulta);
if (!$resultado) {
    echo 'Error al registrar solicitud';
} else {
    echo '<script>
    alert("Solicitud registrada correctamente")
    window.history.go(-1);
    </script>';
}
//Cerrando conexion
mysqli_close($conexion);
?>