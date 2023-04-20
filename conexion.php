<?php
$conex = mysqli_connect("localhost", "root", "", "Escuela");
if (mysqli_connect_errno()) {
    echo "Error de conexion a la base de datos: " . mysqli_connect_error();
    exit();
}
?>
