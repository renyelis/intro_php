<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funciones para manipular cadenas</title>
</head>
<body>
    <h1>funciones para manipular cadenas</h1>
    <?php
// Cadena de ejemplo
$cadena = "Hola Mundo!";

// 1. substr — Extrae una parte de la cadena
// Extrae una subcadena desde el índice 0 con una longitud de 4 caracteres
$subcadena = substr($cadena, 0, 4);
echo "substr: $subcadena\n"; // Salida: Hola

// 2. ord — Obtiene el valor ASCII del primer carácter de una cadena
// Obtiene el valor ASCII del primer carácter de la cadena
$valor_ascii = ord($cadena[0]);
echo "ord: $valor_ascii\n"; // Salida: 72 (que es el valor ASCII de 'H')

// 3. printf — Imprime una cadena formateada
// Imprime la cadena con un formato específico
printf("printf: %s\n", $cadena); // Salida: printf: Hola Mundo!

// 4. sprintf — Devuelve una cadena formateada
// Crea una cadena formateada sin imprimirla
$cadena_formateada = sprintf("sprintf: %s", $cadena);
echo "$cadena_formateada\n"; // Salida: sprintf: Hola Mundo!

// 5. strtolower — Convierte todos los caracteres de la cadena a minúsculas
// Convierte la cadena a minúsculas
$cadena_minusculas = strtolower($cadena);
echo "strtolower: $cadena_minusculas\n"; // Salida: hola mundo!

// 6. strtoupper — Convierte todos los caracteres de la cadena a mayúsculas
// Convierte la cadena a mayúsculas
$cadena_mayusculas = strtoupper($cadena);
echo "strtoupper: $cadena_mayusculas\n"; // Salida: HOLA MUNDO!

// 7. ereg — (Obsoleto) Busca una expresión regular en una cadena
// Nota: ereg está obsoleto en PHP 5.3.0 y versiones posteriores. Se recomienda usar preg_match en su lugar.
if (function_exists('ereg')) {
    $patron = "Mundo";
    $match = ereg($patron, $cadena);
    echo "ereg: " . ($match ? "Encontrado" : "No encontrado") . "\n";
} else {
    echo "ereg está obsoleto y no está disponible en esta versión de PHP.\n";
}

// 8. eregi — (Obsoleto) Busca una expresión regular (insensible a mayúsculas/minúsculas)
// Nota: eregi está obsoleto en PHP 5.3.0 y versiones posteriores. Se recomienda usar preg_match en su lugar.
if (function_exists('eregi')) {
    $patron_i = "mundo";
    $match_i = eregi($patron_i, $cadena);
    echo "eregi: " . ($match_i ? "Encontrado" : "No encontrado") . "\n";
} else {
    echo "eregi está obsoleto y no está disponible en esta versión de PHP.\n";
}

// Ejemplo alternativo usando preg_match en lugar de ereg y eregi
$patron = "/Mundo/";
if (preg_match($patron, $cadena)) {
    echo "preg_match (sensible a mayúsculas/minúsculas): Encontrado\n"; // Salida: Encontrado
} else {
    echo "preg_match (sensible a mayúsculas/minúsculas): No encontrado\n";
}

// Ejemplo alternativo usando preg_match con modificador 'i' para insensibilidad a mayúsculas/minúsculas
$patron_i = "/mundo/i";
if (preg_match($patron_i, $cadena)) {
    echo "preg_match (insensible a mayúsculas/minúsculas): Encontrado\n"; // Salida: Encontrado
} else {
    echo "preg_match (insensible a mayúsculas/minúsculas): No encontrado\n";
}
?>

</body>
</html>