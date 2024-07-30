<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funciones en php</title>
</head>
<body>
    <h1>funciones en php</h1>
    <?php
    /*Una funcion es un bloque de codigo que introducimos en nuestra pagina y que puede ser utilizado a lo largo de todo nuestro codigo php. La principal ventaja de las funciones es que nos permite ahorrar codigo*/
   
    /*Para definir funciones se emplea la sentencia funtion. Las funciones pueden recibir tantos argumentos como sean necesarios, separados por comas*/
   
    echo"<h1>";
    function suma($x, $y)
    {
        $z = $x + $y;
        return $z;
    }
   $resultado = suma(5,12);

   echo"<br>";
   echo$resultado;
   echo"</h1>";
   
   ?>
</body>
</html>