<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduccion a PHP</title>
</head>
<body>
    <h1>Introduccion a PHP</h1>
    <?php
        echo "Hola sistemas";
        //La función echo permite realizar la impresión de texto
            echo "Primera página con PHP";
            //Esto es un comentario

            //Variables
            /*En PHP las variables se declaran con el signo $ seguido 
            del nombre de la variable.  El nombre de la variable es 
            sensible a las minusculas y  mayuscula.  Debe empezar por
            una letra o raya de piso.  Se recomienda inicializar las
            variables.  Se puede utilizar las funciones isseo empty()
            para determinar si una variable ha sido inicializada.  Para
            destruir una variable se utiliza la función unset()*/

            //Ejemplos
            $nombre_variable = "Nestor";
            $Nombre_Variable = "Jesus";
            $_mivariable = 23456;
            $N_1_2_a_b = 32.15;
            $variable;
            $mi_variable = isset($_mivariable); //Retorna verdadero
            $mi_variable = !empty($variable);  //Retorna falso
            unset($_mivariable);
            echo "<h3><br>";
            //Definición
            $numero = 80;
            //Visualización de variables
            echo "Variable numérica: ".$numero;

            echo "</h3>";

    ?>
</body>
</html>