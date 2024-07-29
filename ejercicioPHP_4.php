<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> operadores comparación, operadores lógicos, union de cadenas</title>
</head>
<body>
    <h1>sistemas</h1>
    <h2>Guanentá</h2>
    <hr>
    <?php

    // Definición de variables
$x = 15;
$y = 20;
$nombre = "Juan";
$apellido = "Pérez";

// Operadores de comparación
echo "<h2>Operadores de Comparación:</h2>";

echo "Comparando x y y:<br>";
echo "x == y: " . ($x == $y ? "true" : "false") . "<br>";
echo "x === y: " . ($x === $y ? "true" : "false") . "<br>";
echo "x != y: " . ($x != $y ? "true" : "false") . "<br>";
echo "x !== y: " . ($x !== $y ? "true" : "false") . "<br>";
echo "x > y: " . ($x > $y ? "true" : "false") . "<br>";
echo "x < y: " . ($x < $y ? "true" : "false") . "<br>";
echo "x >= y: " . ($x >= $y ? "true" : "false") . "<br>";
echo "x <= y: " . ($x <= $y ? "true" : "false") . "<br>";

// Operadores lógicos
echo "<h2>Operadores Lógicos:</h2>";

$esMayorDeEdad = ($x >= 18);
$esEstudiante = true;

echo "Evaluando condiciones lógicas:<br>";
echo "esMayorDeEdad && esEstudiante: " . ($esMayorDeEdad && $esEstudiante ? "true" : "false") . "<br>";
echo "esMayorDeEdad || esEstudiante: " . ($esMayorDeEdad || $esEstudiante ? "true" : "false") . "<br>";
echo "!esMayorDeEdad: " . (!$esMayorDeEdad ? "true" : "false") . "<br>";
echo "esMayorDeEdad xor esEstudiante: " . ($esMayorDeEdad xor $esEstudiante ? "true" : "false") . "<br>";

// Unión de cadenas
echo "<h2>Unión de Cadenas:</h2>";

$nombreCompleto = $nombre . " " . $apellido;
echo "Nombre completo: " . $nombreCompleto . "<br>";

$saludo = "Hola, mi nombre es " . $nombre . " " . $apellido . ".";
echo "Saludo: " . $saludo . "<br>";
?>


    ?>
    
</body>
</html>