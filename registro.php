<?php
include("conexion.php");

if(isset($_POST["register"])){

    if(strlen($_POST["name"]) >= 1 &&
    strlen($_POST["lastNameP"]) >= 1 &&
    strlen($_POST["lastNameM"]) >= 1 &&
    strlen($_POST["fechaDeNacimiento"]) >= 1 &&
    strlen($_POST["facultades"]) >= 1 &&
    strlen($_POST["email"]) >= 1){

    $name = trim($_POST["name"]);
    $lastNameP = trim($_POST["lastNameP"]);
    $lastNameM = trim($_POST["lastNameM"]);
    $fechaDeNacimiento = $_POST["fechaDeNacimiento"];
    $fechareg = date('d/m/y');
    $facultades = $_POST["facultades"];
    $email = trim($_POST["email"]);

    $consulta = "INSERT INTO alumnos(nombre, apellido_paterno, apellido_materno, fecha_de_nacimiento, facultad, email, fecha_reg) VALUES ('$name','$lastNameP','$lastNameM','$fechaDeNacimiento','$facultades','$email','$fechareg')";

    $resultado = mysqli_query($conex, $consulta);

    if ($resultado) {
        ?> 
        <h3 class="ok">¡Te has inscripto correctamente!</h3>
       <?php
    } else {
        ?> 
        <h3 class="bad">¡Ups ha ocurrido un error!</h3>
       <?php
    }
  }   
}
?>
