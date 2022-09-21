<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio2</title>
    </head>
    <body>
        <h1>Ejercicio 2</h1>
        <?php
        $primerNumero = 8;
        $segundoNumero = 5;
        echo '<br>primer numero: ' . $primerNumero . "<br>";
        echo '<br>segundo numero: ' . $segundoNumero . "<br>";
        //uso el caracter "%" que me peprmite conocer el resto de la división entre los números
        echo("<br>El resto de dividir el primer número entre 5: " . $primerNumero % $segundoNumero . "<br>");
        echo '<br>El resultado de dividir el primer número entre el segundo: ' . $primerNumero / $segundoNumero . "<br>";
        echo '<br>El resultado de sumar los dos números: ' . $primerNumero + $segundoNumero;
        ?>
        
    </body>
</html>
