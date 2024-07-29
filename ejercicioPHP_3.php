<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constante</title>
</head>
<body>
    <h1>sistemas</h1>
    <h2>Guanentá</h2>
    <hr>
    <?php

    // Definición de constantes
define('NOMBRE_APLICACION', 'Mi Aplicación Web');
define('VERSION', '1.0');
define('EMAIL_ADMIN', 'admin@miaplicacion.com');
define('BASE_URL', 'http://www.miaplicacion.com/');

// Mostrar información utilizando las constantes
echo "<h1>Bienvenido a " . NOMBRE_APLICACION . "</h1>";
echo "<p>Versión: " . VERSION . "</p>";
echo "<p>Para asistencia, contacta con el administrador en <a href='mailto:" . EMAIL_ADMIN . "'>" . EMAIL_ADMIN . "</a></p>";
echo "<p>Visita nuestro sitio web en <a href='" . BASE_URL . "'>" . BASE_URL . "</a></p>";
    
    ?>
    
</body>
</html>