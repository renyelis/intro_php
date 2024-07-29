<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>instrucción if, if-else, elseif
</title>
</head>
<body>
    <h1>sistemas</h1>
    <h2>Guanentá</h2>
    <hr>
    <?php

    // Definición de variables
$edad = 25;
$esMiembro = true;
$puntos = 45;

// Instrucción if
echo "<h2>Instrucción if:</h2>";
if ($edad >= 18) {
    echo "Eres mayor de edad.<br>";
}

// Instrucción if-else
echo "<h2>Instrucción if-else:</h2>";
if ($esMiembro) {
    echo "Eres miembro del club.<br>";
} else {
    echo "No eres miembro del club.<br>";
}

// Instrucción if-elseif-else
echo "<h2>Instrucción if-elseif-else:</h2>";
if ($puntos >= 100) {
    echo "¡Has alcanzado el nivel de experto!<br>";
} elseif ($puntos >= 50) {
    echo "Tienes un nivel intermedio.<br>";
} elseif ($puntos >= 20) {
    echo "Eres un principiante.<br>";
} else {
    echo "Necesitas ganar más puntos.<br>";
}

 
?>

</body>
</html>