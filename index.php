<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de registros de datos</title>
</head>
<body>
    <form action="registro.php" method="post">
        <input type="text" name="name" required>
        <input type="text" name="lastNameP" required>
        <input type="text" name="lastNameM" required>
        <input type="date" name="fechaDeNacimiento" required>
        <select name="facultades" required>
            <option value="">ESCOGE LA FACULTAD A LA QUE PERTENECES</option>
            <option value="idgs">Ingeniería en Desarrollo y Gestión de Software</option>
            <option value="nutricion">Nutrición</option>
            <option value="derecho">Derecho</option>
            <option value="diseño">Diseño</option>
        </select>
        <input type="email" name="email" required>
        <input type="submit" value="Enviar" name="register">
    </form>
</body>
</html>
