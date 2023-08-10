<?php
include 'cn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $opcion = $_POST['opcion'];
    $FechaE = $_POST['fechaE'];
    $FechaS = $_POST['fechaS'];
    $CantidadA = $_POST['cantA'];
    $CantidadN = $_POST['cantN'];
    $nombre = $_POST['nombre'];
    $dni = $_POST['dni'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];

    // Verifica que todos los campos necesarios hayan sido completados
    if (empty($opcion) || empty($FechaE) || empty($FechaS) || empty($CantidadA) || empty($CantidadN) || empty($nombre) || empty($dni) || empty($telefono) || empty($correo)) {
        echo "Por favor, complete todos los campos del formulario.";
    } else {
        
        $consulta = "INSERT INTO reserva (tipo, fechE, fechaS, cantidadA, cantidadN, nombre, dni, telefono, correo)
                     VALUES ('$opcion', '$FechaE', '$FechaS', '$CantidadA', '$CantidadN', '$nombre', '$dni', '$telefono', '$correo')";

        // Ejecutar la consulta y verificar si se insertaron los datos correctamente
        if (mysqli_query($conexion, $consulta)) {
            echo "Reserva realizada con éxito.";
            header("Location: ../index.html");
        } else {
            echo "Error al realizar la reserva: " . mysqli_error($conexion);
        }
    }
} else {
    echo "Error en el método de envío de datos.";
}

// Cerrando conexión
mysqli_close($conexion);
?>
