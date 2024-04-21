<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tarjeta de Inicio de Sesión</title>
<link rel="stylesheet" href="stylessesion.css">
</head>
<body>

<?php
// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Procesar los datos del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];

    // Aquí podrías validar y almacenar los datos en una base de datos, por ejemplo
    // Luego, podrías redirigir al usuario a otra página o mostrar un mensaje de éxito
    // Por simplicidad, aquí solo mostraremos un mensaje de éxito
    echo "<p>¡Inicio de sesión exitoso para $usuario!</p>";
} else {
    // Si no se ha enviado el formulario, mostrar el formulario de inicio de sesión
?>
<div class="card">
    <h2>Iniciar Sesión</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="apellido" placeholder="Apellido" required>
        <input type="date" name="fecha_nacimiento" placeholder="Fecha de Nacimiento" required>
        <input type="email" name="correo" placeholder="Correo Electrónico" required>
        <input type="text" name="usuario" placeholder="Nombre de Usuario" required>
        <button type="submit">Iniciar Sesión</button>
    </form>
    <p>¿Aún no tienes una cuenta? <a href="#">Regístrate aquí</a></p>
</div>
<?php
}
?>


</body>
</html>
