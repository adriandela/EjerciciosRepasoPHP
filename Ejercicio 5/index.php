<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 5</title>
    </head>
    <body>
        <h1>Ejercicio 5</h1>
        <?php
        $numEntero = 4.5;
        echo '<br>el numero elegido para $numEntero es: ' . $numEntero . "<br>";
        //usamos is_float que nos devuelve un valor booleano si la variable es float o no
        if (is_float($numEntero)) {
            echo 'el numero es FLOAT<br>';
        } else {
            echo 'el numero NO es float<br>';
        }
        echo '<br>----------------------------------------------------------------<br>';
        $variableSinValor ;
        //usamos is_null que nos devuelve un valor booleano si el valor de la variable es nulo o no
        if (is_null($variableSinValor)) {
            echo 'el valor es NULO<br>';
        } else {
            echo '<br>el valor NO es NULO, es: '.$variableSinValor;
        }
        ?>
    </body>
</html>
