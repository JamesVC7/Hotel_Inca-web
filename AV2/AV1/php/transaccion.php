<?php
include 'cn.php';
$fecha = date('Y-m-d H:i:s');
$imagen=addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));
$consulta="INSERT INTO pagos (fecha, imagen) VALUES ('$fecha','$imagen')";
$resultado=mysqli_query($conexion,$consulta);

if ($resultado) {
    echo '<script>
    alert("Se inserto correctamente")
    window.history.go(-1);
    </script>';
}else{
    echo '<script>
    alert("No inserto correctamente")
    window.history.go(-1);
    </script>';
}

?>