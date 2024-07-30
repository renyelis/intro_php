<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instrucciones condicionales en php</title>
</head>
<body>
    <h1>sistemas</h1>
    <h2>Guanentá</h2>
    <hr>

    <?php
    // esto es un script de php

    $x = 10;
    $y = 15;
    if($x == $y)
    {
        print("x e y son iguales");
    }
    elseif($x > $y)
    {
        print("x es mayor que y");  
    }
    elseif($x < $y)
    {
        print("x es menor que y");  
    }
    ?>
</body>
</html>