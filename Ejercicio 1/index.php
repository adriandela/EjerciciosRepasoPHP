<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ejercicio 1</title>
    </head>
    <body>
        <div style="border: black 2px solid; width: 400px">
            <h1>Ejercicio 1</h1>
            <h2>La fecha de hoy es:</h2>
            <?php
            //aqui he usado la funcion date que proporciona fecha y hora pasandola ciertos parámetros --> date("parámetros")
            echo(date("l, F jS Y"));
            ?>
            <h2>Y la hora:</h2>
            <?php
            echo("Son las " . date("i:G:s"));
            ?>
        </div>
    </body>
</html>
