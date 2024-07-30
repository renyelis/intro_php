<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones para manipular cadenas</title>
</head>
<body>
    <h1>Funciones para manipular cadenas</h1>
    <?php
        // substr
        $cadena = "Hola, Mundo!";
        $subcadena = substr($cadena, 7, 5); // Obtiene "Mundo"
        echo "<p>substr: $subcadena</p>";

        // ord
        $caracter = "A";
        $valor_ascii = ord($caracter); // Obtiene 65
        echo "<p>ord: $valor_ascii</p>";

        // printf
        $nombre = "Carlos";
        $edad = 30;
        printf("<p>printf: Mi nombre es %s y tengo %d años.</p>", $nombre, $edad);

        // sprintf
        $formateado = sprintf("sprintf: Mi nombre es %s y tengo %d años.", $nombre, $edad);
        echo "<p>$formateado</p>";

        // strtolower
        $mayusculas = "HOLA, MUNDO!";
        $minusculas = strtolower($mayusculas); // Obtiene "hola, mundo!"
        echo "<p>strtolower: $minusculas</p>";

        // strtoupper
        $minusculas = "hola, mundo!";
        $mayusculas = strtoupper($minusculas); // Obtiene "HOLA, MUNDO!"
        echo "<p>strtoupper: $mayusculas</p>";

        // ereg
        $cadena = "123abc";
        if (ereg("^[0-9]+", $cadena)) {
            echo "<p>ereg: La cadena comienza con números.</p>";
        }

        // eregi
        $cadena = "Hola Mundo";
        if (eregi("mundo", $cadena)) {
            echo "<p>eregi: La cadena contiene 'mundo' (sin distinguir entre mayúsculas y minúsculas).</p>";
        }
    ?>
</body>
</html>
