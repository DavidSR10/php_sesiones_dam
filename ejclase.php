<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
<h1>Registro</h1>
<form action="procesar_registro.php" method="post" enctype="multipart/form-data">
    <label for="correo">Correo:</label>
    <input type="email" name="correo" required>

    <label for="contrasena">Contraseña:</label>
    <input type="password" name="contrasena" required>

    <label for="archivo">Archivo (JPG o PDF):</label>
    <input type="file" name="archivo" accept=".jpg, .pdf" required>

    <input type="submit" value="Registrarse">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST["correo"];
    $contrasena = md5($_POST["contrasena"]); // No se recomienda usar MD5 para contraseñas en entornos de producción real.

    // Guardar en MySQL (asume que ya tienes una conexión establecida)
    $conexion = new mysqli("localhost", "root", "", "test");
    $query = "INSERT INTO usuarios (correo, contrasena) VALUES ('$correo', '$contrasena')";
    $conexion->query($query);

    // Redireccionar a la página de login
    header("Location: login.php");
    exit();
}
?>

</body>
</html>
