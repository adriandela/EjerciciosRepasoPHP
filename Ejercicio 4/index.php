<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 4</title>
    </head>
    <body>
        <h1>Ejercicio 4</h1>
        <table style="border: black solid 2px; width: 700px">
            <tr><td style="color: white; background-color: black; text-align: center;">Cálculos</td><td style="color: white; background-color: black; text-align: center;">Resultados</td></tr>
            <tr><td>El valor de mi constante es: </td><td><?php
                    //se usa define para definir una constante --> define("nombre que queremos dar a la constante", valor que queremos otorgar a la constante)
                    //PHP_INT_MAX nos da el valor mas alto de un int en PHP
                    define("constante", 10);
                    echo constante;
                    ?></td></tr>
            <tr><td>El resultado de sumar mi constante + 5 es: </td><td><?php echo constante + 5; ?></td></tr>
            <tr><td>El valor máximo que puede tomar un número entero en PHP es: </td><td><?php echo PHP_INT_MAX; ?></td></tr>
        </table>
    </body>
</html>
